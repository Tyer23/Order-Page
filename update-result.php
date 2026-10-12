<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" >
    <meta name="description" content="Make an update result page" >
    <meta name="keywords" content="HTML, PHP, result" >
    <meta name="author" content="Aaron, Akash" >
    <title>Update Status Result Page</title>
	<link href="styles/enquire.css" rel="stylesheet" >
</head>

<body>
<?php
       include_once "includes/header.inc";
	   include_once "includes/nav2.inc";
?>

<?php
 function sanitise_input($data){
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
   }
   
           if(isset($_POST['orderstatus'])){
                $orderstatus = $_POST['orderstatus'];
				$orderstatus = sanitise_input($orderstatus);
           } else {
			   header('location:manager.php');
			   exit():
		   }
		   
		   if(isset($_POST['orderid'])){
			   $orderid = $_POST['orderid'];
			   $orderid = sanitise_input($orderid);
		   }

           require_once ("settings.php");
                $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
                if (!$conn){
                 echo"<p>Database connection failure.</p>";
                } else {
                    $sql_table="orders";
                
                    $query = "UPDATE orders SET Order_status='$orderstatus' WHERE Order_id='$orderid'";  
                    $result = mysqli_query($conn, $query);
                    if (!$result){
                        echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
                    } else {
                        echo "<p class=\"ok\">Successfully updated order status. Please return to the Order page</p>";
                    }
             
                    mysqli_close($conn); 
        }
?>

<?php 

        include_once('includes/footer.inc'); 

?>
</body>
</html>