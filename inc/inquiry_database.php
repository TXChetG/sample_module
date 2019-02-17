<?php
//Set the header to JSON
header("content-type:application/json");

/*
We can't output errors and info to the screen when making an AJAX app, 
so we save them in a variable and do something with them later.
*/
$output_log = "";

//Create some variable to track errors so we can send them back in the JSON response
$error = false;
$error_message = "";

/**
 *
 *  Setting up connection to the database, followed by functions to create prepared
 *  prepared statements of the incoming data for insertion into the database.
 *
 */


//Only process data if the correct post data is there
if (isset($_POST['record_data']) ) {

  //Modify this script to also email enrollment on
  //form submission. Require Peal Mail to start.
  require_once 'Mail.php';


  //Get the post data and decode it.
  $postData = json_decode($_POST['record_data']);

  //Set PostData vars for messaging and inserting
  $first_name = $postData->{'first_name'};
  $last_name = $postData->{'last_name'};
  $email = $postData->{'email'};
  $phone = $postData->{'cell_phone'};
  $message = $postData->{'message'};
  $source = $postData->{'inquiry_source'};

  /* Connect to the database */
  $db = new PDO('mysql:host=localhost;dbname=database;charset=utf8', 'redacted', 'redacted', array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

try {
  //Save the record.
  $stmt = $db->prepare('INSERT INTO table (first_name, last_name, email, phone, message, source) VALUES (:first_name, :last_name, :email, :phone, :message, :source)');
  $stmt->bindParam(':first_name', $first_name);
  $stmt->bindParam(':last_name', $last_name);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':phone', $phone);
  $stmt->bindParam(':message', $message);
  $stmt->bindParam(':source', $source);
  $stmt->execute();
} catch (Exception $e) {
    $error = true;
    $error_message = "Problem saving to the database";
}

  // Build the email and send it to enrollment
  $from = '';
  $to = '';
  $subject = 'New Form Submission on an LP';
  $message = "Hey! Someone submitted an LP form. Here's their data. Remember to check that the record is in Recruit.\r\n\r\n";
  $message .= "First Name: " . $first_name . "\r\n";
  $message .= "Last Name: " . $last_name . "\r\n";
  $message .= "Email: " . $email . "\r\n";
  $message .= "Phone: " . $phone . "\r\n";
  $message .= "Comments: " . $message . "\r\n";
  $message .= "Source: " . $source . "\r\n";

  $headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject,
    'Content-Type' => 'text/plain;'
  );

  $smtp = Mail::factory('smtp', array(
    'host' => 'ssl://smtp.gmail.com',
    'port' => '465',
    'auth' => 'PLAIN',
    'username' => '',
    'password' => ''
  ));
// Send the email - turned off to promote CRM emails
  //$mail = $smtp->send($to, $headers, $message);

  /*
  Write the post variables to the log so we know they're working.
  Comment out for prod.
  */
/*  $output_log .= "First Name: ". $postData->{'first_name'} . "\n";
  $output_log .= "Last Name: ". $postData->{'last_name'} . "\n";
  $output_log .= "Gender: ". $postData->{'gender'} . "\n";
  $output_log .= "Birth Date: ". $postData->{'birth_date'} . "\n";
  $output_log .= "Address: ". $postData->{'address'} . "\n";
  $output_log .= "City: ". $postData->{'city'} . "\n";
  $output_log .= "State: ". $postData->{'state'} . "\n";
  $output_log .= "Zip: ". $postData->{'zip'} . "\n";
  $output_log .= "Cell Phone: ". $postData->{'cell_phone'} . "\n";
  $output_log .= "Email: ". $postData->{'email'} . "\n";
  $output_log .= "Location: ". $postData->{'location'} . "\n";
  $output_log .= "Origin Source: ". $postData->{'origin_source'} . "\n";
  $output_log .= "Inquiry Source: ". $postData->{'inquiry_source'} . "\n";
  $output_log .= "Anticipated Entry Term: ". $postData->{'anticipated_entry_term'} . "\n";
  $output_log .= "Owner: ". $postData->{'owner'} . "\n";
  $output_log .= "Territory: ". $postData->{'territory'} . "\n";
  $output_log .= "Admit Type: ". $postData->{'admit_type'} . "\n";*/

/*
  Write the output log to a file so we can look at it.
  Comment out in the production code.
  */
  /*$file = '/var/www/html/lp/output.txt';
  // Open the file to get existing content
  $current = file_get_contents($file);
  // Write the contents back to the file
  file_put_contents($file, $output_log);*/

  //Return something so we can make sure the save worked

  if($error){
    echo '{"Message":"'.$error_message.'"}';
  }
  else {
    echo '{"Message":"Success"}';

  }
}
else {
  // No correct post data, print an error
  echo 'Error';
}

?>