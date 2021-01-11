<?php
    if(isset($_POST['submit'])){
        $fName=$_POST['firstName'];
        $lName=$_POST['lastName'];
        $email=$_POST['email'];
        $Queries=$_POST['queries'];
        $Num=$_POST['number'];

        $to='rexcalidaddesigns@gmial.com';
        $subject='[dekreativekleaning.com] New Message received';
        $message="Name:" .$fName." ".$lName."\n"."Email: ".$email."\n". "Telephone Number: ".$Num."\n". "Message:" .$Queries;
        $msg="Sent Successfully!";
        $msg1="Ooops Something went wrong!";
        $headers="From: ".$email;


        if(mail($to, $subject, $message, $headers)){
            echo"<script>alert('$msg'); window.history.go(-1)</script>";
            
        }
        else{
            echo"<script>alert('$msg1'); window.history.go(-1)</script>";
            
        }
    }
?>