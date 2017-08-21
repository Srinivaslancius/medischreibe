<?php $getMenus = getAllDataCheckActive('services',0); ?>
<div class="header2-area">
                    <div class="header-top-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                                    <div class="header-top-left">
                                        <ul>
                                            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:<?php echo $getSiteSettingsData['mobile']; ?>"><?php echo $getSiteSettingsData['mobile']; ?> </a></li>
                                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="<?php echo $getSiteSettingsData['email'];?>">info@medisripe.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                                    <div class="header-top-right">
                                        <ul>
                                            <li><a href="careers.php" class="btn-hover-ghost-accent">Careers</a></li>
                                            <li><a href="#" class="btn-hover-ghost-accent">Login</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-bottom-area" id="sticker">
                        <div class="container">
                            <div class="row">                         
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="logo-area">
                                        <a href="index.php"><img class="img-responsive" src="img/logo.png" alt="logo"></a>
                                    </div>
                                </div>  
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="main-menu-area">
                                        <nav>
                                            <ul>
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="about_us.php">About Us</a></li>
                                                <li><a href="#">Services</a>
                                                    <ul>
                                                    <?php while($getAllMenus = $getMenus->fetch_assoc()) { ?>
                                                        <li><a href="#"><?php echo $getAllMenus['title']; ?></a></li>
                                                    <?php } ?>                                                        
                                                    </ul>
                                                </li>
                                                
                                                <li><a href="contact_us.php">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>   
                                
                            </div>                          
                        </div> 
                    </div>
                </div>
                <!-- Mobile Menu Area Start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about_us.php">About Us</a></li>
                                            
                                            
                                            <li><a href="#">Services</a>
                                                <ul>
                                                    <li><a href="#">Service Type</a></li>
                                                    <li><a href="#">Service Type</a></li>
                                                    <li><a href="#">Service Type</a></li>
                                                    <li><a href="#">Service Type</a></li>
                                                    <li><a href="#">Service Type</a></li>
                                                </ul>
                                            </li>
                                            
                                            <li><a href="contact_us.php">Contact</a></li>
                                        </ul>                                        
                                    </nav>
                                </div>           
                            </div>
                        </div>
                    </div>
                </div>