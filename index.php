<?php require_once("actions/db_connect.php"); ?>
<?php include("inc/header.php"); ?>

<body>
	<!-- Page Heading -->
	<div class="container heading-bg">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>PROCEDURAL CRUD APPLICATION</h1>
			</div>
		</div>
	</div>
    
    <!-- Page Body Content -->
	<div class="container pagebody">
		<div class="row">
			<div class="col-md-12">
				<div class="addUser">
					<a href="create.php" class="btn btn-primary">Add User</a>
				</div>
				<table class="table">
				    <thead>
				      <tr>
				      	<th>ID</th>
				        <th>First Name</th>
				        <th>Last Name</th>
				        <th>Age</th>
				        <th>Contact</th>
				        <th>Address</th>
				        <th>Email</th>
				        <th>Actions</th>
				      </tr>
				    </thead>
				    <tbody>
				    	<?php
				    	 $sql = "SELECT * FROM users WHERE active = 1";
				    	 $result = $dbcon->query($sql);

				    	 if($result->num_rows>0){
				    	 	while($row = $result->fetch_assoc()){
				    	 		echo "<tr>
				    	 		    <td>".$row['id']."</td>
				    	 			<td>".$row['fname']."</td>
				    	 			<td>".$row['lname']."</td>
				    	 			<td>".$row['age']."</td>
				    	 			<td>".$row['contact']."</td>
				    	 			<td>".$row['address']."</td>
				    	 			<td>".$row['email']."</td>
				    	 			<td>
				    	 			<a href='edit.php' class='btn btn-primary'>Update</a><a href='remove.php' class='btn btn-success'>Remove</a>
				    	 			</td>
				    	 		</tr>";
				    	 	}

				    	 }
				    	?>
				      
				    </tbody>
				  </table>
			</div>
		</div>
	</div>

<?php include("inc/footer.php"); ?>	