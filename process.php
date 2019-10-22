<?php
if (isset($_POST['submit'])){

    $from = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['text'];
    $message = $_POST['message']; 
     
    $to = "vatsalcshah@gmail.com";
    $headers = "From: $from";
    $subject = "You have a message.";
    $body = "Here is what was sent:\r\n"; 

    mail($to, $subject, $body, $headers);
    header("Location: index.php?mailsend");
}
?>