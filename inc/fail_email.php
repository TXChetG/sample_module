<?php
//Set the header to JSON
header('content-type:application/json');
$error = false;
$error_message = '';
	if ( isset( $_POST['record_data'] ) ){
		$postData = json_decode( $_POST['record_data'] );
		require_once 'Mail.php';

		try{
			// Let's send Justin an email whenever someone submits
			// LP and Recruit throws a hissy fit.
			$from = '';
			$to = '';

			$subject = 'OLA Form Submission Failed';
			$message = "Hey! Someone submitted an OLA form, and Recruit spit it out. Here's their information.\r\n\r\n";
			$message .= "First Name: " . $postData->{'first_name'} . "\r\n";
			$message .= "Last Name: " . $postData->{'last_name'} . "\r\n";
			$message .= "Email: " . $postData->{'email'} . "\r\n";
			$message .= "Phone: " . $postData->{'cell_phone'} . "\r\n";
			$message .= "Campus: " . $postData->{'location'} . "\r\n";
			$message .= "Program Interest: " . $postData->{'academic_program'} . "\r\n";
			$message .= "Comments: " . $postData->{'comments'} . "\r\n";
			$message .= "Source: " . $postData->{'inquiry_source'} . "\r\n";

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

			$mail = $smtp->send($to, $headers, $message);

			if (PEAR::isError($mail)) {
				echo ($mail->getMessage());
			} else {
				echo('Successfully Sent');
			}

			//mail($to,$subject,$message);
			// $ship_it = json_encode($message);
			// echo $ship_it;
		} catch ( Exception $e ) {
			$error = true;
			$error_message = 'Email not sent';
		}

		if($error){
			echo '{"Error Message":"'. $error_message . '"}';
		}
	}
?>