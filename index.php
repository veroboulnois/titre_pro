<?php
session_start();
include_once 'assets/models/user.php';
include_once 'assets/models/artWork.php';
include_once 'assets/models/artWorkType.php';
include_once 'assets/controllers/indexCtrl.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width= device-width,initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="assets/css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>      
        <script src="https://use.fontawesome.com/a85a823305.js"></script>
        <script src="assets/js/script.js" type="text/javascript"></script>
        <title>Accueil</title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="assets/img/atelier.jpg" style="width: 100%; height: 600px">
            </div>
            <div class="mySlides fade">
                <img src="assets/img/atelier2.jpg" style="width: 100%; height: 600px">
            </div>
            <div class="mySlides fade">
                <img src="assets/img/travailencours.jpg" style="width:100%; height: 600px">
            </div>
            <div class="mySlides fade">
                <img src="assets/img/outilsbois.jpg" style="width:100%; height: 600px">
            </div>
            <div class="mySlides fade">
                <img src="assets/img/outilspierre.jpg" style="width:100%; height: 600px">
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
    </div>
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
</body>
<footer>
    <!-- Copyright and social media section -->
    <section class="copyright-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="logo">
                        <!-- Replace Your logo and remove text  -->
                        <!-- <img src="images/logo.png" class="img-responsive center-block"> -->
                        <h2 class="demo-logo">ART'S<strong>BO</strong>OK</h2>
                    </div>
                    <div class="social-media">
                        <ul class="list-inline">
                            <li><a href="" title="A partager sur Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="" title="A partager sur Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="" title="A partager sur Google+"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>

                    <div class="copyright">
                        <p>Copyright &copy; 2017. Véronique Boulnois.</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!--  End of copyright section -->
</footer> <!--  End of footer -->
</html>
