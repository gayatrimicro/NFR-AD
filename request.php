<?php
// var_dump($_FILES);
// die();

include "mailer/vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;


	/*---------*/

	$val_name = $_POST["name"];
	$val_symptoms  = $_POST["symptoms"];
	$val_zipcode = $_POST["zipcode"];
	$val_phone = $_POST["phone"];
	$val_email= $_POST["email"];
	$val_spine = $_POST["spine"];	
	$val_joints = $_POST["joints"];
	
	$from_mail = "fe@gmicro.us";
	$doc_mail = "Now Find Relief";

	$message= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>

				  <tr><td style='font-size:1.3em;' colspan='2'><strong>Appointment details</strong></td></tr>
				   <tr>
					   <td align='left' width='35%'><strong>Name :</strong></td>
					   <td align='left' width='60%'>
					   ".  $val_name ."</td>
					 </tr>

					  <tr>
					   <td align='left' width='35%'><strong>Symptom :</strong></td>
					   <td align='left' width='60%'>
					   ".  $val_symptoms ."</td>
					 </tr>

					 <tr>
					   <td align='left' width='35%'><strong>zipcode :</strong></td>
					   <td align='left' width='60%'>
					   ".  $val_zipcode ."</td>
					 </tr>


					 <tr>
					   <td align='left' width='35%'><strong>Phone Number :</strong></td>
					   <td align='left' width='60%'>
					   ". $val_phone ."</td>
					 </tr>


					 <tr>
					   <td align='left' width='35%'><strong>Email Address:</strong></td>
					   <td align='left' width='60%'>
					    ".  $val_email ."</td>
					 </tr>

					 <tr>
					   <td align='left' width='35%'><strong>Spine Pain :</strong></td>
					   <td align='left' width='60%'>
					   ". $val_spine ."</td>
					 </tr>
					 
					

					<tr>
					   <td align='left' width='35%'><strong>Joint Pain :</strong></td>
					   <td align='left' width='60%'>
					   ". $val_joints ."</td>
					 </tr>

					

					 
				   </table>";


				   

$mail = new PHPMailer(true);

try {
//From email address and name
$mail->From = $from_mail;
$mail->FromName = $doc_mail;

//To address and name
// $mail->addAddress("kalpesh@specialtycareclinics.com", "User Details");
$mail->addAddress("content@gmicro.us", "User Details");
$mail->addAddress("seo@gmicro.us", "User Details");

	// var_dump($_POST);
	// exit();
$mail->isSMTP();                                            // Send using SMTP
$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = 'fe@gmicro.us';                     // SMTP username
$mail->Password   = 'Command55';                               // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port       = 587;
	 
$mail->isHTML(true);
$mail->Subject = "Referral Form";
$mail->Body = $message;

	$mail->send();
	 // $location = $_POST["location"];

	 
	
	// $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
	// $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
	
		 
				  
		//if(mail("content@gmicro.us, fe@gmicro.us", $subject, $message, $headers))
		echo "Your enquiry has been sent successfully..";
	} catch (Exception $e) {
		echo $e;
		echo "Something went wrong";	 
		}

		
		//$msg = "Your enquiry has been sent successfully.";
		
	
?>