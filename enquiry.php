<?php 
include "admin/includes/config.php";
 
if($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO customer_enqueries (customer_name, customer_email, customer_mobile, customer_feedback) VALUES ('$name', '$email', '$phone', '$message')";
    if($conn->query($sql) === TRUE){
       echo "<script>alert('Data Updated Successfully');window.location.href='index.php';</script>";
    } else {
       echo "<script>alert('Data Updation Failed');window.location.href='index.php';</script>";
    }
 
    $dbConn->close();
}
 
?>
