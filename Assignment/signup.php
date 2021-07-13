<?php include 'main_header.php';
    include 'controllers/UserController.php';
?>
<!--sign up starts -->
<div class="center-login">
	<h1 class="text text-center">Sign Up</h1>
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form  action ="" method ="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text"><b>Name</b></h4> 
			<input type="text" name = "name" value ="<?php echo $name;?>" class="form-control">
			<span class="text-danger"><?php echo $err_name;?></span>
		</div>
		<div class="form-group">
			<h4 class="text"><b>Username</b></h4> 
			<input type="text" name ="uname" value ="<?php echo $uname;?>" class="form-control">
			<span class="text-danger"><?php echo $err_uname;?></span>
		</div>
		<div class="form-group">
			<h4 class="text"><b>Email</b></h4> 
			<input type="text" name ="email" value ="<?php echo $email;?>" class="form-control">
			<span class="text-danger"><?php echo $err_email;?></span>
		</div>
		<div class="form-group">
			<h4 class="text"><b>Password</b></h4> 
			<input type="password" name ="pass" value ="<?php echo $pass;?>" class="form-control">
			<span class="text-danger"><?php echo $err_pass;?></span>
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" name ="sign_up" value="Sign Up" class="form-control">
		</div>
	</form>	
</div>

<!--sign up ends -->
<?php include 'main_footer.php';?>