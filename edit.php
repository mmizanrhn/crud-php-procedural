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
			<h1 class="text-center">Edit user</h1>
			
			<form class="user-form" method="post" action="actions/update.php">
				<div class="form-group row">
    				<label for="firstname" class="col-sm-3 col-form-label">First name</label>
    				<div class="col-sm-9">
      					<input type="text" class="form-control" name="fname" placeholder="First name" value="<?php echo $data['fname']; ?>" required>
    				</div>
  				</div>
  				<div class="form-group row">
    				<label for="lastname" class="col-sm-3 col-form-label">Last name</label>
    				<div class="col-sm-9">
      					<input type="text" class="form-control" name="lname" placeholder="Last name" value="<?php echo $data['lname']; ?>" required>
    				</div>
  				</div>
  				<div class="form-group row">
    				<label for="age" class="col-sm-3 col-form-label">Age</label>
    				<div class="col-sm-9">
      					<input type="text" class="form-control" name="age" placeholder="Age" value="<?php echo $data['age']; ?>" required>
    				</div>
  				</div>
  				<div class="form-group row">
    				<label for="contact" class="col-sm-3 col-form-label">Contact</label>
    				<div class="col-sm-9">
      					<input type="text" class="form-control" name="contact" placeholder="Contact" value="<?php echo $data['contact']; ?>" required>
    				</div>
  				</div>
  				<div class="form-group row">
    				<label for="address" class="col-sm-3 col-form-label">Address</label>
    				<div class="col-sm-9">
      					<input type="text" class="form-control" name="address" placeholder="Address" value="<?php echo $data['address']; ?>" required>
    				</div>
  				</div>
  				<div class="form-group row">
    				<label for="email" class="col-sm-3 col-form-label">Email</label>
    				<div class="col-sm-9">
      					<input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $data['email']; ?>" required>
    				</div>
  				</div>
  				<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
  				<input class="btn btn-primary" type="submit" value="Save changes">
  				<a href="index.php" class="btn btn-success">Back</a>
  				
			</form>
		</div>
	</div>
</div>
<?php include("inc/footer.php"); ?>	
<?php 
}
?>

