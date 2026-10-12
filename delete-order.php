<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" >
    <meta name="description" content="Make a delete order page" >
    <meta name="keywords" content="HTML, PHP, delete" >
    <meta name="author" content="Aaron, Akash" >
    <title>Delete Order Page</title>
	<link href="styles/enquire.css" rel="stylesheet" >
</head>

<body>
<?php
      if(!isset($_SERVER['HTTP_REFERER'])){
		  header("location:login.php");		
		  exit();
	   }
	?>
    
<?php
       include_once "includes/header.inc";
	   include_once "includes/nav2.inc";
?>

        <h2>Delete Order Form</h2>
        <form method="post" action="delete-result.php" >
        <p><label for="orderid">Order Number:</label>
              <input type="text" name="orderid" id="orderid" ></p>
	    <p><input type="submit" value="Submit" ></p>
	   </form>
<?php 
include_once('includes/footer.inc'); 
?>
</body>
</html>