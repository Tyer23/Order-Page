<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" >
    <meta name="description" content="Make an update status page" >
    <meta name="keywords" content="HTML, PHP, status" >
    <meta name="author" content="Aaron, Akash" >
    <title>Update Status Page</title>
    <link href="styles/enquire.css" rel="stylesheet" >
</head>

<body>
<?php
       if(!isset($_SERVER['HTTP_REFERER'])){
		  header("location:login.php");		
		  exit();
	   }
	?>
<?php include_once('includes/header.inc'); 
      include_once('includes/nav2.inc');
?> 


<h2>Update Status Form</h2>
        <form method="post" action="update-result.php" >
        <p><label for="orderid">Order Number:</label>
              <input type="text" name="orderid" id="orderid" ></p>
        <p><label for="orderstatus">Order Status that you want to Update:</label>
              <select name="orderstatus" value="orderstatus" >
                 <option value="">PLEASE SELECT</option>
                 <option value="PENDING">PENDING</option>
                 <option value="FULFILLED">FULFILLED</option>
                 <option value="PAID">PAID</option>
                 <option value="ARCHIVED">ARCHIVED</option>
              </select>
        </p>
	   <p><input type="submit" value="Submit" ></p>
	   </form>
<?php 
include_once('includes/footer.inc'); 
?>
</body>
</html>