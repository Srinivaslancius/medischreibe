
<?php include_once "main_header.php"; ?>
<?php $getAboutData = getIndividualDetails('4',"content_pages","id");  ?>
<?php $getAllActiveKeyPractices = getAllDataCheckActive('key_practices',0); ?>    
<?php $getAllActiveKeyPractices1 = getAllDataCheckActive('key_practices',0); ?>  
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
                                        <span class="sub-title">We Are<span> Medicative</span></span>
                                        <h2 class="title title-bar"><?php echo $getAboutData['title']; ?></h2>
                                    </div> 
                                    <?php echo $getAboutData['description']; ?>
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
                    <div class="title-area">
                        <span class="sub-title">How We<span> Work</span></span>
                        <h2 class="title title-bar">Our Key Practices</h2>
                    </div> 
                </div> 
                <div class="container">
                    <div class="row our-history-wrapper">                       
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                            <ul class="our-history-title">
                                <?php $i=1; while($getAllData=$getAllActiveKeyPractices->fetch_assoc()) { ?>
                                    <li class="<?php if($i==1) { ?> active <?php } ?>">
                                        <a href="#<?php echo $getAllData['id']?>" data-toggle="tab" aria-expanded="false"><?php echo $getAllData['year'];?></a>
                                    </li>
                                <?php $i++; } ?>                                
                            </ul>
                        </div> 
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                            <div class="tab-content our-history-content"> 
                                <?php $i=1; while($getAllData1=$getAllActiveKeyPractices1->fetch_assoc()) { ?>
                                <div class="our-history-item tab-pane fade <?php if($i==1) { ?>  active in <?php } ?>" id="<?php echo $getAllData1['id']; ?>">
                                    <h3><?php echo $getAllData1['title']; ?></h3>
                                    <?php echo $getAllData1['description']; ?>                                    
                                </div>
                               <?php $i++; } ?>
                                
                            </div> 
                        </div>
                        
                    </div> 
                </div> 
            </div>
            <!-- Our History Area End Here -->
            <!-- Video Area Start Here -->
            <div class="video-area">
                <div class="video-img-holder-left" style="background-image: url('img/banner/6.jpg');"></div>                    
                <div class="video-img-holder-right" style="background-image: url('img/banner/7.jpg');"></div> 
                <div class="container">
                    <div class="row video-inner">
                        
                        <div class="video-title-wrapper">
                            <ul>
                                <h3 style="color: #fff;">Scientific communications</h3>
                                <p style="color: #fff;">We are  passionate about making scientific communications more simplified, communicating science in a much more impressive way across multiple channels.</p>
                                <li class="active">
                                    <?php $getCreativity = getIndividualDetails('3',"content_pages","id");  ?>

                                    <a href="#General" data-toggle="tab" aria-expanded="false">
                                        <div class="video-icon">
                                            <i class="fa fa-stethoscope" aria-hidden="false"></i>
                                        </div>
                                        <div class="video-content">
                                            <h3><a href=""><?php echo $getCreativity['title']?></h3>
                                            <p><?php echo substr($getCreativity['description'],0,150)?></p>
                                        </div> 
                                    </a>
                                </li>
                                <li>
                                    <?php $getMotivation = getIndividualDetails('2',"content_pages","id");  ?>
                                    <a href="#Infusion" data-toggle="tab" aria-expanded="false">
                                        <div class="video-icon">
                                            <i class="fa fa-ambulance" aria-hidden="true"></i>
                                        </div>
                                        <div class="video-content">
                                            <h3><a href=""><?php echo $getMotivation['title']?></a></h3>
                                            <p><?php echo substr($getMotivation['description'],0,150)?></p>
                                        </div>
                                    </a> 
                                </li>
                                <li>
                                    <?php $getTranscendingSuccess = getIndividualDetails('1',"content_pages","id");  ?>
                                    <a href="#Hospire" data-toggle="tab" aria-expanded="false">
                                        <div class="video-icon">
                                            <i class="fa fa-user-md" aria-hidden="true"></i>
                                        </div>
                                        <div class="video-content">
                                            <h3><a href=""><?php echo $getTranscendingSuccess['title']?></a></h3>
                                            <p><?php echo $getTranscendingSuccess['description']?></p>
                                        </div> 
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="video-play-btn">
                            <ul>
                                <li>watch</li>
                                <li>
                                    <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM"><i class="fa fa-play" aria-hidden="true"></i></a>
                                </li>
                                <li>video</li>
                            </ul>
                        </div>
                    </div> 
                </div> 
            </div> 
            <!--  Video Area End Here -->
          
   <?php include_once 'main_footer.php';?>
