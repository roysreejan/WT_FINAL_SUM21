<?php
    require_once 'models/db_config.php';
	$name="";
	$err_name="";
	$dob="";
	$err_dob="";
	$credit="";
	$err_credit="";
	$cgpa="";
	$err_cgpa="";
	$dept_id="";
	$err_dept_id="";
	
	$hasError=false;
	$err_db="";
	if(isset($_POST["AddStudent"]))
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
		if(empty($_POST["dob"])){
			$hasError = true;
			$err_dob="Date of birth Required";
		}
		
		else{
			$dob =$_POST["dob"];
	
		}
		if(empty($_POST["credit"])){
			$hasError = true;
			$err_credit="Credit Required";
		}
		
		else{
			$credit =$_POST["credit"];
	
		}
		if(empty($_POST["cgpa"])){
			$hasError = true;
			$err_cgpa="Cgpa Required";
		}
		
		else{
			$cgpa =$_POST["cgpa"];
	
		}
		if(!isset($_POST["dept_id"])){
			$hasError = true;
			$err_dept_id="Department Required";
		}
		
		else{
			$dept_id =$_POST["dept_id"];
	
		}
		
	
		if(!$hasError)
		{
		
			$rs = insertStudent($name,$dob,$credit,$cgpa,$dept_id);
			if ($rs === true)
			{
				header("Location: AllStudent.php");
			}
			$err_db = $rs;
		}
	}
		
	elseif(isset($_POST["EditStudent"]))
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
		if(empty($_POST["dob"]))
		{
			$hasError = true;
			$err_dob="Date of birth Required";
		}
		
		else
		{
			$dob =$_POST["dob"];
		}
		if(empty($_POST["credit"])){
			$hasError = true;
			$err_credit="Credit Required";
		}
		
		else
		{
			$credit =$_POST["credit"];
		}
		if(empty($_POST["cgpa"]))
		{
			$hasError = true;
			$err_cgpa="CGPA Required";
		}
		else
		{
			$cgpa =$_POST["cgpa"];
	
		}
		if(!isset($_POST["dept_id"])){
			$hasError = true;
			$err_dept_id="Department Required";
		}
		else
		{
			$dept_id =$_POST["dept_id"];
		}
		if(!$hasError)
		{
			$rs = updateStudent($name,$dob,$credit,$cgpa,$dept_id,$_POST["id"]);
			if($rs === true)
			{
				header("Location: AllStudent.php");
			}
			$err_db = $rs;
		}
	}
	
	function insertStudent($name,$dob,$credit,$cgpa,$dept_id){
		$query = "insert into student values (NULL,'$name','$dob',$credit,'$cgpa',$dept_id)";
		return execute($query);
	}
	function getStudents(){
		$query ="select s.*,d.name as 'd_name' from student s left join departments d on s.dept_id = d.id";
		$rs = get($query);
		return $rs;
	}
	function getStudent($id){
		$query = "select * from student where id = $id";
		$rs = get($query);
		return $rs[0];
	}
	function updateStudent($name,$dob,$credit,$cgpa,$dept_id,$id){
		$query ="update student set name='$name',dob='$dob',credit=$credit,cgpa=$cgpa,dept_id=$dept_id where id = $id";
		return execute($query);
	}
?>