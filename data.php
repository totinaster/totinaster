<html>
<body>



<?php

//$errors = '';
//$myemail = 'ucto@uctovnictvo-poprad.sk';
//if(empty($_POST['name'])  ||
//   empty($_POST['email']) ||
//   empty($_POST['message']))
//{
//   $errors .= "\n Error: all fields are required";
//}
//$name = $_POST['name'];
//$email_address = $_POST['email'];
//$message = $_POST['message'];
//if (!preg_match(
//"/ ^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
//$email_address))
//{
//    $errors .= "\n Error: Invalid email address";
//}
//if( empty($errors))
//{
//    $to = '$myemail';
//    $email_subject = "Contact form submission: $name";
//    $email_body = "You have received a new message. ".
//        " Here are the details:\n Name: $name \n ".
//        "Email: $email_address\n Message \n $message";
//    $headers = "From: $myemail\n";
//    $headers .= "Reply-To: $email_address";
//    mail($to,$email_subject,$email_body,$headers);
 
//    header('Location: contact-form-thank-you.html');
//}


$email = $_POST["email"];
$to = "ucto.pp@gmail.com";
$subject = "správa z webu";
$name = $_POST['name'];
$headers = "From: ucto@uctovnictvo-poprad.sk";
$message = "From: ".$email.", ".$subject.",".$_POST['date'].",".$_POST['pozi'].",".$_POST['zrzi'].",".$_POST['zazi'].",".$_POST['zafi'].",".$_POST['zmma'].",".$_POST['zmve'].",".$_POST['other'].",".$_POST['name'];


$user = "$email";
$usersubject = "Thank You";
$userheaders = "From: info@uctovnictvo-poprad.sk\n";
$usermessage = "Vašu správu sme dostali a budeme sa Vám čo najskôr venovať. Želáme pekný deň!";
mail($to,$subject,$message,$headers);
mail($user,$usersubject,$usermessage,$userheaders);
echo "Vaša správa bola odoslaná.";

?>
</body>
</html>