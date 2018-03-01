<?php include("inc/header.php"); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center">Add user</h1>
			
			<form class="user-form" method="post" action="actions/create.php">
				<div class="form-group row">
    				<label for="firstname" class="col-sm-3 col-form-label">First name</label>
    				<div class="col-sm-9">
      					<input type="text" class="form-control" name="fname" placeholder="First name" required>
    				</div>
  				</div>
  				<div class="form-group row">
    				<label for="lastname" class="col-sm-3 col-form-label">Last name</label>
    				<div class="col-sm-9">
      					<input type="text" class="form-control" name="lname" placeholder="Last name" required>
    				</div>
  				</div>
  				<div class="form-group row">
    				<label for="age" class="col-sm-3 col-form-label">Age</label>
    				<div class="col-sm-9">
      					<input type="text" class="form-control" name="age" placeholder="Age" required>
    				</div>
  				</div>
  				<div class="form-group row">
    				<label for="contact" class="col-sm-3 col-form-label">Contact</label>
    				<div class="col-sm-9">
      					<input type="text" class="form-control" name="contact" placeholder="Contact" required>
    				</div>
  				</div>
  				<div class="form-group row">
    				<label for="address" class="col-sm-3 col-form-label">Address</label>
    				<div class="col-sm-9">
      					<input type="text" class="form-control" name="address" placeholder="Address" required>
    				</div>
  				</div>
  				<div class="form-group row">
    				<label for="email" class="col-sm-3 col-form-label">Email</label>
    				<div class="col-sm-9">
      					<input type="text" class="form-control" name="email" placeholder="Email" required>
    				</div>
  				</div>
  				<input class="btn btn-primary" type="submit" value="Add to user">
  				<a href="index.php" class="btn btn-success">Back</a>
  				
			</form>
		</div>
	</div>
</div>
<?php include("inc/footer.php"); ?>	
