<?php include_once "main_header.php"; ?>
<?php $getAllActiveCareers = getAllDataCheckActive('careers',0); ?>
            <!-- Inner Page Banner Area Start Here -->
            <div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
                <div class="container">
                    <div class="pagination-area">
                        <h2 class="title-bar2">Careers</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Page</a></li>
                            <li>Careers</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->
            <!-- Contact Page Area Start Here -->
            <div class="contact-page-area">
                
                <div class="container">
                    <div class="row contact-wrapper">                       
                        <div class="why-choose-area">
                <div class="container">
                    <div class="title-area">
                        <span class="sub-title">How Can We<span> Help You</span></span>
                        <h2 class="title title-bar">Careers</h2>
                    </div> 
                </div>
                <div class="container">
                    <div class="why-choose-content-wrapper">
                        <div class="why-choose-banner-img">
                            <img src="img/service/1.png" class="img-responsive" alt="service">
                        </div>
                        <div class="why-choose-content">
                            <div class="panel-group" id="accordion">

                                <?php $i=1; while($getAllData=$getAllActiveCareers->fetch_assoc()) { ?>
                                <div class="panel panel-default details-item-wrapper">
                                    <div class="panel-heading details-item-title">
                                        <div class="panel-title">
                                            <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $getAllData['id']?>"><?php echo $i?>. <?php echo $getAllData['title']; ?></a>
                                        </div>
                                    </div>
                                    <div aria-expanded="false" id="<?php echo $getAllData['id']?>" role="tabpanel" class="panel-collapse collapse">
                                        <div class="panel-body details-item-body">
                                            <?php echo $getAllData['description']; ?>
                                            
                                            <p><a href="#" class="btn-default-primary col-md-4">Apply now</a><span class="col-md-2"></span><a href="#" class="btn-default-primary col-md-5">Upload Resume</a></p>
                                        </div>
                                        
                                    </div>
                                </div>
                                <?php $i++; } ?>
                                
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
            <!-- Why Choose Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Contact Page Area End Here -->
           <?php include_once 'main_footer.php';?>