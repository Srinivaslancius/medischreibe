<?php include_once "main_header.php"; ?>
            <!-- Inner Page Banner Area Start Here -->
            <div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
                <div class="container">
                    <div class="pagination-area">
                        <h2 class="title-bar2">contact us</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>contact</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->
            <!-- Contact Page Area Start Here -->

            <?php $getContactData = getIndividualDetails('5',"content_pages","id"); 
              $address =$getContactData['description']; // Google HQ
              $prepAddr = str_replace(' ','+',$address);
              $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
              $output= json_decode($geocode);
              $latitude = $output->results[0]->geometry->location->lat;
              $longitude = $output->results[0]->geometry->location->lng;?>
            <div class="contact-page-area">
                <div class="container-fluid">
                    <div class="row">                               
                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                        <div id="map" style="display:block; height: 450px;"></div>                               
                            <div id="message"> <?php echo $getContactData['description']; ?></div>
                            <script src="http://maps.google.com/maps/api/js?key=AIzaSyBoFCHHmjZTbJB-mHO7qgVLWP707VFohvk"
                                type="text/javascript"></script>
                            <script type="text/javascript">
                            var map;
                            var infowindow = new google.maps.InfoWindow({
                                content: document.getElementById('message')
                            });
                            function initialize() {
                                // Set static latitude, longitude value
                                var latlng = new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>);
                                // Set map options
                                var myOptions = {
                                    zoom: 16,
                                    center: latlng,
                                    panControl: true,
                                    zoomControl: true,
                                    scaleControl: true,
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                }
                                // Create map object with options
                                map = new google.maps.Map(document.getElementById("map"), myOptions);
                            <?php


                                    echo "addMarker(new google.maps.LatLng(".$latitude.", ".$longitude."), map);";
                            ?>
                            }
                            function addMarker(latLng, map) {
                                var marker = new google.maps.Marker({
                                    position: latLng,
                                    map: map,
                                    draggable: true, // enables drag & drop
                                    animation: google.maps.Animation.DROP
                                });
                                google.maps.event.addListener(marker, 'click', function() {
                                    infowindow.open(map, marker);
                                  });

                                return marker;
                            }
                            google.maps.event.addDomListener(window, 'load', initialize);
                        </script>   
                            
                        </div>
                    </div>
                </div>



                <!-- Contact Page Area Start Here -->
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




          <!-- med/contactus_page -->