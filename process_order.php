<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8" >
   <meta name="description" content="Payment page" >
   <meta name="keywords" content="PHP, html, payment" >
   <meta name="author" content="Quoc Co Luc" >
   <title>Process Order</title>
</head>

<body>
<?php 
    function sanitise_input($data){
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
   }

	if (isset($_POST["fname"])){
	    $fname = $_POST["fname"];
		$fname = sanitise_input($fname);
   } else {
		header("location: enquire.php");
		exit();
   }
   
   if (isset($_POST["lname"])){
	    $lname = $_POST["lname"];
		$lname = sanitise_input($lname);
   }
   
   if (isset($_POST["contactemail"])){
	    $contactemail = $_POST["contactemail"];
		$contactemail = sanitise_input($contactemail);
   }
   
   if (isset($_POST["str_addr"])){
	    $str_addr = $_POST["str_addr"];
		$str_addr = sanitise_input($str_addr);
   }
   
  if (isset($_POST["suburb"])){
	  $suburb = $_POST["suburb"];
	  $suburb = sanitise_input($suburb);
  }
   
   if (isset ($_POST["state"])){
	    $state = $_POST["state"];
		$state = sanitise_input($state);
   }
   
  if (isset($_POST["postcode"])){
	    $postcode = $_POST["postcode"];
		$postcode = sanitise_input($postcode);
   }
   
   if (isset($_POST["phonenumber"])){
	    $phonenumber = $_POST["phonenumber"];
		$phonenumber = sanitise_input($phonenumber);
   }
   
   if (isset($_POST["contact"])){
	   $contact = $_POST["contact"];
	   $contact = sanitise_input($contact);
   }
   
   
   if (isset($_POST["type"])){
        $type = $_POST["type"];
        $type = sanitise_input($type);
   }		
 
   if (isset($_POST["menu"])){
	   $menu = $_POST["menu"];
	   $menu = sanitise_input($menu);
   }
	
   if (isset($_POST["qty"])){
	    $qty = $_POST["qty"];
		$qty = sanitise_input($qty);
   } 
   
   
   if (isset ($_POST["features"])){
	   $features = $_POST["features"];
	   $features = sanitise_input($features);
   }
  
   
   if (isset ($_POST["delivery"])){
	   $delivery = $_POST["delivery"];
	   $delivery = sanitise_input($delivery);
   }
  
  if (isset($_POST["CCtype"])){
	  $CCtype = $_POST["CCtype"];
	  $CCtype = sanitise_input($CCtype);
  }
  
  if (isset($_POST["CCname"])){
	  $CCname = $_POST["CCname"];
	  $CCname = sanitise_input($CCname);
  }
  
  if (isset($_POST["CCnumber"])){
	  $CCnumber = $_POST["CCnumber"];
	  $CCnumber = sanitise_input($CCnumber);
  }
  
  if (isset($_POST["months"])){
	  $months = $_POST["months"];
	  $months = sanitise_input($months);
  }
  
  if (isset($_POST["years"])){
	  $years = $_POST["years"];
	  $years = sanitise_input($years);
  }
  
  if (isset($_POST["cvv"])){
	  $cvv = $_POST["cvv"];
	  $cvv = sanitise_input($cvv);
  }
  
  if (isset($_POST["Comments"])){
	  $Comments = $_POST["Comments"];
	  $Comments = sanitise_input($Comments);
  }
   
   $errMsg = "";
   if ($fname==""){
	   $errMsg .= "<p>You must enter your first name.</p>";
   } else if (!preg_match("/^[a-zA-Z\s]{0,25}$/", $fname)){
	   $errMsg .= "<p>Only alpha letters with a maximum of 25 characters allowed in your first name.</p>";
   }
   
   if ($lname==""){
	   $errMsg .= "<p>You must enter your last name.</p>";
   } else if (!preg_match("/^[a-zA-Z\s]{0,25}$/", $lname)){
	   $errMsg .= "<p>Only alpha letters with a maximum of 25 characters allowed in your first name.</p>";
   }
   
   if ($contactemail == "" ){
        $errMsg .= "<p>You must enter your email sddress.</p>";
   } else if (!filter_var($contactemail, FILTER_VALIDATE_EMAIL)) {
        $errMsg .= "<p>You must enter your valid email format.</p>";
   }
   
   if ($str_addr==""){
	   $errMsg .= "<p>You must enter your street address.</p>";
   } else if (!preg_match("/^[a-zA-Z0-9 ]{1,40}$/", $str_addr)){
	   $errMsg .= "<p>Only alpha letters, and numbers with a maximum of 40 characters allowed in your street address.</p>";
   }
   
   if ($suburb==""){
	   $errMsg .= "<p>You must enter your suburb.</p>";
   } else if (!preg_match("/^[a-zA-Z\s]{0,20}$/", $suburb)){
	   $errMsg .= "<p>Only alpha letters with a maximum of 20 characters allowed in your suburb.</p>";
   }
   
   if ($state == ""){
	   $errMsg .= "<p>You must select your state.</p>";
   }
   
   if ($postcode==""){
	   $errMsg .= "<p>You must enter your postcode.</p>";
   } else if (!preg_match("/^\d{4}$/", $postcode)){
	   $errMsg .= "<p>Only a 4-digit number allowed in your postcode.</p>";
   }
   
   if ($phonenumber==""){
	   $errMsg .= "<p>You must enter your phone number.</p>";
   } else if (!preg_match("/^[0-9]{10}$/", $phonenumber)){
	   $errMsg .= "<p>Only a 10-digit number allowed in your phone number.</p>";
   }
   
   if ($contact == ""){
	   $errMsg .= "<p>You must choose your preferred contact.</p>";
   } 
   
   if ($type == ""){
	   $errMsg .= "<p>You must choose your type for your menu.</p>";
   }
  
   if ($menu == ""){
	   $errMsg .= "<p>You must select your menu.</p>";
   } else if ($menu == "Pepperoni Pizza"){
	   $price = 12.45;
       $order_cost = $price * $qty;
   } else if ($menu == "Bruschetta"){
       $price = 18.50;
       $order_cost = $price * $qty;
   } else if ($menu == "Lasagne"){
       $price = 19.00;
       $order_cost = $price * $qty;
   } else if ($menu == "Frijoles Charros"){
       $price = 16.15;
       $order_cost = $price * $qty;
   } else if ($menu == "Quesadilla"){
       $price = 21.30;
       $order_cost = $price * $qty;
   } else if ($menu == "Huevos Rancheros"){
       $price = 18.70;
       $order_cost = $price * $qty;
   } else if ($menu == "Hummus"){
       $price = 23.00;
       $order_cost = $price * $qty;
   } else if ($menu == "Egyptian Rice"){
       $price = 21.00;
       $order_cost = $price * $qty;
   } else if ($menu == "Chicken Shawarma"){
       $price = 30.00;
       $order_cost = $price * $qty;
   }
   
   if ($qty==""){
	   $errMsg .= "<p>You must enter your quantity.</p>";
   } else if (!preg_match("/^\d{1}$/", $qty)){
	   $errMsg .= "<p>Only a 1-digit number allowed in your quantity.</p>";
   } else if (!is_numeric($qty)){
	   $errMsg .= "<p>You must enter a numeric variable.</p>";
   }
   
   if ($features == ""){
	   $errMsg .= "<p>You must choose the feature for your menu.</p>";
   }
   
   if ($delivery == ""){
	   $errMsg .= "<p>You must choose the delivery option for your menu.</p>";
   } 
   
   if ($CCname==""){
	   $errMsg .= "<p>You must enter your credit card name.</p>";
   } else if (!preg_match("/^[a-zA-Z\s]{0,25}$/", $CCname)){
	   $errMsg .= "<p>Only alpha letters with a maximum of 25 characters allowed in your credit card name.</p>";
   }
   
   if ($CCnumber==""){
	   $errMsg .= "<p>You must enter your credit card number.</p>";
   } else if (!preg_match("/^[0-9]{16}$/", $CCnumber)){
	   $errMsg .= "<p>Only a 16-digit number allowed in your credit card number.</p>";
   }
   
   if ($months == ""){
	   $errMsg .= "<p>You must select your expiry month of your credit card.</p>";
   }
   
   if ($years == ""){
	   $errMsg .= "<p>You must select your expiry year of your credit card.</p>";
   }
   
   if ($cvv==""){
	   $errMsg .= "<p>You must entre your CVV.</p>";
   } else if (!preg_match("/^[0-9]{3}$/", $cvv)){
	   $errMsg .= "<p>Only a 3-digit number allowed in your CVV.</p>";
   }
   
   $order_time = date('m-d-Y H:i:s');
   if (isset($_POST["order_time"])){
	   $order_time = $_POST["order_time"];
   }
   
   $order_status = "PENDING";
   if (isset($_POST["order_status"])){
	   $order_status = $_POST["order_status"];
   }
   
   session_start();
   $_SESSION["errMsg"] = $errMsg;
   $_SESSION["fname"] = $_POST["fname"];
   $_SESSION["lname"] = $_POST["lname"];
   $_SESSION["contactemail"] = $_POST["contactemail"];
   $_SESSION["str_addr"] = $_POST["str_addr"];
   $_SESSION["suburb"] = $_POST["suburb"];
   $_SESSION["state"] = $_POST["state"];
   $_SESSION["postcode"] = $_POST["postcode"];
   $_SESSION["phonenumber"] = $_POST["phonenumber"];
   $_SESSION["contact"] = $_POST["contact"];
   $_SESSION["type"] = $_POST["type"];
   $_SESSION["menu"] = $_POST["menu"];
   $_SESSION["qty"] = $_POST["qty"];
   $_SESSION["features"] = $_POST["features"];
   $_SESSION["order_cost"] = $order_cost;
   $_SESSION["delivery"] = $_POST["delivery"];
   $_SESSION["CCtype"] = $_POST["CCtype"];
   $_SESSION["CCname"] = $_POST["CCname"];
   $_SESSION["CCnumber"] = $_POST["CCnumber"];
   $_SESSION["months"] = $_POST["months"];
   $_SESSION["years"] = $_POST["years"];
   $_SESSION["cvv"] = $_POST["cvv"];
   $_SESSION["order_time"] = $_POST["order_time"];
   $_SESSION["order_status"] = $_POST["order_status"];
   
   require_once ("settings.php");
   $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
   
   if ($errMsg != ""){
	   header("location:fix_order.php");
	   exit();
   } 
   
   if (!$conn){
		  echo"<p>Database connection failure.</p>";
	 } else {
	    $sql_table="orders";
	    
		$query = "INSERT INTO orders VALUES
				    (NULL, '$order_time', '$fname', '$lname', '$contactemail', '$str_addr', '$suburb', '$state', '$postcode', '$phonenumber', '$contact', '$type', '$menu', '$qty', '$order_cost', '$features', '$order_status', '$delivery', '$CCtype', '$CCname', '$CCnumber', '$months', '$years', '$cvv')";
	 
	 
	    $result = mysqli_query($conn, $query);
           if (!$result){
       	     echo"<p class=\"wrong\">Something is wrong with ", $query, "</p>";
		   } else {
			 echo "<p class=\"ok\">Successfully added New Order record</p>";
	         header("location:receipt.php");
	       }
				   
    mysqli_close($conn);
				  
    exit();
	 }
   
?>
</body>
</html>