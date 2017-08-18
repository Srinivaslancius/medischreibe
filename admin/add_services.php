<?php include_once 'main_header.php'; ?>
           
<?php include_once 'side_navigation.php';?>
<?php  if (!isset($_POST['submit']))  {
            echo "";
        } else  {


            $title = $_POST['title'];
            $description = $_POST['description'];
            $fileToUpload = $_FILES["fileToUpload"]["name"];
            $status = $_POST['status'];
            
            if($fileToUpload!='') {

                $target_dir = "../uploads/services_images/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $sql = "INSERT INTO services (`title`,`description`, `image`, `status`) VALUES ('$title', '$description','$fileToUpload','$status')";
                    if($conn->query($sql) === TRUE){
                       echo "<script>alert('Data Updated Successfully');window.location.href='services.php';</script>";
                    } else {
                       echo "<script>alert('Data Updation Failed');window.location.href='services.php';</script>";
                    }
                    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }            
            
        }
?>
<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title">Services</div>
        </div>
        <div class="col s12 m12 l2"></div>
        <div class="col s12 m12 l8">
            <div class="card">
                <div class="card-content">                                
                    <div class="row">
                        <form class="col s12" method="post" enctype="multipart/form-data">
                            <div class="row">

                                <div class="input-field col s12">
                                    <input id="title" autofocus="autofocus" type="text" class="validate" name="title" required>
                                    <label for="title">Title</label>
                                </div>
                                
                                <label for="name" class="col-lg-3 col-sm-3 control-label">Description</label>
                                <div class="input-field col s12">
                                    <div class="col-lg-9">
                                        <textarea name="description" required id="description"></textarea>
                                    </div>
                                </div> 
                                
                                <div class="input-field col s6">
                                   <img id="output" height="70" width="70"/> 
                                   <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" onchange="loadFile(event)" required>
                                   <p>(Please upload this size images 1920*800)</p>        
                                </div>

                                <div class="input-field col s12">
                                    <select name="status" required>
                                        <option value="" disabled selected>Choose your status</option>
                                        <option value="0">Active</option>
                                        <option value="1">In Active</option>                                        
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
