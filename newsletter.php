<?php 
include "admin/includes/config.php";
 
if($_POST) {
    $email = $_POST['email'];
    $sql = "INSERT INTO newsletter (email) VALUES ('$email')";
    if($conn->query($sql) === TRUE){
       echo "<script>alert('Data Updated Successfully');window.location.href='index.php';</script>";
    } else {
       echo "<script>alert('Data Updation Failed');window.location.href='index.php';</script>";
    }
 
    $dbConn->close();
}
 
?>