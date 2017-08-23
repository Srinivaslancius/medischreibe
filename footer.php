
<div class="footer-area-top section-space">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="footer-box">
                                    <img src="img/footer-logo.png" class="footer-logo img-responsive" alt="logo">
                                    <div class="footer-about">
                                        <p>All of our team members come from diverse cultural and business back grounds and have worked among many businesses.</p>
                                    </div>
                                    <ul class="corporate-address">
                                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:<?php echo $getSiteSettingsData['mobile']; ?>"><?php echo $getSiteSettingsData['mobile']; ?> </a></li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:<?php echo $getSiteSettingsData['email'];?>"><?php echo $getSiteSettingsData['email'];?></a></li>
                                        
                                    </ul>
                                    
                                </div>
                            </div>
                            
                            
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <form action="newsletter.php" method="post">
                                    <div class="footer-box">
                                         <h3 class="title-bar4">Subscribe</h3>
                                        <div class="newsletter-area">
                                            <P>Subcribe</P>
                                            <div class="input-group stylish-input-group">
                                                <input type="text" placeholder="Enter your e-mail here" class="form-control" name="email" required>
                                                <span class="input-group-addon">
                                                    <button type="submit">
                                                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                                    </button>  
                                                </span>
                                            </div>
                                        </div>
                                        <ul class="footer-social">
                                            <li><a href="<?php echo $getSiteSettingsData['fb_link']; ?>"  target="_blank"><i class="fa fa-facebook fb" aria-hidden="true"></i></a></li>
                                            <li><a href="<?php echo $getSiteSettingsData['twitter_link'];?>" target="_blank" <i class="fa fa-twitter tw" aria-hidden="true"></i></a></li>
                                            <li><a href="<?php echo $getSiteSettingsData['gplus_link'];?>" target="_blank" <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            
                                        </ul>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="footer-box">
                                     <h3 class="title-bar4">Usefull LINKS</h3>
                                    <ul class="opening-schedule">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Departments</a></li>
                                        <li><a href="#">Our Doctors</a></li>
                                        <li><a href="#">Working Hours</a></li>
                                        <li><a href="#">Our service</a></li>
                                        <li><a href="#">Online Bill Pay</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-area-bottom">
                    <div class="container">
                        <p>&copy; 2017 medischreibe. All rights reserved. Design & Develop by<a target="_blank" href="https://www.lanciussolutions.com/"> Lancius Solutions</a></p>
                    </div>
                </div>