<?php
$errors = '';
$myemail = 'info@edfeatdessert.com';//<-----Put Your email address here.
if(empty($_POST['name'])  || empty($_POST['mobile'])  ||
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email = $_POST['email']; 
$message = $_POST['message']; 
$mobile = $_POST['mobile'];


if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))

{

$to = $myemail;

$email_subject = "Contact form submission:  $name";

$email_body = "You have received a new message. ".

" Here are the details:\n Name: $name  \n".
"Phone-Number: $mobile\n ".
"Email: $email\n "."Message \n $message \n ";

$headers = "From: $myemail\n";

$headers .= "Reply-To: $email";

mail($to,$email_subject,$email_body,$headers);

//redirect to the 'thank you' page


// echo "<script>alert('Thanks For Connecting Us ! We will Contact You Shortly')</script>";
            echo "<script>window.open('contact-form-thank-you.html','_self')</script>";
}
?>