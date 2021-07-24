<?php

  $server="localhost";
  $username="root";
  $password="";


  $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection failed". mysqli_connect_error());
    }
    echo "successfully connected";
    $firstName = $_POST['name'];
  //$phone = $_POST['phone'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
    $sql = "INSERT INTO `vdp`.`contacts` (`name`, `email`, `subject`, `message`) VALUES ('$firstName','$email','$subject','$message');";

    

    if($con ->query($sql) ==true){
        echo "Message sent... Our team will contact you soon";
    }
    else {
        echo"error";
    }

    $con->close();
?>
