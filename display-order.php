<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" >
    <meta name="description" content="Make a display order page" >
    <meta name="keywords" content="HTML, PHP, display" >
    <meta name="author" content="Quoc Co Luc" >
    <title>Display Order Page</title>
	<link href="styles/enquire.css" rel="stylesheet" >
	<link href="styles/admin.css" rel="stylesheet" >
</head>

<body>
<?php
       include_once "includes/header.inc";
	   include_once "includes/nav2.inc";
?>

<div class="main-content">
    <div class="pkp">
<h2>Here's the result:</h2>

 <?php 
                    if(isset($_SESSION['update'])){
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
  ?>

<?php
   if (isset($_POST["search"])){
         $search = $_POST["search"];
   } else {
        header("location:manager.php");
		exit();
   } 
?>

<table class="bdk">
                    <tr>
                        <th>Order Number</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Type</th>
                        <th>Menu</th>
                        <th>Order Cost</th>
                        <th>Order Time</th>
                        <th>Order Status</th>
                        <th>Actions</th>
                    </tr>

<?php  
    require_once ("settings.php");
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
    if (!$conn){
		  echo"<p>Database connection failure.</p>";
	 } else {
	    $sql_table="orders";
	    
		if($search == "All"){
           $query = "SELECT Order_id, Fname, Lname, Types, Menu, Order_cost, Order_time, Order_status from orders";    
        } else if ($search == "First Name"){
           if (isset($_POST["fn"])){
			   $fn = $_POST["fn"];
		   }
		   $query = "SELECT Order_id, Fname, Lname, Types, Menu, Order_cost, Order_time, Order_status from orders WHERE Fname='$fn'";  
        } else if ($search == "Particular"){
           if (isset($_POST["parpro"])){
			   $parpro = $_POST["parpro"];
		   }
		   $query = "SELECT Order_id, Fname, Lname, Types, Menu, Order_cost, Order_time, Order_status from orders WHERE Menu='$parpro'";
        } else if ($search == "pending"){
           $query = "SELECT Order_id, Fname, Lname, Types, Menu, Order_cost, Order_time, Order_status FROM orders WHERE Order_status='PENDING'";
        } else if($search == "Sort"){
           $query = "SELECT Order_id, Fname, Lname, Types, Menu, Order_cost, Order_time, Order_status FROM orders ORDER BY Order_cost DESC";
        }
		
		$result = mysqli_query($conn, $query);
	    if (!$result){
		   echo "<p>There are no results that are found in the database</p>";
	    } else {
		   $i = mysqli_num_rows($result);
           if($i>0){
               while($row=mysqli_fetch_assoc($result)){
				                $order_id = $row['Order_id'];
                                $fname = $row['Fname'];
                                $lname = $row['Lname'];
                                $type = $row['Types'];
                                $menu = $row['Menu'];
                                $order_cost = $row['Order_cost'];
								$order_time = $row['Order_time'];
                                $order_status = $row['Order_status'];
                                ?>
                                    <tr>
                                        <td><?php echo $order_id; ?>. </td>
                                        <td><?php echo $fname; ?></td>
                                        <td><?php echo $lname; ?></td>
                                        <td><?php echo $type; ?></td>
                                        <td><?php echo $menu; ?></td>
										<td><?php echo $order_cost; ?></td>
                                        <td><?php echo $order_time; ?></td>
										<td><?php echo $order_status; ?></td>
										<td>
                                            <a href="update-status.php?id=<?php echo $order_id; ?>" class="button2">Update Status</a>
                                            <a href="delete-order.php?id=<?php echo $order_id; ?>" class="button2">Delete Order</a>
                                        </td>
                                    </tr>
                                <?php
                               

                            }
                        }
                        else
                        {
                            echo "<tr><td colspan='12' class='error' >There are no orders!!</td></tr>";
                        }
                    }
	 }
                    ?>

	 
                </table>
    </div>
    
</div>

<?php 

        include_once('includes/footer.inc'); 

?>
</body>
</html>