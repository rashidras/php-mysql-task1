<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intot</title>

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <!-- Bootsatrap Scripts -->  
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
 
</head>
<body >
    <section class="outer-section">
        <div class="inner-section">    
            <div class="header-section">
                <div class="container-fluid">
                    <!-- navBar section -->
                    <nav class="navbar navbar-expand-md navbar-dark nav-background">
                        <a class="navbar-brand" href="#">INTOT</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button> 
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto login-and-signup">
                                <li class="nav-item active login">
                                    <a class="nav-link" href="registration.php"><img class="login-icon" src="images/login.png"
                                            alt=""><span>Register</span></a>
                                </li>
                                <li class="nav-item active signup">
                                    <a class="nav-link" href="login.php"><img class="signup-icon" src="images/signup.png" alt=""><span>Login</span></a>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <button class="header-buttons"><img src="images/search-icon.png" alt=""></button>
                    
                            </form>
                       
                            <div id="myNav" class="overlay">
                    
                                <!-- Button to close the overlay navigation -->
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    
                                
                                <div class="overlay-content">
                                    <a href="#">HOME</a>
                                    <a href="#">TEAM</a>
                                    <a href="#">PORTFOLIO</a>
                                    <a href="#">CONTACTUS</a>
                                </div>
                            </div>
                            
                            <button class="btn btn-outline-success my-2 my-sm-0 menu-button" type="submit" onclick="openNav()"><img
                                    src="images/menu.png" alt=""></button>
                        </div>
                    </nav>
                    <!-- end navbar -->
                </div>  
            </div> 
        </div>
    </section>

<!-- slider-section -->
    <section class="slider-section">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="number-padding">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
                </ol>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active title-and-para">
                    <div class="row">
                        <div class="col-md-3 offset-md-2">
                            <h1 class="innovative">INNOVATIVE</h1>
                            <h1 class="solutions">SOLUTIONS</h1>
                            <p class="title-para">We find the best solutions fot you, we <br> redesign your home and work places. <br> Discover why over 5,100 home owners <br>trust
                            initiative</p>
                            <button class="readmore">Read More</button>
                        </div>
                        <div class="col-md-7">
                            <img class="slide-image" src="images/slider-img.png" alt="First slide">
                        </div>
                    </div>
                </div>
                <div class="carousel-item title-and-para">
                    <div class="row">
                        <div class="col-md-3 offset-md-2">
                            <h1 class="innovative">INNOVATIVE</h1>
                            <h1 class="solutions">SOLUTIONS</h1>
                            <p class="title-para">We find the best solutions fot you, we <br> redesign your home and work places. <br>
                                Discover why over 5,100 home owners <br>trust
                                initiative</p>
                            <button class="readmore" onclick="popup();">Read More</button>
                            <!-- <button onclick="myFunction()">Try it</button> -->
                        </div>
                        <div class="col-md-7">
                            <img class="slide-image" src="images/slider-img.png" alt="First slide">
                        </div>
                    </div>
                </div>     
            </div>
            <div class="clip-path">
                    
            </div>
            <div class="arrow-buttons">
                <button class="prev-button" type="button" data-target="#carouselExampleIndicators" data-slide="prev"><img src="images/left-black-arrow.png" alt=""></button>
                <button class="next-button" type="button" data-target="#carouselExampleIndicators" data-slide="next"><img src="images/right-black-arrow.png" alt=""></button>
            </div>
        </div>        
    </section>
    
<!-- end slider-section -->

