<?php
include_once('includes/config.php');
include_once('includes/functions.php');
$id = $_GET['bid'];
//echo $music_number;
$target_dir = '../uploads/testimonials_images/';
$getImgUnlink = getImageUnlink('image','testimonials','id',$id,$target_dir);
$qry = "DELETE FROM testimonials WHERE id ='$id'";
$result = $conn->query($qry);
if(isset($result)) {
   echo "<script>alert('Testimonials Deleted Successfully');window.location.href='testimonials.php';</script>";
} else {
   echo "<script>alert('Testimonials Not Deleted');window.location.href='testimonials.php';</script>";
}
?>