<?php
	require_once 'main_header.php';
    require_once 'controllers/StudentController.php';
    require_once 'controllers/DeptController.php';
    $departments=getAllDepartments();
    ?>
<html>
    <head></head>
    <h5><?php echo $err_db;?></h5>
    <body>
        <form  method="post" action="">
        <fieldset>
        <table>
         <td>  <b>Add Department</b></td>
            <tr>
               <td>Name:</td>
			   <td><input type="text" name="name" value="<?php echo $name; ?>" > </td>
               <td><span> <?php echo $err_name;?> </span></td>
            </tr>    
            <tr>
                <td colspan="2" align="right"> <input type="submit" name="AddDepartment" value="Add Student"> </td>    
            </tr>
        </table>
      </fieldset>
    </form>
  </body>
</html>
<?php require_once 'main_footer.php';?>