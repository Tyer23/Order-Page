<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" >
    <meta name="description" content="Make an add admin page" >
    <meta name="keywords" content="HTML, PHP, add" >
    <meta name="author" content="Akash, Aaron" >
    <title>Add Admin Page</title>
    <link href="styles/enquire.css" rel="stylesheet" >
	<link href="styles/admin.css" rel="stylesheet" >
</head>

<body>
<?php
   include_once ("includes/header.inc");
   include_once ("includes/nav2.inc");
?>

<?php
    function sanitise_input($data){
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
   }
   
   if (isset($_POST["uname"])){
	    $uname = $_POST["uname"];
		$uname = sanitise_input($uname);
   } else {
		header("location: manager-admin.php");
		exit();
   }
   
   if (isset($_POST["pword"])){
	   $pword = $_POST["pword"];
	   $pword = sanitise_input($pword);
   }
   
   require_once ("settings.php");
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
    if (!$conn){
		  echo"<p>Database connection failure.</p>";
	} else {
		$sql_table = "table_admin";
		
		$query = "INSERT INTO table_admin (id, Username, Pass) VALUES (NULL, '$uname', '$pword')";
        $result = mysqli_query($conn, $query);
        if($result){
           echo "<p class=\"ok\">Successfully added admin. Please return to the Admin page</p>";
        } else {
           echo "<p class=\"wrong\">Unsuccessfully added admin. Please try again.</p>";
        }
    }
?>

<?php 
   include_once('includes/footer.inc'); 
?>
</body>
</html>