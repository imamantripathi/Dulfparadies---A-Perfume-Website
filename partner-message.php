<?php
if (isset($_POST['submit'])) {
    $to = "imamantripathi@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];
    $subject = "Form submission";
    $subject2 = "< Partner Page Data > ";
    $message = $name . " " . " wrote the following:" . "\n\n" . $message;
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $message;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
    echo " <script> alert( 'Mail Sent. Thank you ' . $name . ', we will contact you shortly.');</script>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    header('Location: index.html');
}
?>