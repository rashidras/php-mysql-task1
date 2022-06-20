<!-- to verify the username and password  -->
<?php
    require_once "dbConnect.php";
    if ( isset ($_POST ['login'] ) ) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT id FROM `login` WHERE (username = '$username' AND password = '$password')";  
        $result = mysqli_query($con, $sql);      
        if(mysqli_num_rows($result) == 1){  
            header("Location:studentList.php");
        }  
        else{  
            $message = urlencode("an errror occured"); 
            header("Location:login.php");
        }  
    }
?>
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
<section>
    <nav class="navbar navbar-expand-md navbar-dark nav-background">
        <a class="navbar-brand" href="#">INTOT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> 
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto login-and-signup">
                <li class="nav-item active login">
                    <a class="nav-link" href="studentsList.php"><img class="signup-icon" src="images/signup.png" alt=""/><span>BACK</span></a>   
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="header-buttons"><img src="images/search-icon.png" alt=""/></button>
    
            </form>
            <button class="btn btn-outline-success my-2 my-sm-0 menu-button" type="submit" onclick="openNav()"><img
                    src="images/menu.png" alt=""/></button>
        </div>
    </nav>
</section>
    <!-- view student data  -->
<div class="container">
<?php
    require_once "dbConnect.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM students WHERE id = $id";
    $result = mysqli_query($con , $sql);
    while($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        echo $id;
        echo ".";
        $name = $row['student_name'];
        echo $name;
        echo "<br>";
        $email = $row['email'];
        echo $email;
        echo "<br>";
        $phoneNumber = $row['phoneNumber'];
        echo $phoneNumber;
        echo "<br>";
        $class = $row['standard'];
        echo $class;
        echo "<br>";
        $address = $row['address'];
        echo $address;
        echo "<br>";
    }
?>
</div>
</body>
</html>
