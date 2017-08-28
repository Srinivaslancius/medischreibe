<?php include_once "main_header.php"; ?>
<?php $getAllActiveTestmonials = getAllDataCheckActive('testimonials',0); ?>
<?php $getAllActiveTestmonials1 = getAllDataCheckActive('testimonials',0); ?>
<?php $getAllActiveBanners = getAllDataCheckActive('banners',0); ?>
<?php $getAllActiveServices = getAllDataCheckActive('services',0); ?>  
<?php $getAllActiveServices1 = getAllDataCheckActive('services',0); ?> 
<?php $getAllActiveServices2 = getAllDataCheckActive('services',0); ?> 
<?php $getAllActiveServices3 = getAllDataCheckActive('services',0); ?> 

            <!-- Slider 1 Area Start Here -->               
            <div class="slider2-area slider-overlay">
                <div class="bend niceties preview-1">
                    
                    <div id="ensign-nivoslider-3" class="slides">  
                    <?php while($getBannerData = $getAllActiveBanners->fetch_assoc()) { ?> 
                        <img src="uploads/banner_images/<?php echo $getBannerData['banner']; ?>" alt="img01"  title="#slider-direction-1"/>
                    <?php } ?>
                    </div>
                   
                    <div id="slider-direction-1" class="t-cn slider-direction">
                        <div class="slider-content s-tb slide-1">
                            <div class="title-container s-tb-c">
                                <span>Welcome to</span>
                                <h1 class="title1">Medischreibe.</h1>
                                <p class="slider-para1">Delivering credible, ethical, world-class pharma and healthcare communications.</p>
                            </div>
                        </div>
                    </div>
                    <div id="slider-direction-2" class="t-cn slider-direction">
                        <div class="slider-content s-tb slide-2">
                             <div class="title-container s-tb-c">
                                <span>Welcome to</span>
                                <h1 class="title1">Medischreibe.</h1>
                                <p class="slider-para1">Delivering credible, ethical, world-class pharma and healthcare communications.</p>
                                <div class="slider-btn-area">
                                    <a href="#">Explore Now<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                                             
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="slider-direction-3" class="t-cn slider-direction">
                        <div class="slider-content s-tb slide-3">
                             <div class="title-container s-tb-c">
                                <span>Welcome to</span>
                                <h1 class="title1">Medischreibe.</h1>
                                <p class="slider-para1">Delivering credible, ethical, world-class pharma and healthcare communications.</p>
                                <div class="slider-btn-area">
                                    <a href="#">Explore Now<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                                             
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <!-- Slider 1 Area End Here -->
            <!-- Banner 2 Area Start Here -->
            <div class="banner2-area">
                <div class="container">
                    <div class="row banner2-possition">
                        <?php $getCreativity = getIndividualDetails('3',"content_pages","id");  ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="banner2-box-wrapper">
                                <img src="img/banner/2.jpg" class="img-responsive" alt="banner">
                                <div class="banner2-box-content">
                                    <i class="fa fa-heartbeat" aria-hidden="true"></i>
                                    <h3><a href=""><?php echo $getCreativity['title']?></a></h3>
                                    <p><?php echo substr($getCreativity['description'],0,150)?></p>
                                    <a href="content_details.php?uid=<?php echo $getCreativity['id']?>" class="btn-ghost btn-posiition">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php $getMotivation = getIndividualDetails('2',"content_pages","id");  ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="banner2-box-wrapper">
                                <img src="img/banner/3.jpg" class="img-responsive" alt="banner">
                                <div class="banner2-box-content">
                                    <i class="fa fa-ambulance" aria-hidden="true"></i>
                                    <h3><a href=""><?php echo $getMotivation['title']?></a></h3>
                                    <p><?php echo substr($getMotivation['description'],0,150)?></p>
                                    <a href="content_details.php?uid=<?php echo $getMotivation['id']?>" class="btn-ghost btn-posiition">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php $getTranscendingSuccess = getIndividualDetails('1',"content_pages","id");  ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="banner2-box-wrapper">
                                <img src="img/banner/4.jpg" class="img-responsive" alt="banner">
                                <div class="banner2-box-content">
                                    <i class="fa fa-user-md" aria-hidden="true"></i>
                                    <h3><a href=""><?php echo $getTranscendingSuccess['title']?></a></h3>
                                    <p><?php echo substr($getTranscendingSuccess['description'],0,150)?></p>
                                    <a href="content_details.php?uid=<?php echo $getTranscendingSuccess['id']?>" class="btn-ghost btn-posiition">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner 2 Area End Here -->
          
            <!-- Best Treatment Area End Here -->
            <!-- Service 2 Area Start Here -->
            <div class="service2-area bg-lightPrimary">
               
                <div class="container">
                    <div class="row">                       
                       <!-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <ul class="service-title-wrapper-left">
                                <?php $i=1;  $max=4; while($getAllData2=$getAllActiveServices2->fetch_assoc() and ($i < $max) ) { ?>
                                <li>                                    
                                    <div class="service-content">
                                        <h3><a href="#<?php echo $getAllData2['id']; ?>" data-toggle="tab" aria-expanded="false"><?php echo $getAllData2['title']; ?></a></h3>
                                        <p><?php echo $getAllData2['description']; ?></p>
                                    </div> 
                                    <div class="service-icon">
                                        <i class="fa fa-heartbeat" aria-hidden="true"></i>
                                    </div>                                  
                                </li>
                                <?php $i++; } ?>
                                
                            </ul>
                        </div> 
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="tab-content servise-details-wrapper">
                                <?php $i=1;  while($getAllData3=$getAllActiveServices3->fetch_assoc() ) { ?>
                                <div class="tab-pane fade <?php if($i==1) { ?>  active in <?php } ?>" id="<?php echo $getAllData3['id']; ?>">
                                    <img src="img/service/1.jpg" class="img-responsive" alt="service">
                                    <div class="service-details-content">
                                        <h3><?php echo $getAllData3['title']; ?></h3>
                                        <p><?php echo $getAllData3['description']; ?></p>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </div> 
                                </div> 
                                <?php $i++; } ?>                              
                            </div> 
                        </div> 
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <ul class="service-title-wrapper-right">
                                <li>
                                    <div class="service-icon">
                                        <i class="fa fa-wheelchair" aria-hidden="true"></i>
                                    </div>
                                    <div class="service-content">
                                        <h3><a href="#General2" data-toggle="tab" aria-expanded="false">CNS</a></h3>
                                        <p>Sed ut perspiciatis unde omnis iste is the  natus error sit voluptatem</p>
                                    </div> 
                                </li>
                                <li>
                                    <div class="service-icon">
                                        <i class="fa fa-ambulance" aria-hidden="true"></i>
                                    </div>
                                    <div class="service-content">
                                        <h3><a href="#Ambulance" data-toggle="tab" aria-expanded="false">Pulmonary</a></h3>
                                        <p>Sed ut perspiciatis unde omnis iste is the  natus error sit voluptatem</p>
                                    </div> 
                                </li>
                                <li>
                                     <div class="service-icon">
                                        <i class="fa fa-hospital-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="service-content">
                                        <h3><a href="#Diseases" data-toggle="tab" aria-expanded="false">Hematology</a></h3>
                                        <p>Sed ut perspiciatis unde omnis iste is the  natus error sit voluptatem</p>
                                    </div> 
                                </li>
                            </ul>
                        </div> 
                    </div> -->

                      <!-- Schedule 1 Area Start Here -->
                           <!-- Best Treatment Area Start Here -->
            <div class="treatment-area">
                <div class="container">
                    <div class="title-area">
                        <span class="sub-title">Tag Line<span>Comes Here</span></span>
                        <h2 class="title title-bar">What do we do for our clients</h2>
                    </div> 
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <ul class="treatment-title-wrapper">
                                <li class="active">
                                    <a href="#General" data-toggle="tab" aria-expanded="false">
                                        <div class="treatment-icon">
                                            <i class="fa fa-heartbeat" aria-hidden="true"></i>
                                        </div>
                                        <?php $getPlan = getIndividualDetails('6',"content_pages","id");  ?>
                                        <div class="treatment-content">
                                            <h3><?php echo $getPlan['title']?></h3>
                                            <p><?php echo substr($getPlan['description'],0,50)?></p>
                                        </div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#Infusion" data-toggle="tab" aria-expanded="false">
                                        <div class="treatment-icon">
                                            <i class="fa fa-stethoscope" aria-hidden="true"></i>
                                        </div>
                                        <?php $getExecute = getIndividualDetails('7',"content_pages","id");  ?>
                                        <div class="treatment-content">
                                            <h3><?php echo $getExecute['title']?></h3>
                                            <p><?php echo substr($getExecute['description'],0,50)?>.</p>
                                        </div>
                                    </a> 
                                </li>
                                <li>
                                    <a href="#Hospire" data-toggle="tab" aria-expanded="false">
                                        <div class="treatment-icon">
                                            <i class="fa fa-user-md" aria-hidden="true"></i>
                                        </div>
                                        <?php $getPromote = getIndividualDetails('8',"content_pages","id");  ?>
                                        <div class="treatment-content">
                                            <h3><?php echo $getPromote['title']?></h3>
                                            <p><?php echo substr($getPromote['description'],0,50)?></p>
                                        </div> 
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="tab-content treatment-details-wrapper">
                                <div class="tab-pane fade active in" id="General">
                                    <div class="treatment-content">
                                        <img src="img/treatment/1.jpg" class="img-responsive" alt="service">
                                        <div class="treatment-content-bottom">
                                            <div class="treatment-content-details">
                                                <h3>About Us</h3>
                                                <p><?php echo $getPlan['description']?>.</p>
                                            </div>
                                            <div class="treatment-content-award">
                                                <ul>
                                                    <li>
                                                        <span class="about-counter" data-num="25">25</span>
                                                        <i class="fa fa-trophy" aria-hidden="true"></i>
                                                        <p>Sample</p>
                                                    </li>
                                                    <li>
                                                        <span class="about-counter" data-num="70">70</span>
                                                        <i class="fa fa-user-md" aria-hidden="true"></i>
                                                        <p>Sample</p>
                                                    </li>
                                                    <li>
                                                        <span class="about-counter" data-num="80">80</span>
                                                        <i class="fa fa-hospital-o" aria-hidden="true"></i>
                                                        <p>Sample</p>
                                                    </li>
                                                    <li>
                                                        <span class="about-counter" data-num="30">30</span>
                                                        <i class="fa fa-stethoscope" aria-hidden="true"></i>
                                                        <p>Sample</p>
                                                    </li>
                                                </ul>
                                            </div> 
                                        </div> 
                                    </div> 
                                </div>
                                <div class="tab-pane fade" id="Infusion">
                                    <div class="treatment-content">
                                        <img src="img/treatment/1.jpg" class="img-responsive" alt="service">
                                        <div class="treatment-content-bottom">
                                            <div class="treatment-content-details">
                                                <h3>About Us</h3>
                                                <p><?php echo $getExecute['description']?>.</p>
                                            </div>
                                            <div class="treatment-content-award">
                                                <ul>
                                                    <li>
                                                        <span class="about-counter" data-num="25">25</span>
                                                        <i class="fa fa-trophy" aria-hidden="true"></i>
                                                        <p>Sample</p>
                                                    </li>
                                                    <li>
                                                        <span class="about-counter" data-num="70">70</span>
                                                        <i class="fa fa-user-md" aria-hidden="true"></i>
                                                        <p>Sample</p>
                                                    </li>
                                                    <li>
                                                        <span class="about-counter" data-num="80">80</span>
                                                        <i class="fa fa-hospital-o" aria-hidden="true"></i>
                                                        <p>Sample</p>
                                                    </li>
                                                    <li>
                                                        <span class="about-counter" data-num="30">30</span>
                                                        <i class="fa fa-stethoscope" aria-hidden="true"></i>
                                                        <p>Sample</p>
                                                    </li>
                                                </ul>
                                            </div> 
                                        </div> 
                                    </div> 
                                </div>
                                <div class="tab-pane fade" id="Hospire">
                                    <div class="treatment-content">
                                        <img src="img/treatment/1.jpg" class="img-responsive" alt="service">
                                        <div class="treatment-content-bottom">
                                            <div class="treatment-content-details">
                                                <h3>About Us</h3>
                                                <p><?php echo $getPromote['description']?></p>
                                            </div>
                                            <div class="treatment-content-award">
                                                <ul>
                                                    <li>
                                                        <span class="about-counter" data-num="25">25</span>
                                                        <i class="fa fa-trophy" aria-hidden="true"></i>
                                                        <p>Sample</p>
                                                    </li>
                                                    <li>
                                                        <span class="about-counter" data-num="70">70</span>
                                                        <i class="fa fa-user-md" aria-hidden="true"></i>
                                                        <p>Sample</p>
                                                    </li>
                                                    <li>
                                                        <span class="about-counter" data-num="80">80</span>
                                                        <i class="fa fa-hospital-o" aria-hidden="true"></i>
                                                        <p>Sample</p>
                                                    </li>
                                                    <li>
                                                        <span class="about-counter" data-num="30">30</span>
                                                        <i class="fa fa-stethoscope" aria-hidden="true"></i>
                                                        <p>Sample</p>
                                                    </li>
                                                </ul>
                                            </div> 
                                        </div> 
                                    </div> 
                                </div>
                                <div class="tab-pane fade" id="Pregnancy">
                                    <div class="treatment-content">
                                        <img src="img/treatment/1.jpg" class="img-responsive" alt="service">
                                        <div class="treatment-content-bottom">
                                            <div class="treatment-content-details">
                                                <h3>About Us</h3>
                                                <p>We, at Medischreibe, deliver a communication strategy that flawlessly answers all needs of healthcare industry. </p>
                                                <p>Custom healthcare communications crafted and honed to perfection to make a real difference.</p>
                                            </div>
                                            <div class="treatment-content-award">
                                                <ul>
                                                    <li>
                                                        <span class="about-counter" data-num="25">25</span>
                                                        <i class="fa fa-trophy" aria-hidden="true"></i>
                                                        <p>Sample</p>
                                                    </li>
                                                    <li>
                                                        <span class="about-counter" data-num="70">70</span>
                                                        <i class="fa fa-user-md" aria-hidden="true"></i>
                                                        <p>Sample</p>
                                                    </li>
                                                    <li>
                                                        <span class="about-counter" data-num="80">80</span>
                                                        <i class="fa fa-hospital-o" aria-hidden="true"></i>
                                                        <p>Sample</p>
                                                    </li>
                                                    <li>
                                                        <span class="about-counter" data-num="30">30</span>
                                                        <i class="fa fa-stethoscope" aria-hidden="true"></i>
                                                        <p>Sample</p>
                                                    </li>
                                                </ul>
                                            </div> 
                                        </div> 
                                    </div> 
                                </div>
                            </div>
                        </div> 
                    </div> 
                </div>  
            </div> 
            <!-- Best Treatment Area End Here -->


            <!-- Service 2 Area Start Here -->
            <div class="service2-area bg-lightPrimary">
                <div class="container">
                    <div class="title-area">
                        <span class="sub-title2">How We<span> Work</span></span>
                        <h2 class="title title-bar">Medischreibe Services</h2>
                    </div> 
                </div>
                <div class="container">
                    <div class="row">                       
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                           <ul class="service-title-wrapper-left">
                                <?php $i=1;
                                $sql ="SELECT * FROM services LIMIT 0,3";
                                $result = $conn->query($sql);
                                while($row=$result->fetch_assoc()){ ?>
                                <li class="<?php if($i==1) { ?> active <?php } else { } ?>">
                                    <div class="service-content">
                                        <h3><a href="#<?php echo $row['id']?>" data-toggle="tab" aria-expanded="false"><?php echo $row['title']?></a></h3>
                                        <p><?php echo $row['description']?></p>
                                    </div> 
                                    <div class="service-icon">
                                        <i class="fa fa-heartbeat" aria-hidden="true"></i>
                                    </div>
                                </li>
                                <?php $i++;}?>
                            </ul>
                        </div> 
                        <?php $getAllActiveServices5 = getAllDataCheckActive('services',0); ?> 
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="tab-content servise-details-wrapper">
                                <?php $i=1; while($getAllData5=$getAllActiveServices5->fetch_assoc()) { ?>
                                <div class="tab-pane fade <?php if($i==6) { ?>  active in <?php } ?>"  id="<?php echo $getAllData5['id']; ?>" >
                                    <img src="uploads/services_images/<?php echo $getAllData5['image']; ?>" alt="department" class="img-responsive">
                                    <div class="service-details-content">
                                        <h3><?php echo $getAllData5['title']; ?></h3>
                                        <p><?php echo $getAllData5['description']; ?></p>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </div> 
                                </div>
                                <?php $i++; } ?> 
                            </div> 
                        </div> 

                         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                           <ul class="service-title-wrapper-right">
                            <?php $i=1; 
                                $sql ="SELECT * FROM services LIMIT 3,5";
                                $result = $conn->query($sql);
                                while($row=$result->fetch_assoc()){ ?>
                                <li>
                                    <div class="service-icon">
                                        <i class="fa fa-wheelchair" aria-hidden="true"></i>
                                    </div>
                                    <div class="service-content">
                                        <h3><a href="#<?php echo $row['id']?>" data-toggle="tab" aria-expanded="false"><?php echo $row['title']?></a></h3>
                                        <p><?php echo $row['description']?></p>
                                    </div> 
                                </li>
                            <?php $i++;}?>
                            </ul>
                        </div>
                    </div> 
                </div> 
            </div>
            <!-- Service 2 Area Start Here --> 

            <div class="schedule-area">
                <div class="container">
                    <div class="row table-wrapper2">
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="booking-table-area">
                                <h2 class="title-table">Enquiry Now</h2>
                                <form action="enquiry.php" method="post" id="booking-form" class="booking-table-inner">           
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" placeholder="Name" name="name" id="form-name" data-error="Subject field is required" required />
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" placeholder="E-mail" name="email" id="form-subject" data-error="Subject field is required" required/>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" placeholder="Phone" name="phone" id="form-phone" data-error="Subject field is required" maxlength="10"  pattern="[0-9]{10}" onkeypress="return isNumberKey(event)" required/>
                                        </div>
                                        <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" placeholder="Type of Service" name="phone" id="form-service" data-error="Subject field is required" required/>
                                        </div> -->
                                        <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                             <i class="fa fa-calendar" aria-hidden="true"></i> -->
                                            <!--<input type="text" class="form-control rt-date" placeholder="Date" name="date" id="form-date" data-error="Subject field is required" required/>
                                        </div> -->
                                        <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                             <i class="fa fa-clock-o" aria-hidden="true"></i> -->
                                            <!--<input type="text" class="form-control rt-time" placeholder="Time" name="time" id="form-time" data-error="Subject field is required" required/>
                                        </div> -->
                                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <textarea class="form-control" placeholder="Message" name="message" id="form-message" data-error="Message field is required" required></textarea>
                                        </div>
                                        <button type="submit" name="submit"class="book-now-btn"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                        <div class='form-response'></div>
                                    </div>
                                </form> 
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
                    </div>
                </div>
                
            </div>  
            <!-- Schedule 1 Area End Here -->
                </div> 
            </div>
            <!-- Service 2 Area Start Here --> 
          
            <!-- Patients Area Start Here -->
            <div class="patients-area bg-primaryText">
                <div class="container">
                    <div class="title-area">
                        <span class="sub-title">Clients<span> Feedback</span></span>
                        <h2 class="title-textPrimary title-bar">Testimonials</h2>
                    </div> 
                </div> 
                <div class="container">
                    <div class="row tab-content">

                        <?php $i = 0; while($getTestominalsData1 = $getAllActiveTestmonials1->fetch_assoc()) { ?>
                        <div class="patients-tab-content-details tab-pane fade <?php if($i==2) { ?> active in <?php } ?>" id="<?php echo $getTestominalsData1['id']; ?>">
                            <?php echo $getTestominalsData1['description']; ?>
                        </div> 
                        <?php $i++; } ?>
                       
                    </div> 
                </div> 
                <div class="container">
                    <ul class="patients-tab-title">

                        <?php $i = 0; while($getTestominalsData = $getAllActiveTestmonials->fetch_assoc()) { ?>
                        <li <?php if($i==2) { ?> class ="active" <?php } ?>>
                            <a href="#<?php echo $getTestominalsData['id']; ?>" data-toggle="tab" aria-expanded="false">
                                <img src="uploads/testimonials_images/<?php echo $getTestominalsData['image']; ?>" class="img-responsive" alt="team">
                                <div class="patients-tab-title-inner">
                                    <h3><?php echo $getTestominalsData['title']; ?></h3>
                                    <p><?php echo $getTestominalsData['role']; ?></p>
                                </div> 
                            </a>
                        </li>
                        <?php $i++; } ?>

                    </ul>
                </div>
            </div>
            <!-- Patients Area End Here -->
            <!-- Department 2 Area Start Here -->
             <div class="department2-area">
                <div class="container">
                    <div class="title-area">
                        <span class="sub-title">Treat With<span> Medischreibe</span></span>
                        <h2 class="title title-bar">Medischreibe services</h2>
                    </div> 
                </div>  
                <div class="container">
                    <ul class="department-tab-title">
                        <?php $i=1; while($getAllData=$getAllActiveServices->fetch_assoc()) { ?>
                        <li class="<?php if($i==1) { ?> active <?php } ?>">
                            <a href="#<?php echo $getAllData['id']?>" data-toggle="tab" aria-expanded="false">
                                <i class="fa fa-heartbeat" aria-hidden="true"></i>
                                <p><?php echo $getAllData['title']; ?></p>
                            </a>
                        </li>
                        <?php $i++; } ?>                        
                    </ul>

                </div>  
                <div class="container tab-content">
                    <?php $i=1; while($getAllData1=$getAllActiveServices1->fetch_assoc()) { ?>
                    <div class="row tab-content-details tab-pane fade <?php if($i==1) { ?>  active in <?php } ?>"  id="<?php echo $getAllData1['id']; ?>">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <img src="uploads/services_images/<?php echo $getAllData1['image']; ?>" alt="department" class="img-responsive">                            
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <h3><?php echo $getAllData1['title']; ?></h3>
                            <?php echo $getAllData1['description']; ?>
                            <a href="service_details.php?id=<?php echo $getAllData1['id']; ?>" class="btn-hover-ghost-accent">visit service</a>
                        </div>  
                    </div> 
                    <?php $i++; } ?>                 
                </div>  
            </div> 
            <!-- Department 2 Area End Here -->             
        </div>  
        <?php include_once 'main_footer.php';?>

        <script type="text/javascript">
            function isNumberKey(evt){
                var charCode = (evt.which) ? evt.which : event.keyCode
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                    return false;
                return true;
            }
        </script>