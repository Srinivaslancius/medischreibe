<?php
include_once('includes/config.php');
include_once('includes/functions.php');
$id = $_GET['bid'];
//echo $music_number;
$target_dir = '../uploads/keypractice_images/';
$getImgUnlink = getImageUnlink('image','key_practices','id',$id,$target_dir);
$qry = "DELETE FROM key_practices WHERE id ='$id'";
$result = $conn->query($qry);
if(isset($result)) {
   echo "<script>alert('key practices Deleted Successfully');window.location.href='key_practices.php';</script>";
} else {
   echo "<script>alert('key practices Not Deleted');window.location.href='key_practices.php';</script>";
}
?>
