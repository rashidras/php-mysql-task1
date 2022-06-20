<!-- edited data update here  -->
<?php
    require_once "dbConnect.php";
    $id = $_POST['id'];
    $name = $_POST['student_name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phoneNumber'];
    $class = $_POST['class'];
    $address = $_POST['address'];
    $sql = "UPDATE students SET student_name=\"$name\", email=\"$email\", phoneNumber=\"$phonenumber\", address=\"$address\" WHERE id=$id";  
    if(mysqli_query($con, $sql)) {  
        $update_message = urldecode("an error occured");
        header("Location: studentsList.php?message=".$update_message);  
    } else {  
    echo "Could not update record: ". mysqli_error($con);  
    }  
?>