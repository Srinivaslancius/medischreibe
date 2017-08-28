<?php include_once "main_header.php"; ?>

 <?php  $id = $_GET['uid']; $getData = getIndividualDetails("$id","content_pages","id");  ?>          
            
          <!-- Inner Page Banner Area Start Here -->
            <div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
                <div class="container">
                    <div class="pagination-area">
                        <h2 class="title-bar2">About Us</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->
            <!-- About Us Page Area Start Here -->
            <div class="about-page-area">
                <div class="container">
                    
                    <div class="about-content-wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="about-content-details">
                                    <div class="title-area">                                        
                                        <h2 class="title title-bar"><?php echo $getData['title']; ?></h2>
                                    </div> 
                                    <?php echo $getData['description']; ?>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>  
            </div> 
            <div class="our-history-area">
            </div>
            <!-- About Us Page Area End Here -->
        <?php include_once 'main_footer.php';?>