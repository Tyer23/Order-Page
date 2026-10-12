<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" >
    <meta name="description" content="Make a log out page" >
    <meta name="keywords" content="HTML, PHP, mysql" >
    <meta name="author" content="Aaron, Akash" >
    <title>Log Out Page</title>
</head>

<body>
<?php 
    require_once('settings.php');
    $conn= @mysqli_connect($host, $user,$pwd,$sql_db);
    if (!$conn){
        echo"<p>Database connection failure.</p>";
   } else {
    session_destroy();
    header('location:login.php');
   }
?>
</body>
</html>
