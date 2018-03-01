<?php include("inc/header.php"); ?>
<?php require_once("actions/db_connect.php"); ?>

<?php 

if($_GET){
			$fname = $_GET['fname'];
			$lname = $_GET['lname'];
			$age = $_GET['age'];
			$contact = $_GET['contact'];
			$address = $_GET['address'];
			$email = $_GET['email'];
			$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id = '$id')";

if($dbcon->query($sql)){
	echo "<p>User deleted successfully</p>";
	echo "<a href='../create.php' class='btn btn-primary'>Add User</a>";
	echo "<a href='../index.php' class='btn btn-success'>Home</a>";
}else{
	echo "Error". $sql .' '. $dbcon->connect_error;
}
	$dbcon->close();
}

?>

<?php include("inc/footer.php"); ?>