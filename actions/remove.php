<?php include("inc/header.php"); ?>
<?php require_once("db_connect.php"); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			
<?php 

if($_POST){
			$id = $_POST['id'];

$sql = "DELETE FROM users WHERE id = '$id' ";

if($dbcon->query($sql)){
	echo "<p>User Info Deleted successfully</p>";
	echo "<a href='../index.php' class='btn btn-success'>Home</a>";
}else{
	echo "Error while data updating : ". $dbcon->error;
}

$dbcon->close();
}

?>

</div>
</div>
</div>
<?php include("inc/footer.php"); ?>