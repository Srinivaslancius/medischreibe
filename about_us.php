<?php include_once "main_header.php"; ?>
<?php $getAboutData = getIndividualDetails('4',"content_pages","id");  ?>
           
            <!-- Inner Page Banner Area Start Here -->
            <div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
                <div class="container">
                    <div class="pagination-area">
                        <h2 class="title-bar2">About Us</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Page</a></li>
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
                                <li class="active"><a href="#2017" data-toggle="tab" aria-expanded="false">2017</a></li>
                                <li><a href="#2015" data-toggle="tab" aria-expanded="false">2015</a></li>
                                <li><a href="#2012" data-toggle="tab" aria-expanded="false">2012</a></li>
                                
                            </ul>
                        </div> 
                        <div class="col-lg-7 col-md-7 col-sm-9 col-xs-12">
                            <div class="tab-content our-history-content">
                                <div class="our-history-item tab-pane fade active in" id="2017">
                                    <h3>A strategic move - A key to successful practice </h3>
                                    <p>We provide expert strategy-based medical communication services exclusively for the healthcare industry. Our team of experienced professionals with unparalleled medical and scientific acumen, understand unique needs of the professionals and corporate firms and design customized service plan. </p>
                                    <p>Fostering professional communication with all due diligence and intelligence</p>
                                    <p>Our communication strategy eventually helps educate, motivate, inspire action and eventually promote unfathomable change.</p>
                                    
                                </div>
                                <div class="our-history-item tab-pane fade" id="2015">
                                    <h3>Publication planning and management</h3>
                                    <p>Medischreibe, as the leading medical and science communication experts, help healthcare professionals get their message across their target audience with unique combination of publication planning and management. We are the trusted advisors for world's leading healthcare firms.  </p>
                                    <p>We provide a communication strategy that have a great impact, ensure your work gets recognized or go beyond boundaries of recognition. We always strive to deliver our services, with more focus on keeping it true to science and healthcare. </p>
                                    <p><b>Committed to excellence in publication support and management.</b></p>
                                    <p><b>Our team and associates have 100+ years of accumulated experience in delivering communication that is more simplified and result-oriented.</b></p>
                                    <p>Our services are geared to help health professionals come up with such great messages that generate better response from public, stakeholders and media.</p>
                                    <p>We are honest and deeply collaborative in what all we do for our clients. </p>
                                </div>
                                <div class="our-history-item tab-pane fade" id="2012">
                                    <h3>Custom solutions</h3>
                                    <p>Our skilled team is always ready to work for you on any custom publication or bespoke projects. We assist you every step of the way - product lifecycle development to medical scenario planning. We ensure that our support always remains and be more accessible for you and is at the heart of everything you do. </p>
                                    <p>We take great pride in scientific quality of our publications, always aligned publications with required compliance requirements (client and industry-oriented). Our intensive monitoring program leads to more perfection for sure. </p>
                                    
                                </div>
                                
                            </div> 
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> 
                            <img src="img/department/1.png" alt="department" class="img-responsive">
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
                    <!-- <div class="row video-inner">
                        
                        <div class="video-title-wrapper">
                            <ul>
                                <h3 style="color: #fff;">Scientific communications</h3>
                                <p style="color: #fff;">We are  passionate about making scientific communications more simplified, communicating science in a much more impressive way across multiple channels.</p>
                                <li class="active">
                                    <a href="#General" data-toggle="tab" aria-expanded="false">
                                        <div class="video-icon">
                                            <i class="fa fa-stethoscope" aria-hidden="true"></i>
                                        </div>
                                        <div class="video-content">
                                            <h3>Creativity</h3>
                                            <p>Creating innovative solutions, perfectly assessed, analyzed, tailored to exact communication needs of our clients.</p>
                                        </div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#Infusion" data-toggle="tab" aria-expanded="false">
                                        <div class="video-icon">
                                            <i class="fa fa-ambulance" aria-hidden="true"></i>
                                        </div>
                                        <div class="video-content">
                                            <h3>Motivation</h3>
                                            <p>Making communication more motivating instilling our expert industry insights so that our clients can go on to inspire audience to take action. </p>
                                        </div>
                                    </a> 
                                </li>
                                <li>
                                    <a href="#Hospire" data-toggle="tab" aria-expanded="false">
                                        <div class="video-icon">
                                            <i class="fa fa-user-md" aria-hidden="true"></i>
                                        </div>
                                        <div class="video-content">
                                            <h3>Transcending Success</h3>
                                            <p>Our multi-channel delivery model will surely help transform your scientific communication into a more successful message. </p>
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
                    </div> -->
                </div> 
            </div> 
            <!--  Video Area End Here -->
          
            
        <?php include_once 'main_footer.php';?>