<?php
$errors = '';
$myemail = 'info@edfeatdessert.com'; //<-----Put Your email address here.
if (
    empty($_POST['name']) ||
    empty($_POST['mobile']) ||
    empty($_POST['cake']) ||
    empty($_POST['weight']) ||
    empty($_POST['quantity']) ||
    empty($_POST['address'])
) {
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name'];
$cake = $_POST['cake'];
$quantity = $_POST['quantity'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$weight = $_POST['weight'];



if (empty($errors)) {

    $to = $myemail;

    $email_subject = "New Order submission:  $name";

    $email_body = "You have received a new Order. \n" .

        " Here are the details:\n Name: $name  \n" .
        "Phone-No: $mobile\n " .
        "Cake Name: $cake\n " . "Quantity: $quantity \n " . "Weight: $weight \n " . "Address: \n $address \n ";

    $headers = "From: $myemail\n";

    $headers .= "Reply-To: $email";

    mail($to, $email_subject, $email_body, $headers);

    //redirect to the 'thank you' page


    // echo "<script>alert('Thanks For Connecting Us ! We will Contact You Shortly')</script>";
    echo "<script>window.open('order-form-thank-you.html','_self')</script>";
}
