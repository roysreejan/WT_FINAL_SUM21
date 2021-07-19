<?php 
	//include 'main_header.php';
	include 'controllers/UserController.php';
?>

	<h1 >Login</h1>
	<h5 ><?php echo $err_db;?></h5>
	<form action="" method="post" >
	
		<h4>Username</h4> 
		<input type="text" name="uname" value="<?php echo $uname;?>" >
		<span class="text-danger"><?php echo $err_uname;?></span>
	
		<h4>Password</h4> 
		<input type="password" name ="pass" value ="<?php echo $pass;?>" >
        <span class="text-danger"><?php echo $err_pass;?></span>
			
		<input type="submit" name="btn_login" value="Login" >	
	</form>
