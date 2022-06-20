<!-- to delete a specific id from the list  -->
<?php
	require_once "dbConnect.php";
	$id = $_GET['id'];
	$sql = "DELETE  FROM students  where id=$id";
	$result = mysqli_query($con, $sql);
	header("Location: studentsList.php");
?>
