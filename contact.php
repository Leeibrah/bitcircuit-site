<!DOCTYPE html>
<html lang="en">
<?php
require_once('header.php');
?>

<body class="do-contact-us-page">

<?php
require_once('menu.php');
?>
    <!-- HEADER END -->

    <!-- **************************************
                    Page Title
    *************************************** -->
    <section class="do-normal-page-title-section">
        <div class="container">
            <div class="row">
                <!-- Page Title -->
                <div class="do-page-title-wrapper">
                	<div class="do-default-page-title col-md-7 col-sm-7 col-xs-12">
                		<h2>CONTACT US</h2>
                		<p>PLACE FOR CREATIVE WORKS</p>
                	</div>

                	<div class="do-breadcumb">
                		<ul>
                			<li><a href="contact_us.html#">HOME</a></li>
                			<li><span>CONTACT</span></li>
                		</ul>
                	</div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!-- DO PAGE TITLE END -->


    <!-- **************************************
                SINGLE PAGE CONTENT
    *************************************** -->
    <section class="do-contact-page-wrapper">
    	<div class="container">
    		<div class="row">  
                <!-- GOOGLE MAP -->
                <div class="do-google-map">
                    <div id="map"></div>
                </div>
                <!-- GOOGLE MAP END -->

                <!-- CONTACT FORM AND ADDRESS -->
                <div class="do-contact-form-address-wrapper">
                    <!-- CONTACT FORM -->
                    <div class="do-contact-form-wrapper">
                        <h3>SEND YOUR MESSAGE</h3>

                        <div id="contact-result"></div>

                        <div id="contact-form" class="do-contact-form">
                            <input type="text" name="name" id="name" placeholder="Name" required>
                            <input type="email" name="email" id="email" placeholder="Email" required>
                            <input type="text" name="web" id="web" placeholder="Web">

                            <textarea name="message" id="message" cols="30" rows="10" class="do-input-message" placeholder="Comment" required></textarea>

                            <button type="submit" id="do-submit-btn" class="do-btn-round-solid">SEND</button>
                        </div>
                    </div>
                    <!-- CONTACT FORM END -->

                    <!-- ADDRESS -->
                    <div class="do-contact-add-wrapper">
                        <div class="do-contact-info">
                            <h4>CONTACT INFO</h4>
                            <p>Explain to you how all this mistaken idea of denouncing a teachings of the great explorer of the truth</p>
                        </div>

                        <div class="do-contact-address">
                            <h4>CONTACT INFO</h4>
                            <ul>
                                <li class="do-address">Road 34, House 55<br>
                                Envato Park street, Canbera lane<br>Australia</li>

                                <li class="do-phone">[ 06 ] 862 015 091</li>
                                <li class="do-email">mail@dave.com</li>
                            </ul>

                            <div class="do-coantact-social">
                                <a href="contact_us.html#">
                                    <i class="ti-facebook"></i>
                                </a>
                                <a href="contact_us.html#">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                                <a href="contact_us.html#">
                                    <i class="ti-vimeo-alt"></i>
                                </a>
                                <a href="contact_us.html#">
                                    <i class="ti-dribbble"></i>
                                </a>
                                <a href="contact_us.html#">
                                    <i class="fa fa-behance"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- ADDRESS END -->
                </div>
                <!-- CONTACT FORM AND ADDRESS END -->
    		</div>
    	</div>
    </section>

    

    <!--================================
        SOCIAL LINK SECTION
    =================================-->
    <section class="do-social-link-section">
        <div class="container">
            <div class="row">
                <a href="contact_us.html#" class="do-facebook">
                    <span>
                        <i class="ti-facebook"></i>
                    </span>
                    FACEBOOK
                </a>
            
                <a href="contact_us.html#" class="do-twitter">
                    <span>
                        <i class="ti-twitter-alt"></i>
                    </span>
                    TWITTER
                </a>
            
                <a href="contact_us.html#" class="do-vimeo">
                    <span>
                        <i class="ti-vimeo-alt"></i>
                    </span>
                    vImeo
                </a>
            
                <a href="contact_us.html#" class="do-dribbble">
                    <span>
                        <i class="ti-dribbble"></i>
                    </span>
                    drIbble
                </a>
            
                <a href="contact_us.html#" class="do-behance">
                    <span>
                        <i class="fa fa-behance"></i>
                    </span>
                    behance
                </a>
            </div>
        </div>
    </section>
    <!-- SOCIAL LINK SECTION END-->

    <!--================================
        FOOTER SECTION
    =================================-->
    <footer class="do-footer">
        <div class="container">
            <div class="row">
                <!-- FOOTER TOP -->
                <div class="do-footer-top">
                    <!-- About Widget -->
                    <div class="do-footer-widget do-footer-about-widget col-md-3 col-sm-6 col-xs-12">
                        <div class="do-footer-logo-wrapper">
                            <a href="contact_us.html#">
                                <img src="images/logo-footer.png" alt="">
                            </a>
                        </div>

                        <div class="do-company-address">
                            <ul>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    10/45 Beer Street Heaven, California Floor, USA 1208
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    +1 [09] 45 069 007
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>
                                    mail@themebeer.com
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- About Widget End -->

                    <!-- Link Widget -->
                    <div class="do-footer-widget do-footer-link-widget col-md-3 col-sm-6 col-xs-12">
                        <h3 class="do-footer-widget-header">USEFUL LINKS</h3>
                        <ul>
                            <li><a href="contact_us.html#">Account Create</a></li>
                            <li><a href="contact_us.html#">Company Philoshophy</a></li>
                            <li><a href="contact_us.html#">Corporate Culture</a></li>
                            <li><a href="contact_us.html#">Portfolio</a></li>
                            <li><a href="contact_us.html#">Client Management</a></li>
                        </ul>
                    </div>
                    <!-- Link Widget End -->

                    <!-- About Link Widget -->
                    <div class="do-footer-widget do-about-link-widget col-md-3 col-sm-6 col-xs-12">
                        <h3 class="do-footer-widget-header">ABOUT OFFICE</h3>
                        <ul>
                            <li><a href="contact_us.html#">About History</a></li>
                            <li><a href="contact_us.html#">Company Philoshophy</a></li>
                            <li><a href="contact_us.html#">Corporate Profile</a></li>
                            <li><a href="contact_us.html#">Our Team</a></li>
                            <li><a href="contact_us.html#">Somewhere in</a></li>
                        </ul>
                    </div>
                    <!-- About Link Widget End -->

                    <!-- Flickr Widget -->
                    <div class="do-footer-widget do-flickr-widget col-md-3 col-sm-6 col-xs-12">
                        <h3 class="do-footer-widget-header">flickr photo</h3>
                        <div id="flickr-gallery"></div>
                    </div>
                    <!-- Flickr Widget End -->
                </div>
                <!-- FOOTER TOP END -->

                <!-- FOOTER BOTTOM -->
                <div class="do-footer-bottom">
                    <a href="contact_us.html#" class="do-footer-author-name">ThemebeER</a>
                </div>
                <!-- FOOTER BOTTOM END -->
            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->


        
		




	<!-- *******************************
                SCRIPTS
    ************************************ -->
    <!-- JQUERY -->    		
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/google-map-init.js"></script>
    
    <!-- PLUGINS -->
    <script src="js/plugins.js"></script>

    <!-- CUSTOM SCRIPTS -->    
    <script src="js/main.js"></script>
              					
</body>
</html>
