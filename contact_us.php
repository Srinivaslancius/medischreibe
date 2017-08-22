<?php include_once "main_header.php"; ?>
            <!-- Inner Page Banner Area Start Here -->
            <div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
                <div class="container">
                    <div class="pagination-area">
                        <h2 class="title-bar2">contact us</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Page</a></li>
                            <li>contact</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->
            <!-- Contact Page Area Start Here -->
            <div class="contact-page-area">
                <div class="container-fluid">
                    <div class="row">                               
                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">                               
                            
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.2882374991705!2d78.3790404144398!3d17.445912988043627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb93de32844057%3A0x7fbdb09406d44f7a!2sLancius+IT+Solutions!5e0!3m2!1sen!2sin!4v1502975594292" width="100%"height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row contact-wrapper">                       
                        <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                            <div class="contact-form-area">
                                <h2 class="title-table">Send a Message</h2>
                                <form id="contact-form"> 
                                    <fieldset>     
                                        <div class="row contact-form-inner">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Name*" class="form-control" name="name" id="form-name" data-error="Name field is required" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                               <div class="form-group">
                                                    <input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Email field is required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Subject*" class="form-control" name="subject" id="form-subject" data-error="Subject field is required" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <textarea placeholder="Message*" class="textarea form-control" name="message" id="form-message" rows="2" cols="20" data-error="Message field is required" required></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <button type="submit" class="book-now-btn"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                            <div class='form-response'></div>
                                        </div>
                                    </fieldset>
                                </form> 
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="contact-info-area">
                                <h2 class="title-table">Contact Information</h2>
                                <div class="contact-info-inner">
                                    <ul>
                                        <li><i class="fa fa-phone" aria-hidden="true"></i><?php echo $getSiteSettingsData['mobile']; ?></li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo $getSiteSettingsData['email']; ?></li>
                                        
                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $getSiteSettingsData['address']; ?></li>
                                    </ul>
                                    <p>Don`t hesitate to talk</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Page Area End Here -->
          <?php include_once 'main_footer.php';?>