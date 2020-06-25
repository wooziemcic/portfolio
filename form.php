<?php
    if(isset($_POST['submit'])){
        $name =$_POST['name'];
        $email =$_POST['email'];
        $message=$_POST['message'];

        $to='aayushmallik@outlook.com';
        $subject='Portfolio Message';
        $msg = "Name: ".$name."\n"."Wrote to you: "."\n\n".$message;
        $headers="From: ".$email;

        if(mail($to, $subject, $msg, $headers)){
            echo"<script>alert('Submitted. Thank you for your time.'); </script>";
        }
        else{
            echo"<script>alert('Error. Could not be submitted.'); </script>";
        }
    }
?>