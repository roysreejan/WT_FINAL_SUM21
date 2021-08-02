<?php include 'main_header.php';
   include 'controllers/CategoryController.php';

?>	
	
<!--addproduct starts -->
	<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
		<form  action="" method="post" class="form-horizontal form-material">
			<div class="form-group">
				<h4 class="text">Name:</h4> 
				<input type="text" name ="name" onfocusout="checkname(this)" class="form-control">
			</div>
			
			<div class="form-group text-center">
				
				<input type="submit" name = "add_category" class="btn btn-success" value="Add Category" class="form-control">
			</div>
		</form>
	</div>
<script src="js/category.js"></script>
<!--addproduct ends -->
<?php include 'main_footer.php';?>