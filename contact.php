<!DOCTYPE html>
<html lang="en">

<title>BitCircuit : CONTACT</title>
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
                        <li><a href="#">HOME</a></li>
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


            <!-- CONTACT FORM AND ADDRESS -->
            <div class="do-contact-form-address-wrapper">
                <!-- CONTACT FORM -->
                <div class="do-contact-form-wrapper">
                    <h3>TALK TO US DIRECT</h3>

                    <div id="contact-result"></div>

                    <div id="contact-form" class="do-contact-form">
                        <input type="text" name="name" id="name" placeholder="Name" required>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                        <input type="text" name="subject" id="subject" placeholder="Subject">

                        <textarea name="message" id="message" cols="30" rows="10" class="do-input-message"
                                  placeholder="Write Message" required></textarea>

                        <div id="submit-result"></div>
                        <button type="submit" id="do-submit-btn" class="do-btn-round-solid">SEND</button>

                    </div>
                </div>
                <!-- CONTACT FORM END -->

                <!-- ADDRESS -->
                <div class="do-contact-add-wrapper">
                    <div class="do-contact-info">
                        <h4>CONTACT US</h4>

                        <p>For the solution we are offering, other business or partnership. Below is our contact address</p>
                    </div>

                    <div class="do-contact-address">
                        <h4>CONTACT INFO</h4>
                        <ul>
                            <li class="do-address">3rd Floor,<br>
                                Bishop Magua Centre,<br> Ngong Road,<br>Nairobi, Kenya
                            </li>

                            <li class="do-phone">[ +254 ] 710 77 55 77</li>
                            <li class="do-email">contact@bitcircuit.co</li>
                        </ul>
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
