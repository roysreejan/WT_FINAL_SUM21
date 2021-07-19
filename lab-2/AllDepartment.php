<?php 
	require_once 'main_header.php';
    require_once 'controllers/DeptController.php';
    $departments=getAllDepartments();

?>
<html>
    <head></head>
    <h3>All Department</h3>
    <table>
    <thead>
        <th>Sl#</th>
        <th>Name</th>
        <th></th>
        <th></th>
    </thead>
    <tbody>
    <?php 
    $i = 1;
    foreach($departments as $d){
        echo "<tr>";
          echo "<td>$i</td>";
          echo "<td>".$d["name"]."</td>";

          echo "</tr>";
          $i++;
    }

    ?>
    </tbody>
    </table>
    </body>
</html>
<?php require_once 'main_footer.php';?>