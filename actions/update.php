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
			$id = $_POST['id'];

$sql = "UPDATE users SET fname = '$fname', lname = '$lname', age = '$age', contact = '$contact', address = '$address', email = '$email' WHERE id = '$id' ";

if($dbcon->query($sql)){
	echo "<p>User Info Updated successfully</p>";
	echo "<a href='../edit.php?id=".$id."' class='btn btn-primary'>Add User</a>";
	echo "<a href='../index.php' class='btn btn-success'>Home</a>";
}else{
	echo "Error while data updating : ". $dbcon->error;
}

$dbcon->close();
}

?>

<?php include("inc/footer.php"); ?>