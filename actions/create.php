<?php include("inc/header.php"); ?>
<?php require_once("db_connect.php"); ?>

<?php 

if($_POST){
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$age = $_POST['age'];
			$contact = $_POST['contact'];
			$address = $_POST['address'];
			$email = $_POST['email'];

$sql = "INSERT INTO users(fname, lname, age, contact, address, email, active) 
		VALUES('$fname', '$lname', '$age', '$contact', '$address', '$email', 1)";

if($dbcon->query($sql)){
	echo "<p>User Added successfully</p>";
	echo "<a href='../create.php' class='btn btn-primary'>Add User</a>";
	echo "<a href='../index.php' class='btn btn-success'>Home</a>";
}else{
	echo "Error". $sql .' '. $dbcon->connect_error;
}
	$dbcon->close();
}

?>

<?php include("inc/footer.php"); ?>