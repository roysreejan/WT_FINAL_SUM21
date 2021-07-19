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
         <td>  <b>Add Student </b></td>
           <tr>
               <td>Name:</td>
			    <td><input type="text" name="name" value="<?php echo $name; ?>" > </td>
                <td><span> <?php echo $err_name;?> </span></td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><input type="text" name="dob" value="<?php echo $dob; ?>" > </td>
                <td><span> <?php echo $err_dob;?> </span></td>
            </tr>
            <tr>
                    <td>Credit:</td>
                    <td><input type="text" name="credit"  value="<?php echo $credit; ?>"> </td>
                    <td><span> <?php echo $err_credit;?> </span></td>
            </tr>
            <tr>
                    <td>CGPA:</td>
                    <td><input type="text" name="cgpa" value="<?php echo $cgpa; ?>" > </td>
                    <td><span> <?php echo $err_cgpa;?> </span></td>
            </tr>
                
            <tr>
                    <td>Deparment:</td>
                    <td><select name="dept_id" value="<?php echo $dept_id; ?>">
                    <option selected disabled>Choose Deparment</option>
                    <?php
                    foreach($departments as $d)
					{
                        echo "<option value='".$d["id"]."'>".$d["name"]."</option>";
                    }
                    ?>
                    </select>
                    </td>
                    <td><span> <?php echo $err_dept_id;?> </span></td>
            </tr>
                
                
            <tr>
                   <td colspan="2" align="right"> <input type="submit" name="AddStudent" value="Add Student"> </td>
                    
            </tr>
        </table>
      </fieldset>
    </form>
  </body>
</html>
<?php require_once 'main_footer.php';?>
