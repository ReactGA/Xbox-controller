<?php

if(isset($_POST['submit'])){
    $name = trim($_POST['name']);
    $eMail = trim($_POST['E-Mail']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    $myMail = "Rajimalik0@gmail.com";
    $header ="From:" . $eMail;
    $newMessage = "You have recieved an email from". $name 
    .".  \n\n" .$message;

    mail($myMail,$subject,$newMessage,$header);
    header("Location: index.php?mailSent");

}

?>