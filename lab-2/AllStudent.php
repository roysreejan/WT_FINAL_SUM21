<?php
	require_once 'main_header.php';
	require_once 'models/db_config.php';
    $query  = "select * from student";
    $result = get($query);
?>

	<h3 >All Student</h3>
    <table>
		<thead>	
			<th>SL#</th>
            <th>Name</th>
			<th>ID</th>
            <th>DOB</th>
            <th>Credit</th>
            <th>CGPA</th>
            <th>Dept_id</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
		<tbody>
		<?php
			$i=1;
			foreach($result as $row)
			{
				echo "<tr>";
					echo "<td>$i</td>";
					echo "<td>".$row["name"]."</td>";
					echo "<td>".$row["id"]."</td>";
					echo "<td>".$row["dob"]."</td>";
					echo "<td>".$row["credit"]."</td>";
					echo "<td>".$row["cgpa"]."</td>";
					echo "<td>".$row["dept_id"]."</td>";
					echo '<td><a href="EditStudent.php?id='.$row["id"].'" class="btn btn-success">Edit</a></td>';
					echo '<td><a class="btn btn-danger">Delete</td>';
				echo "</tr>";
				$i++;
			}
		?>
		</tbody>
    </table>
<?php require_once 'main_footer.php';?>