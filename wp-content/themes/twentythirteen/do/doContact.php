<?php
session_start();
function send_email($from, $to,$replyto, $subject, $message, $checkstatus){
	$headers = "From: ".$from."\r\n";
	$headers .= "Reply-To: ".$replyto."\r\n";
	$headers .= "Return-Path: ".$from."\r\n";
	$headers .= "Content-type: text/html\r\n"; 
	

 if ($checkstatus)
 {
	if ( mail($to,$subject,$message,$headers) ) {
	   echo "SUCCESS";
	   
	} else {
	   echo "FAILURE";
	}
	//echo "SUCCESS";
 }
 else
 {
	 mail($to,$subject,$message,$headers);
 }
}









//print_r($_POST);
$contactname = $_POST['name']; // required
$email = $_POST['email']; //requires
$phone  = $_POST['phone'];
$comments = $_POST['msg'];

 


    
// For Website Owner : Edit details here..
    $siteurl = "http://cmps.in/";
	 $to_email ="info@cmps.in, cmps.in";	 
	
	$replyto_email = $email;
//    $from_email = "Customer"."<customer@cmps.in>";	
  $from_email = $email;
    $subject = "Centris Mobility & Project Services - Quick Enquiry Form"; // required
    $message = "<h2>Form Details:</h2>";
    $message .= "<br />Name :: ".$contactname;
    $message .= "<br />Email :: ". $email;
	$message .= "<br />Phone :: ". $phone;
	$message .= "<br />Message :: ". $comments;
 
 
	
  //Send Mail : 
  send_email($from_email, $to_email,$replyto_email,$subject,$message,false);
// **********************************************************************************    
// For Customer : 	
		
$to_email =  $email;
$femail = "Centris Mobility & Project Services"."<info@cmps.in>";
$from_email = $femail;
$replyto_email =$femail;
$subject = "Thanks for your  Enquiry -  Centris Mobility & Project Services";
$message = "<html><body>";
$message .= "Dear ".$contactname.",";
$message .= "<br />Thanks for your enquiry";
$message .= "<br /> <p>Someone will be in touch with you.</p>";
$message .= "<br />Regards<br/>Admin<br />".$siteurl;
$message .= "</body></html>";

 //Send Mail : 
  send_email($from_email, $to_email,$replyto_email,$subject,$message,true);
   ?>