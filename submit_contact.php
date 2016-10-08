<?php
require '/phpmailer/class.phpmailer.php';

$name=$_POST['name'];
if($name==""){ $name = "none"; }
$email=$_POST['email'];
if($email==""){ $email = "none"; }
$phone=$_POST['phone'];
if($phone==""){ $phone = "none"; }
$message=$_POST['message'];
if($message==""){ $message= "none"; }
 
$status = "OK";
$msg="";

if(($email=="none")&&($phone=="none")){
	$msg=$msg."You must enter either an email or phone number. Please retry.&nbsp;";
	$status= "NOTOK";
}	

if($email<>"none"){
	if(check_email($email)==false){
		$msg=$msg."The email address is not valid. Please try another.&nbsp;";
		$status= "NOTOK";
	}
}	

if($status<>"OK"){
	echo '<img src="/images/error.png" style="height:40px;" />&nbsp;&nbsp;'.$msg;
}else{
	$subject = "NEW LEAD for Ready Ready Moving: ".$name;
	$body = "Name: ".$name."\nEmail: ".$email."\nPhone: ".$phone."\nMessage: ".$message;
	send_emails($email, $subject, $body);

	echo '<img src="/images/success.png" style="height:20px;" />&nbsp;&nbsp;We will contact you ASAP and we\'ve sent you a welcome email. <i>Thank you!</i>';
}

function send_emails($email, $subject, $body) {
	//Send emails to Ready Ready Moving and Wave Link admin
	$mail = new PHPMailer();
	$mail->IsSMTP();                // Sets up a SMTP connection
	$mail->SMTPDebug  = 0;          // This will print debugging info
	$mail->SMTPAuth = true;         // Connection with the SMTP does require authorization
	$mail->SMTPSecure = "tls";      // Connect using a TLS connection
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587;
	$mail->FromName = 'Ready Ready Moving';
	$mail->Username   = "readyreadymovingllc@gmail.com"; // Login
	$mail->Password   = "jumpboi123"; // Password
	
	$mail->Subject = "Ready Ready Moving - someone will be contacting you shortly!";     // Subject (which isn't required)
	$mail->Body = "Thank you for your interest!\nWe will contact you ASAP and get you setup with a move."; // Body of our message
	$mail->AddAddress( $email );
	$mail->send();      // Send!
	
	$mail->Subject = $subject;     // Subject (which isn't required)
	$mail->Body = $body; // Body of our message
	$mail->ClearAllRecipients();
	$mail->AddAddress( "readyreadymovingllc@gmail.com" );
	$mail->AddAddress( "aadams@wavelinkllc.com" );
	$mail->AddAddress( "dclark@wavelinkllc.com" );
	$mail->AddAddress( "kgraddick@wavelinkllc.com" );
	$mail->send();      // Send!
}

function check_email($email) {
  // First, we check that there's one @ symbol, 
  // and that the lengths are right.
  if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
    // Email invalid because wrong number of characters 
    // in one section or wrong number of @ symbols.
    return false;
  }
  // Split it into sections to make life easier
  $email_array = explode("@", $email);
  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) {
    if
(!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&
↪'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$",
$local_array[$i])) {
      return false;
    }
  }
  // Check if domain is IP. If not, 
  // it should be valid domain name
  if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) {
    $domain_array = explode(".", $email_array[1]);
    if (sizeof($domain_array) < 2) {
        return false; // Not enough parts to domain
    }
    for ($i = 0; $i < sizeof($domain_array); $i++) {
      if
(!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|
↪([A-Za-z0-9]+))$",
$domain_array[$i])) {
        return false;
      }
    }
  }
  return true;
}

?>