<!-- company section -->
<sectio class="company-section">
   <div class="container">
        <div class="why-initiative">
            <h2 class="company-title">WHY INITIATIVE COMPANY</h2>
            <p class="company-para">It is a long established fact that a reader will be distracted by the readable content of a
                page when looking at its
                layout. The point of using Lorem</p>
        </div>
        <div class="card-section">
            <div class="row">
                <div class="col-md-4">
                    <div class="shadow p-3 mb-5 bg-body rounded box-shadow">
                        <div class="card-image">
                            <img src="images/card-img-1.png" alt="">
                        </div>
                        
                        <div class="card-title">
                            <h3>10 YEARS EXPERIENCE</h3>
                            <p class="card-para">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh
                                ultricies vehicula ut id
                                elit. Morbi leo risus.</p>
                        </div>
                    </div>
                    <div class="three-buttons">
                        <button class="read-button">Read More</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="shadow p-3 mb-5 bg-body rounded box-shadow">
                        <div class="card-image">
                            <img src="images/card-img-2.png" alt="">
                        </div>
                    
                        <div class="card-title">
                            <h3>10 YEARS EXPERIENCE</h3>
                            <p class="card-para">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh
                                ultricies vehicula ut id
                                elit. Morbi leo risus.</p>
                        </div>
                    </div>
                    <div class="three-buttons">
                        <button class="read-button">Read More</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="shadow p-3 mb-5 bg-body rounded box-shadow">
                        <div class="card-image">
                            <img src="images/card-img-3.png" alt="">
                        </div>
                    
                        <div class="card-title">
                            <h3>10 YEARS EXPERIENCE</h3>
                            <p class="card-para">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh
                                ultricies vehicula ut id
                                elit. Morbi leo risus.</p>
                        </div>
                    </div>
                    <div class="three-buttons">
                        <button class="read-button">Read More</button>
                    </div>
                </div>
            </div>
        </div>
   </div>
</section>

<!-- end company-section -->

<section class="portfolio-section">
    <div class="container">
        <div class="our-portfolio">
            <h2 class="company-title">OUR PORTFOLIO</h2>
            <p class="portfolio-para">It is a long established fact that a reader will be distracted by the readable content of a
                page when looking at its
                layout. The point of using Lorem</p>
        </div>
        <div class="row portfolio-images">
            <div class="col-md-8">
                <img class="portfolio-img1" src="images/portfolio-img-1.png" alt="">
            </div>
            <div class="col-md-4">
                <img class="portfolio-img2" src="images/portfolio-img-2.jpg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img class="portfolio-img3" src="images/portfolio-img-3.png" alt="">
            </div>
            <div class="col-md-8">
                <img class="portfolio-img4" src="images/portfolio-img-4.png" alt="">
            </div>
        </div>
    </div>
</section>
<!-- end portfolio-section -->

 <!-- start team-section -->
<section class="team-section">
    <div class="container">
        <div class="our-team">
            <h2 class="company-title">OUR TEAM</h2>
            <p class="portfolio-para">It is a long established fact that a reader will be distracted by the readable</p>
        </div>
        <div class="row portfolio-images-section">
            <div class="col-md-3">
                <img class="team-image" src="images/team-1.png" alt="">
                <div class="name-and-designation">
                    <h4>JHON DOE</h4>
                    <h5>CEO - DESIGNER</h5>
                </div>
                <div class="logo-images">
                    <h5 class="follow-on">Follow On</h5>
                    <img src="images/facebook-logo-button.png" alt="">
                    <img src="images/twitter-logo-button.png" alt="">
                    <img src="images/linkedin.png" alt="">
                    <img src="images/instagram.png" alt="">
                </div>
            </div>
            <div class="col-md-3">       
                <img class="team-image" src="images/team-2.png" alt="">
                <div class="name-and-designation">
                    <h4>SANDY DOE</h4>
                    <h5>CEO - DESIGNER</h5>
                </div>
                <div class="logo-images">
                    <h5 class="follow-on">Follow On</h5>
                    <img src="images/facebook-logo-button.png" alt="">
                    <img src="images/twitter-logo-button.png" alt="">
                    <img src="images/linkedin.png" alt="">
                    <img src="images/instagram.png" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <img class="team-image" src="images/team-3.png" alt="">
                <div class="name-and-designation">
                    <h4>ALEXI DOE</h4>
                    <h5>CEO - DESIGNER</h5>
                </div>
                <div class="logo-images">
                    <h5 class="follow-on">Follow On</h5>
                    <img src="images/facebook-logo-button.png" alt="">
                    <img src="images/twitter-logo-button.png" alt="">
                    <img src="images/linkedin.png" alt="">
                    <img src="images/instagram.png" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <img class="team-image" src="images/team-4.png" alt="">
                <div class="name-and-designation">
                    <h4>JHON DOE</h4>
                    <h5>CEO - DESIGNER</h5>
                </div>
                <div class="logo-images">
                    <h5 class="follow-on">Follow On</h5>
                    <img src="images/facebook-logo-button.png" alt="">
                    <img src="images/twitter-logo-button.png" alt="">
                    <img src="images/linkedin.png" alt="">
                    <img src="images/instagram.png" alt="">
                </div>
            </div>
        </div>
        <div class="end-line">
            <hr>
        </div>
    </div>
