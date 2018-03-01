<?php 
require_once("actions/db_connect.php");

if($_GET['id']){
	$id = $_GET['id'];

	$sql = "SELECT * FROM users WHERE id = {$id}";
	$result = $dbcon->query($sql);
	
	$data = $result->fetch_assoc();
	$dbcon->close();

?>

<?php include("inc/header.php"); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center">Remove user</h1>
			<form action="actions/remove.php" method="post">
				<h4> Would you like to remove this user? </h4>
				<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
  				<input class="btn btn-primary" type="submit" value="Remove user">
  				<a href="index.php" class="btn btn-success">Back</a>
			</form>
		</div>
	</div>	
</div>
<?php 
}
?>