<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" >
    <meta name="description" content="Make a access log in page" >
    <meta name="keywords" content="HTML, PHP" >
    <meta name="author" content="Quoc Co Luc" >
    <title>Access Log In Page</title>
</head>

<body>
<?php
    require_once ("settings.php");
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
    if (!$conn){
		  echo"<p>Database connection failure.</p>";
	} else {
		$sql_table = "table_admin";
		
        function sanitise_input($data){
			$data = trim($data);
            $data = stripslashes($data);
			$data = htmlspecialchars($data);
            return $data;
		}

        if (isset($_POST["username"])){
		   $username = $_POST["username"];
           $username = sanitise_input($username);
	    } else {
			header('location:login.php');
		}

        if (isset($_POST["password"])){
		   $password = $_POST["password"];
		   $password = sanitise_input($password);
        }
        
		$query = "SELECT Pass FROM table_admin WHERE Username = '$username'";
		$result = mysqli_query($conn, $query);
		if ($result){
		    $record = mysqli_fetch_assoc($result);
            if($record){
               if ($password == $record["Pass"]){
				   header("location:manager.php");
               } else {
                   header("location:login.php");
               }
            } else {
                   header("location:login.php");
            }
            }else{
                 header("location:login.php");
		    }

    }
?>
       
</body>
</html>