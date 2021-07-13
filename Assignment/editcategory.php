<?php 
    include 'controllers/CategoryController.php';
    $id = $_GET["id"];
    $c = getCategory($id);

?>

    <h5 ><?php echo $err_db;?></h5>
    <form action="" method="post" >

            <h4 >Name:</h4> 
            <input type="hidden" name="id" value="<?php echo $c["id"];?>">
            <input type="text" name="name" value="<?php echo $c["name"];?>" >
            <span><?php echo $err_name;?></span>


            <input type="submit" name="edit_category"  value="Edit Category" >

    </form>