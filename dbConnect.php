<?php
    $servername = "localhost";
    $username = "root";
    $passsword = "";
    $database = "registration";
    
    $con = mysqli_connect($servername, $username, $passsword, $database);

//db connection

    // if ( $con->connect_error ) {
    //     die("Connection failed: " . $con->connect_error);
    // }
    //     echo "Connected successfully<br/>";

//create databsase 

    // $sql = "CREATE DATABASE registration";
    // if ( mysqli_query ( $con, $sql ) ) {
    //     echo "database created successfully<br/>";
    // } else {
    //     echo "db creation failed" . mysqli_error($con);
    // }

//admin-login table creation

//     $sql = "CREATE TABLE `login` (`id` INT AUTO_INCREMENT PRIMARY KEY, `username` VARCHAR(20) NOT NULL, `password` VARCHAR(20) NOT NULL)";
//     if ( mysqli_query( $con, $sql) ) {  
//     echo "Table login created successfully<br/>";  
//     } else {  
//     echo "Could not create table: ". mysqli_error($con);  
//     }

// //insert value into login table

/*  $sql = 'INSERT INTO `login`(username, `password`) VALUES ("admin", "admin")';  
    if(mysqli_query($con, $sql)){  
    echo "Record inserted successfully";  
    }else{  
    echo "Could not insert record: ". mysqli_error($con);  
    }  */

//student table creation

    // $sql = "CREATE TABLE `students` (`id` INT AUTO_INCREMENT PRIMARY KEY, `student_name` VARCHAR(20) NOT NULL, email VARCHAR(20) NOT NULL,  `phoneNumber` INT(11) NOT NULL, `standard` INT(11) NOT NULL, `address` VARCHAR(20) NOT NULL)";
    // if ( mysqli_query( $con, $sql) ) {  
    // echo "Table students created successfully";  
    // } else {  
    // echo "Could not create table: ". mysqli_error($con);  
    // }  

    // mysqli_close($con);
?>