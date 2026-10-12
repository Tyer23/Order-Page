<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="COS10026 assignment 2">
	<meta name="keywords"    content="COS10026, assignment 2, creating web applications">
	<meta name="author"      content="Prabesh">
    <title>Receipt</title>
    <link href="styles/enquire.css" rel="stylesheet" >
</head>
<body>
        <?php 
	        if(!isset($_SERVER['HTTP_REFERER'])){
		       header("location:enquire.php");		
		       exit();
	        }
	    ?>

        <?php
           include_once("includes/header.inc");
           include_once("includes/nav.inc");
        ?>

        <?php	
		  session_start();
		?>

        <h2>Thank you for coming to our restaurant. Here is your receipt:</h2>
        <fieldset>
           <legend>Your Details:</legend>
           <p>First Name: <?php echo $_SESSION["fname"] ?>, Last Name: <?php echo $_SESSION["lname"] ?></p>
           <p>Email Address: <?php echo $_SESSION["contactemail"] ?>, Phone Number: <?php echo $_SESSION["phonenumber"] ?>, Preferred Contact: <?php echo $_SESSION["contact"] ?></p>
        </fieldset>

        <fieldset>
            <legend>Your Address:</legend>
            <p>Street Address: <?php echo $_SESSION["str_addr"] ?>, Suburb/Town: <?php echo $_SESSION["suburb"] ?></p>
            <p>State: <?php echo $_SESSION["state"] ?>, Postcode: <?php echo $_SESSION["postcode"] ?></p>
        </fieldset>
        
        <fieldset>
            <legend>Your Order Details:</legend>
            <p>Product Type: <?php echo $_SESSION["type"] ?>, Menu: <?php echo $_SESSION["menu"] ?>, Delivery Option: <?php echo $_SESSION["delivery"] ?></p>
            <p>Product Feature: <?php echo $_SESSION["features"] ?>, Quantity: <?php echo $_SESSION["qty"] ?>, Total Cost: <?php echo $_SESSION["order_cost"] ?></p>
            <p>Order Status: <?php echo "Pending" ?>, Order Date: <?php echo date('m-d-Y H:i:s'); ?></p>
        </fieldset>
        
        <fieldset>
            <legend>Your Credit Card Information:</legend>
            <p>Credit Card Type: <?php echo $_SESSION["CCtype"] ?>, Credit Card Name: <?php echo $_SESSION["CCname"] ?>, Credit Card Number: <?php echo $_SESSION["CCnumber"] ?></p>
            <p>Expiry Date: <?php echo $_SESSION["months"] ?> <?php echo $_SESSION["years"] ?>, CVV: <?php echo $_SESSION["cvv"] ?></p>
        </fieldset>

        <?php
           include_once("includes/footer.inc");
        ?>
</body>
</html>