</section>
<!-- end team section -->


<!-- start form section  -->
<section id="form">
    <div class="container">
        <div class="form-section-title">
            <h4 class="dont-hesitate">REGISTER HERE</h4>
            <!-- <h3 class="">FREE CONSULTATION</h3> -->
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="registration.php" method="POST">
                    <div>
                        <label for="">Name</label><br>
                        <input type="text" name="name"  class="label-length" required="require"><br>
                    </div>
                    <div class="labels-padding">
                        <label for="">Email</label><br>
                        <input type="text" name="email" class="label-length"><br>
                    </div>
                    <div class="labels-padding">
                        <label for="">Phone Number</label><br>
                        <input type="text" name="contact" class="label-length"><br>
                    </div>
                    <div class="labels-padding">
                        <label for="">STANDARD</label><br>
                        <select class="select" name="class">
                            <option value="volvo">--SELECT--</option>
                            <option value="saab">SSLC</option>
                            <option value="opel">PLUS ONE</option>
                            <option value="audi">PLUS TWO</option>
                        </select><br>
                    </div>
                    <div class="labels-padding">
                        <label for="">Address</label><br>
                        <textarea name="address" id="" cols="30" rows="10" class="textarea-height"></textarea>
                    </div>
                </form>
                <button class="send-button" name="submit">REGISTER</button>
            </div>
            <div class="col-md-6">
                <img src="images/form-img.png" alt="">
            </div>
        </div>
    </div>
    
</section>
<!-- end form section  -->
<section class="why-choose-us">   
    <div class="container">
        <div class="why-choose-title">
            <h3>WHY CHOOSE US?</h3>
            <p class="why-choose-title-para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its
            layout. The point of using LoremIt is a long established fact that a reader will be distracted by the readable content
            of a page when looking at its layout. The point of using Lorem</p>
            <div class="final-polygon">
            
            </div>
        </div>
    </div>  
</section>

<section class="last-section">
    <div class="final-section">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col about-us">
                        <h4>About Us</h4>
                        <p>It is a long established <br>
                        fact that a reader will be <br>
                        distracted by the read <br>
                        able LoremIt is a long es <br>
                        tablished fact that a <br>
                        reader will be distracted</p>
                    </div> 
                    <div class="contact-us col">
                        <h4>Contact Us</h4>
                        <p>It is a long established <br>
                        fact that a reader will be <br>
                        distracted by the read <br>
                        able LoremIt is a long es <br>
                        tablished fact that a <br>
                        reader will be distracted</p>
                    </div>
                </div>
                    <div class="end-email-section">
                        <input type="text" placeholder="Enter your email" class="email-input">
                        <button class="subscribe-button">SUBSCRIBE</button>
                    </div>
            </div>            
            <div class="col-md-6">
                <img class="map-image" src="images/map.png" alt=""> 
                <div class="social-media-icons">
                    <img class="end-icons" src="images/fb.png" alt="">
                    <img class="end-icons" src="images/twitter.png" alt="">
                    <img class="end-icons" src="images/linkedin1.png" alt="">
                    <img class="end-icons" src="images/instagram1.png" alt="">
                </div>
            </div>
        </div>
        <div class="horizondal-line">
            <hr class="style2">
        </div>
    <!-- footer section  -->
        <div class="footer-section">
            <p class="copyright">© 2019 All Rights Reserved. Design by Free Html Templates</p>
        </div>
    <!-- end footer section  -->
    </div>  
</section>
    <script type="text/javascript" src="js/index.js"></script>
</body>
</html>