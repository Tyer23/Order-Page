<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" >
    <meta name="description" content="Make a delete result page" >
    <meta name="keywords" content="HTML, PHP, delete" >
    <meta name="author" content="Aaron, Akash" >
    <title>Delete Result Page</title>
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
		  
           if(isset($_POST['orderid'])){
			   $orderid = $_POST['orderid'];
			   $orderid = sanitise_input($orderid);
		   } else {
			   header('location:manager.php');
			   exit();
		   }
		   
		   require_once ("settings.php");
           $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
           if (!$conn){
                 echo"<p>Database connection failure.</p>";
           } else {
                    $sql_table="orders";
                
                    $query = "SELECT Order_status FROM orders WHERE Order_id='$orderid'"; 
                    $result = mysqli_query($conn, $query);
                    if (!$result){
                        echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
                    } else {
                        $record = mysqli_fetch_assoc($result);
					    if ($record["Order_status"] != "PENDING"){
						    echo "<p class=\"wrong\">Something is wrong with ", $record["Order_status"], "</p>";
					    } else{
						   $delete = "DELETE FROM orders WHERE Order_id='$orderid'";
						   $res = mysqli_query($conn, $delete);
						   if (!$res){
							   echo "<p class=\"wrong\">Something is wrong with ", $res, "</p>";
						} else{
							echo "<p class=\"ok\">Successfully deleted order. Please return to the Order page</p>";
						}
					}
				}
             
                    mysqli_close($conn); 
        }
?>

<?php 

        include_once('includes/footer.inc'); 

?>
</body>
</html>