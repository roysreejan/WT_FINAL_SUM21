<?php 
    include 'models/db_config.php';
    $uname = "";
	$err_uname="";
    $pass  = "";
	$err_pass="";
	$err_db="";
	$hasError = false;

    if(isset($_POST["btn_login"]))
	{
		if(empty($_POST["uname"]))
        {
            $hasError = true;
            $err_uname="Username Required";
        }
        else
        {
            $uname=htmlspecialchars($_POST["uname"]);
        }
		if(empty($_POST["pass"]))
        {
            $hasError = true;
            $err_pass="Password Required";
        }
         else
        {
            $pass=htmlspecialchars($_POST["pass"]);
        }
		if(!$hasError)
		{
			if(authenticateUser($uname,$pass))
			{
				header("Location: Dashboard.php");
			}
			$err_db = "Username or password invalid";
		}
    } 
	function authenticateUser($uname,$pass)
	{
		$query ="select * from admin where uname='$uname' and pass='$pass'";
		$rs = get($query);
		if(count($rs)>0)
		{
			return true;
		}
		return false;
	}
?>