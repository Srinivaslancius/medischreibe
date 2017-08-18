<?php include_once "main_header.php"; ?>

            <!-- Inner Page Banner Area Start Here -->
<?php  if (!isset($_POST['submit']))  {
            echo "";
        } else  {


            $name = $_POST['customer_name'];
            $email = $_POST['customer_email'];
            $mob = $_POST['customer_mobile'];
            $fileToUpload = $_FILES["fileToUpload"]["name"];
            
            
            if($fileToUpload!='') {

                $target_dir = "uploads/resumes/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $sql = "INSERT INTO apply_jobs (`customer_name`,`customer_email`, `customer_mobile`, `resume`) VALUES ('$name', '$email','$mob','$fileToUpload')";
                    if($conn->query($sql) === TRUE){
                       echo "<script>alert('Data Updated Successfully');window.location.href='apply_careers.php';</script>";
                    } else {
                       echo "<script>alert('Data Updation Failed');window.location.href='apply_careers.php';</script>";
                    }
                    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }            
            
        }
?>
            <div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
                <div class="container">
                    <div class="pagination-area">
                        <h2 class="title-bar2">Apply here</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Page</a></li>
                            <li>Apply Here</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->
            <!-- Contact Page Area Start Here -->
            <div class="contact-page-area">
                
                <div class="container">
                    <div class="row contact-wrapper">                       
                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                            <div class="contact-form-area">
                                <h2 class="title-table">Apply Here</h2>
                                <form  method="post" enctype="multipart/form-data"> 
                                    <fieldset>     
                                        <div class="row contact-form-inner">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Name*" class="form-control" name="customer_name" id="form-name" data-error="Name field is required" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                               <div class="form-group">
                                                    <input type="email" placeholder="Email*" class="form-control" name="customer_email" id="form-email" data-error="Email field is required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                               <div class="form-group">
                                                    <input type="mobile" placeholder="Mobile*" class="form-control" name="customer_mobile" id="form-mobile" data-error=" Mobile field is required"  required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                               <div class="form-group">
                                                    <input type="file" placeholder="file*" class="form-control" accept=".doc, .docx" name="fileToUpload" id="form-file" data-error=" File field is required"  required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <input type="submit" name="submit" value="submit" class="book-now-btn"></input>
                                           
                                        </div>
                                    </fieldset>
                                </form> 
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Contact Page Area End Here -->
          <?php include_once 'main_footer.php';?>