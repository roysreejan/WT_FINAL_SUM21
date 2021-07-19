<?php
    require_once 'models/db_config.php';
    $name="";
    $err_name="";
    $hasError=false;
    $err_db="";
	if(isset($_POST["AddDepartment"]))
	{
		if(empty($_POST["name"]))
		{
			$hasError = true;
			$err_name="Name Required";
		}
		else
		{
			$name =$_POST["name"];
		}
		if(!$hasError)
		{
			$rs = insertDepartment($name);
			if ($rs === true)
			{
				header("Location: AllDepartment.php");
			}
			$err_db = $rs;
		}
	}
	function insertDepartment($name)
	{
		$query = "insert into departments values (NULL,'$name')";
		return execute($query);
	}
    function getAllDepartments()
	{
        $query="select * from departments";
        $rs=get($query);
        return $rs;
    }
?>