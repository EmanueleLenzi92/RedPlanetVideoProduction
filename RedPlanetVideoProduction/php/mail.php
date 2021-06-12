<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
header('Content-Type: application/json');
if ($name === ''){
print json_encode(array('message' => 'Devi inserire il nome', 'code' => 0));
exit();
}
if ($email === ''){
print json_encode(array('message' => 'Devi inserire la tua email', 'code' => 0));
exit();
} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
print json_encode(array('message' => 'Email non valida', 'code' => 0));
exit();
}
}
if ($subject === ''){
print json_encode(array('message' => 'Devi inserire un soggetto', 'code' => 0));
exit();
}
if ($message === ''){
print json_encode(array('message' => 'Devi inserire il messaggio', 'code' => 0));
exit();
}
$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "redplanetvideoproduction@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
print json_encode(array('message' => '<p class="text-success">Email inviata. Ti contatteremo al più presto!</p>', 'code' => 1));
exit();
?>