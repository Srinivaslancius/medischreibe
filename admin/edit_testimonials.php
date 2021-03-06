<?php include_once 'main_header.php'; ?>
           
<?php include_once 'side_navigation.php';?>
<?php  
$id = $_GET['uid'];
 if (!isset($_POST['submit']))  {
            echo "";
    } else  {            

            $status = $_POST['status'];
            $title = $_POST['title'];
            $role = $_POST['role'];
            $description = $_POST['description'];
            if($_FILES["fileToUpload"]["name"]!='') {
                                             
                $fileToUpload = $_FILES["fileToUpload"]["name"];               

                $target_dir = "../uploads/testimonials_images/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                $getImgUnlink = getImageUnlink('image','testimonials','id',$id,$target_dir);
                //Send parameters for img val,tablename,clause,id,imgpath for image ubnlink from folder

                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $sql = "UPDATE `testimonials` SET title = '$title', role = '$role' ,description = '$description' ,image = '$fileToUpload', status='$status' WHERE id = '$id' ";
                    if($conn->query($sql) === TRUE){
                       echo "<script>alert('Data Updated Successfully');window.location.href='testimonials.php';</script>";
                    } else {
                       echo "<script>alert('Data Updation Failed');window.location.href='testimonials.php';</script>";
                    }
                    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }  else {
                $sql = "UPDATE `services` SET title = '$title', status='$status' WHERE id = '$id' ";
                if($conn->query($sql) === TRUE){
                   echo "<script>alert('Data Updated Successfully');window.location.href='testimonials.php';</script>";
                } else {
                   echo "<script>alert('Data Updation Failed');window.location.href='testimonials.php';</script>";
                }
            }   
            
        }
?>
<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title">Banners</div>
        </div>
        <div class="col s12 m12 l2"></div>
        <div class="col s12 m12 l8">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <form class="col s12" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <?php $getBanners = getAllDataWhere('testimonials', 'id', $_GET['uid']); $getBanners1 = $getBanners->fetch_assoc(); ?>
                                <div class="input-field col s12">
                                    <input id="title" type="text" class="validate" name="title" required value="<?php echo $getBanners1['title'];?>">
                                    <label for="title">Title</label>
                                </div>


                                <div class="input-field col s12">
                                    <input id="role" type="text" class="role" name="role" required value="<?php echo $getBanners1['role'];?>">
                                    <label for="title">Role</label>
                                </div>

                                <div class="input-field col s12">
                                    <textarea name="description" required id="description"><?php echo $getBanners1['description'];?></textarea>
                                </div>


                                <div class="form-group">
                                    <label for="name" class="col-lg-3 col-sm-3 control-label"></label>
                                    <div class="col-lg-9">
                                        <img src="<?php echo $base_url . 'uploads/testimonials_images/'.$getBanners1['image'] ?>" height="70" width="70" id="output" />
                                    </div>
                                </div> 
                                
                                <div class="input-field col s6">
                                   Banner : <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" onchange="loadFile(event)">
                                   <p>(Please upload this size images 70*70)</p>
                                </div>

                                <div class="input-field col s12">
                                    <select name="status" required>
                                        <option value="" disabled selected>Choose your status</option>
                                        <option value="0" <?php if($getBanners1['status'] == 0) { echo "Selected"; }?>>Active</option>
                                        <option value="1" <?php if($getBanners1['status'] == 1) { echo "Selected"; }?>>In Active</option>                                       
                                    </select>
                                </div>                                
                                <div class="input-field col s12">
                                    <input type="submit" name="submit" value="Submit" class="waves-effect waves-light btn teal">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col s12 m12 l2"></div>
    </div>
</main>
<?php include_once 'footer.php'; ?>

<script src="//cdn.ckeditor.com/4.7.0/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' ); 
</script>
<style type="text/css">
    .cke_top, .cke_contents, .cke_bottom {
        border: 1px solid #333;
    }
</style>