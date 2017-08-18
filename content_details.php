<?php include_once "main_header.php"; ?>

<?php
    $id = $_GET['uid'];
?>
 <?php $getData = getIndividualDetails("$id","content_pages","id");  ?>          
            
            <div class="about-page-area">
                <div class="container">
                    
                    <div class="about-content-wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="about-content-details">
                                    <div class="title-area">
                                        <!-- <span class="sub-title">We Are<span> Medicative</span></span> -->
                                        <h2 class="title title-bar"><?php echo $getData['title']; ?></h2>
                                        <?php echo $getData['description']; ?>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>  
            </div> 
            
        <?php include_once 'main_footer.php';?>