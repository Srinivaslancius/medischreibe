<?php include_once 'main_header.php'; ?>
           
<?php include_once 'side_navigation.php';?>
<?php  
$id = $_GET['uid'];
 if (!isset($_POST['submit']))  {
            echo "";
    } else  {            

            $status = $_POST['status'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $m_title = $_POST['meta_title'];
            $m_keywords = $_POST['meta_keywords'];
            $m_desc = $_POST['meta_desc']; 
            if($_FILES["fileToUpload"]["name"]!='') {
                                             
                $fileToUpload = $_FILES["fileToUpload"]["name"];               

                $target_dir = "../uploads/services_images/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                $getImgUnlink = getImageUnlink('image','services','id',$id,$target_dir);
                //Send parameters for img val,tablename,clause,id,imgpath for image ubnlink from folder

                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $sql = "UPDATE services SET title = '$title', description = '$description' ,image = '$fileToUpload', meta_title='$m_title', meta_keywords='$m_keywords', meta_desc='$m_desc', status='$status' WHERE id = '$id' ";
                    if($conn->query($sql) === TRUE){
                       echo "<script>alert('Data Updated Successfully');window.location.href='services.php';</script>";
                    } else {
                       echo "<script>alert('Data Updation Failed');window.location.href='services.php';</script>";
                    }
                    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }  else {
                $sql = "UPDATE `services` SET title = '$title', status='$status' WHERE id = '$id' ";
                if($conn->query($sql) === TRUE){
                   echo "<script>alert('Data Updated Successfully');window.location.href='services.php';</script>";
                } else {
                   echo "<script>alert('Data Updation Failed');window.location.href='services.php';</script>";
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
                                <?php $getBanners = getAllDataWhere('services', 'id', $_GET['uid']); $getBanners1 = $getBanners->fetch_assoc(); ?>
                                <div class="input-field col s12">
                                    <input id="title" type="text" class="validate" name="title" required value="<?php echo $getBanners1['title'];?>">
                                    <label for="title">Title</label>
                                </div>

                                <div class="input-field col s12">
                                    <textarea name="description" required id="description"><?php echo $getBanners1['description'];?></textarea>
                                </div>


                                <div class="form-group">
                                    <label for="name" class="col-lg-3 col-sm-3 control-label"></label>
                                    <div class="col-lg-9">
                                        <img src="<?php echo $base_url . 'uploads/services_images/'.$getBanners1['image'] ?>" height="200" width="200" id="output" />
                                    </div>
                                </div> 
                                
                                <div class="input-field col s6">
                                   Banner : <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" onchange="loadFile(event)">
                                   <p>(Please upload this size images 1920*800)</p>
                                </div>

                                <div class="input-field col s12">
                                    <input id="meta_title" type="text" class="validate" name="meta_title" required value="<?php echo $getBanners1['meta_title'];?>">
                                    <label for="title">Meta title </label>
                                </div>

                                <div class="input-field col s12">
                                    <input id="meta_keywords" type="text" class="validate" name="meta_keywords" required value="<?php echo $getBanners1['meta_keywords'];?>">
                                    <label for="title">meta keywords </label>
                                </div>

                                <div class="input-field col s12">
                                    <input id="meta_desc" type="text" class="validate" name="meta_desc" required value="<?php echo $getBanners1['meta_desc'];?>">
                                    <label for="title">meta description </label>
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