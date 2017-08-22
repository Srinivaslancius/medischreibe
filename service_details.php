<?php include_once "main_header.php"; ?>
<?php $id= $_GET['id']; ?>
<?php $getServicesData = getIndividualDetails($id,"services","id");  ?>
 
 
           
            <!-- Inner Page Banner Area Start Here -->
            <div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
                <div class="container">
                    <div class="pagination-area">
                        <h2 class="title-bar2">Services</h2>
                        <ul>
                            <li><a href="#">Home</a></li>                           
                            <li>Service Details</li>
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
                                        <span class="sub-title">We Are<span> Medicative</span></span>
                                        <h2 class="title title-bar"><?php echo $getServicesData['title']; ?></h2>
                                    </div> 
                                    <?php echo $getServicesData['description']; ?>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>  
            </div> 
            <!-- About Us Page Area End Here -->
            <!-- Counter Area Start Here -->
            
            <!-- Counter Area End Here -->
            <!-- Our History Area Start Here -->
            <div class="our-history-area">
                <div class="container">
                     
                </div> 
                <div class="container">
                  
                </div> 
            </div>
            <!-- Our History Area End Here -->
          
            
        <?php include_once 'main_footer.php';?>