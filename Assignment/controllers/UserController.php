<?php
	include 'models/db_config.php';
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$email="";
	$err_email="";
	$pass="";
	$err_pass="";
	$err_db="";
	$hasError=false;
	if(isset($_POST["sign_up"])){
		if(empty($_POST["name"])){
            $hasError = true;
            $err_name="Name Required";
        }
        elseif(strlen($_POST["name"]) <=2)
        {
            $hasError = true;
            $err_name = "Name must be greater than 2 characters";
        }
        else
        {
            $name=htmlspecialchars($_POST["name"]);
        }
		if(empty($_POST["uname"]))
        {
            $hasError = true;
            $err_uname="Username Required";
        }
        elseif(strlen($_POST["uname"]) <= 5)
        {
            $hasError = true;
            $err_uname="Username must contain at least 6 character";
        }
        elseif(strpos($_POST["uname"], ' ') !== false)
        {
            $hasError = true;
            $err_uname= "Space is not allowed in Username";
        }
        else
        {
            $uname=htmlspecialchars($_POST["uname"]);
        }
        if(empty($_POST["email"]))
        {
            $hasError = true;
            $err_email="Email Required";
        }
        else if(strpos($_POST["email"], "@"))
        {
            $flag = false;
            $pos = strpos($_POST["email"], "@");
            $str = $_POST["email"];
            for($i = $pos; $i < strlen($str); $i++)
            {
                if($str[$i]== ".")
                {
                    $flag = true;
                    break;
                }
            }
            if($flag == true)
            {
                $email=htmlspecialchars($_POST["email"]);
            }
            else
            {
                $hasError = true;
                $err_email="Email must contain @ character and . character";
            }
        }
        else
        {
            $email=$_POST["email"];
        }
        if(empty($_POST["pass"]))
        {
            $hasError = true;
            $err_pass="Password Required";
        }
        elseif(strlen($_POST["pass"]) <= 7)
        {
            $hasError = true;
            $err_pass="Password must contain at least 8 character";
        }
        elseif(strpos($_POST["pass"], '#') == false)
        {
            $hasError = true;
            $err_pass= "Password must contain # character or one ? character";
        }
        else
        {
            $upper = 0;
            $lower = 0;
            $number = 0;
            $arr = str_split($_POST["pass"]);
            foreach($arr as $a)
            {
                if($a >= 'A' && $a <= 'Z')
                    $upper++;
                elseif($a >= 'a' && $a <= 'z')
                    $lower++;
                elseif ($a >= 0)
                    $number++;
            }
            if($upper >= 1 && $lower >= 1 && $number >= 1)
            {
                $pass = $_POST["pass"];
            }
            else
            {
                $err_pass= "Password must contain 1 number and combination of uppercase and lowercase alphabet";
            }
        }
		if(!$hasError){
			$rs = insertUser($name,$uname,$email,$pass);
			
			if($rs === true){
				header("Location: login.php");
			}
			$err_db = $rs;
			
		}
	}
	else if (isset($_POST["btn_login"])){
		if(empty($_POST["uname"]))
        {
            $hasError = true;
            $err_uname="Username Required";
        }
        elseif(strlen($_POST["uname"]) <= 5)
        {
            $hasError = true;
            $err_uname="Username must contain at least 6 character";
        }
        elseif(strpos($_POST["uname"], ' ') !== false)
        {
            $hasError = true;
            $err_uname= "Space is not allowed in Username";
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
        elseif(strlen($_POST["pass"]) <= 7)
        {
            $hasError = true;
            $err_pass="Password must contain at least 8 character";
        }
        elseif(strpos($_POST["pass"], '#') == false)
        {
            $hasError = true;
            $err_pass= "Password must contain # character or one ? character";
        }
        else
        {
            $upper = 0;
            $lower = 0;
            $number = 0;
            $arr = str_split($_POST["pass"]);
            foreach($arr as $a)
            {
                if($a >= 'A' && $a <= 'Z')
                    $upper++;
                elseif($a >= 'a' && $a <= 'z')
                    $lower++;
                elseif ($a >= 0)
                    $number++;
            }
            if($upper >= 1 && $lower >= 1 && $number >= 1)
            {
                $pass = $_POST["pass"];
            }
            else
            {
                $err_pass= "Password must contain 1 number and combination of uppercase and lowercase alphabet";
            }
		}
		if(!$hasError)
		{
			if(authenticateUser($uname,$pass))
			{
				header("Location: dashboard.php");
			}
			$err_db = "Username or password invalid";
			
		}
	}
	function insertUser($name,$uname,$email,$pass){
		$query  = "insert into users values (NULL,'$name','$uname','$email','$pass')";
		return execute($query);	
	}
	function authenticateUser($uname,$pass){
		$query ="select * from users where uname='$uname' and pass='$pass'";
		$rs = get($query);
		if(count($rs)>0)
		{
			return true;
		}
		return false;
		
	}
	
?>