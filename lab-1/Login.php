<?php
	//session_start();
	$uname= "";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	
	$users= array("Sreejan"=>"26627","Jui"=>"26628","Sajjad"=>"26629");
	
	if($_SERVER ["REQUEST_METHOD"] =="POST")
	{
		if(empty($_POST["uname"]))
		{
			$hasError = true;
			$err_uname= "Username Required";
		}
		else
		{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["pass"]))
		{
			$hasError = true;
			$err_pass= "Password Required";
		}
		else
		{
			$pass=$_POST["pass"];
		}
		if(!hassError)
		{
			foreach($users as $u=>$p)
			{
				if ($uname==$u && $pass==$p)
				{
					//$_SESSION["Loggedusers"]= $uname;
					setcookie("Loggedusers",$uname,time()+120);
					header("Location: dashboard.php");
				}
			}
			echo "Invalid username or password";
		}
    } 
?>