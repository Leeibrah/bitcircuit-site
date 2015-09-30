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



<?php
require_once('footer.php');
?>
              					
</body>
</html>
