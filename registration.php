<!-- insert student data  -->
<?php
    require_once "dbConnect.php";
    error_reporting(0);
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phoneNumber'];
        $class = $_POST['standard'];
        $address = $_POST['address'];

        $sql = "INSERT INTO students (student_name, email, phoneNumber, `standard`, `address`) VALUES ('$name', '$email', '$phonenumber', '$class', '$address')";  
        if(mysqli_query($con, $sql)) {  
            $message = urldecode("an error occured");
            header("Location: registration.php?message=".$message);   
        }else{  
            echo "Could not insert record: ". mysqli_error($con);  
        } 
    }
    mysqli_close($con);
?>

<!-- html design of registration form  -->
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
                                    <!-- <a id="login-link" href="#"><img class="login-icon" src="images/login.png"
                                            alt=""><span>Register</span></a> -->
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

<!-- start form section  -->
<section>
    <div class="container">
        <div class="form-section-title">
            <h4 class="dont-hesitate">REGISTER HERE</h4>
        </div>
<div>
    <?php
    if(isset($_GET['message'])){
    ?>
        <div class="alert alert-danger" role="alert">
            REGISTRATION SUCCESS
        </div>
    <?php
    }
    ?>
        <div class="row">
            <div class="col-md-6">
                <form action="" method="POST">
                    <div>
                        <label for="">Name</label><br>
                        <input type="text" name="name"  class="label-length" required="required" autocomplete="off"><br>
                    </div>
                    <div class="labels-padding">
                        <label for="">Email</label><br>
                        <input type="email" name="email" class="label-length" required="required" autocomplete="off"><br>
                    </div>
                    <div class="labels-padding">
                        <label for="">Phone Number</label><br>
                        <input type="text" name="phoneNumber" class="label-length" required="required" autocomplete="off"><br>
                    </div>
                    <div class="labels-padding">
                        <label for="">STANDARD</label><br>
                        <select name="standard" class="select">
                            <option value="">--SELECT--</option>
                            <option value="sslc">SSLC</option>
                            <option value="plusone">PLUS ONE</option>
                            <option value="plustwo">PLUS TWO</option>
                        </select><br>
                    </div>
                    <div class="labels-padding">
                        <label for="">Address</label><br>
                        <textarea name="address" id="" cols="30" rows="10" class="textarea-height" required="required" autocomplete="off"></textarea>
                    </div>
                <button class="send-button" type="submit" name="submit">REGISTER</button>
                </form>
            </div>
            <div class="col-md-6">
                <img src="images/form-img.png" alt="">
            </div>
        </div>
    </div>
</div>    
</section>
<!-- end form section  -->


    <script type="text/javascript" src="js/index.js"></script>
</body>
</html>

