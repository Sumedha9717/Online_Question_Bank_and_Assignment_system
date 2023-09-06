<?php
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $to = "digiworks44@gmail.com";
        $subject = "Contact us";
        $name = $_POST['name'];
        $email =$_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $headers = "From: hello\r\n";
        if(empty($name)||empty($email)||empty($message))
        {
           echo 'Enter All fields';
        }
        else
        {
            if(mail($to, $subject, $message, $headers))
            {
                header("location:index.php?success");
            }
            else{
                header("location:index.php?error");
            }
        }
    }
    else{
        echo header("location:index.php");
    }
?>