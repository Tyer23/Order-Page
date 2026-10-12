<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" >
    <meta name="description" content="Make a product enquiry page" >
    <meta name="keywords" content="HTML, enquire" >
    <meta name="author" content="Quoc Co Luc" >
    <title>Fix Order Page</title>
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
       include_once "includes/header.inc";
       include_once "includes/nav.inc";
    ?>
    
	<fieldset>
	<legend>You have these errors in your form:</legend>
	    <?php 
		   session_start();
		   print_r($_SESSION["errMsg"]);
	    ?>
	</fieldset>
    <h2>Product Enquiry For Customers</h2>

    <p>
      Please enquire below for any catering or dietary requirements and we will
      make sure to get back to you as soon as possible.
    </p>

    <form
      id="enquire"
      method="post"
      action="process_order.php" novalidate="novalidate"
    >
    
    <fieldset>
       <legend>Details</legend>
    <p>
        <label for="FirstName">First Name</label>
        <input
          type="text"
          pattern="[a-zA-Z\s]{0,25}"
          name="fname"
          id="FirstName"
          required value="<?php echo $_SESSION["fname"] ?>"
        >
     
	  
        <label for="LastName">Last Name</label>
        <input
          type="text"
          pattern="[a-zA-Z\s]{0,25}"
          name="lname"
          id="LastName"
          required value="<?php echo $_SESSION["lname"] ?>"
        >
      </p>

      <p>
        <label>Email Address<input type="email" name="contactemail" required value="<?php echo $_SESSION["contactemail"] ?>" ></label>
      </p>
    </fieldset>
      <br >

      <fieldset>
        <legend>Address</legend>
        <p>
          <label for="StreetAddress">Street Address</label>
          <input
            type="text"
            maxlength="40"
            name="str_addr"
            id="StreetAddress"
            required value="<?php echo $_SESSION["str_addr"] ?>" >
          <label for="Suburb/Town">Suburb/Town</label>
          <input
            type="text"
            maxlength="20"
            name="suburb"
            id="Suburb/Town"
            required value="<?php echo $_SESSION["suburb"] ?>"
          >
        </p>
        <p>
          <label for="state">State</label>
          <select name="state" id="state" required>
            <option value="">Please select</option>
            <option value="VIC" <?php echo ($_SESSION["state"] == "VIC") ? "selected" : "" ?> >VIC</option>
            <option value="NSW" <?php echo ($_SESSION["state"] == "NSW") ? "selected" : "" ?>>NSW</option>
            <option value="QLD" <?php echo ($_SESSION["state"] == "QLD") ? "selected" : "" ?>>QLD</option>
            <option value="NT" <?php echo ($_SESSION["state"] == "NT") ? "selected" : "" ?>>NT</option>
            <option value="WA" <?php echo ($_SESSION["state"] == "WA") ? "selected" : "" ?>>WA</option>
            <option value="SA" <?php echo ($_SESSION["state"] == "SA") ? "selected" : "" ?>>SA</option>
            <option value="TAS" <?php echo ($_SESSION["state"] == "TAS") ? "selected" : "" ?>>TAS</option>
            <option value="ACT" <?php echo ($_SESSION["state"] == "ACT") ? "selected" : "" ?> >ACT</option>
          </select>
          <label for="Postcode">Postcode</label>
          <input
            type="text"
            pattern="\d{4}"
            name="postcode"
            id="Postcode" 
            required value="<?php echo $_SESSION["postcode"] ?>"
          >
        </p>
      </fieldset>
      <br >

      <fieldset>
        <legend>Contact</legend>
        <p>
          <label for="PhoneNumber">Phone Number</label>
          <input
            type="text"
            pattern="\d{10}"
            placeholder="0123456789"
            name="phonenumber"
            id="PhoneNumber" value="<?php echo $_SESSION["phonenumber"] ?>"
            required
          >
          Preferred Contact
          <label
            ><input
              type="radio"
              name="contact"
              value="Email"
              <?php echo $_SESSION["contact"] ?>
            >Email</label
          >
          <label><input type="radio" name="contact" value="Post" <?php echo $_SESSION["contact"] ?> >Post</label>
          <label><input type="radio" name="contact" value="Phone" <?php echo $_SESSION["contact"] ?> >Phone</label>
        </p>
      </fieldset>
      <br>

      <fieldset>
        <legend>Product</legend>
        <p>Product Type
        <label><input type="radio" name="type" value="Italian" <?php echo $_SESSION["type"] ?> checked >Italian Dish</label>
        <label><input type="radio" name="type" value="Mexican" <?php echo $_SESSION["type"] ?>>Mexican Dish</label>
        <label><input type="radio" name="type" value="Arabian" <?php echo $_SESSION["type"] ?>>Arabian Dish</label>
        <label for="menu">Menu</label>
          <select name="menu" id="menu">
            <option value="">Please select</option>
            <option value="Pepperoni Pizza" <?php echo ($_SESSION["menu"] == "Pepperoni Pizza") ? "selected" : "" ?> >Pepperoni Pizza (Italian) - $12.45</option>
            <option value="Bruschetta" <?php echo ($_SESSION["menu"] == "Bruschetta") ? "selected" : "" ?>  >Bruschetta (Italian) - $18.50</option>
            <option value="Lasagne" <?php echo ($_SESSION["menu"] == "Lasagne") ? "selected" : "" ?> >Lasagne (Italian) - $19.00</option>
            <option value="Frijoles Charros" <?php echo ($_SESSION["menu"] == "Frijoles Charros") ? "selected" : "" ?> >Frijoles Charros (Mexican) - $16.15</option>
            <option value="Quesadilla" <?php echo ($_SESSION["menu"] == "Quesadilla") ? "selected" : "" ?> >Quesadilla (Mexican) - $21.30</option>
            <option value="Huevos Rancheros" <?php echo ($_SESSION["menu"] == "Huevos Rancheros") ? "selected" : "" ?> >Huevos Rancheros (Mexican) - $18.70</option>
            <option value="Hummus" <?php echo ($_SESSION["menu"] == "Hummus") ? "selected" : "" ?> >Hummus (Arabian) -$23.00</option>
            <option value="Egyptian Rice" <?php echo ($_SESSION["menu"] == "Egyptian Rice") ? "selected" : "" ?> >Egyptian Rice (Arabian) - $21.00</option>
            <option value="Chicken Shawarma" <?php echo ($_SESSION["menu"] == "Chicken Shawarma") ? "selected" : "" ?> >Chicken Shawarma (Arabian) - $30.00</option>
          </select>
       </p>
          
       
        <p>
          <label for="quantity">Quantity</label>
        <input
          type="text"
          pattern="\d{1}"
          name="qty"
          id="quantity"
          required value="<?php echo $_SESSION["qty"] ?>" >
          Product Features:
          <label
            ><input
              type="radio"
              name="features"
              value="Vegetarian" <?php echo $_SESSION["features"] ?> checked 
            >Vegetarian</label
          >
          <label
            ><input
              type="checkbox"
              name="non-veg"
              value="Non-vegetarian" <?php echo $_SESSION["features"] ?>
            >Non-vegetarian</label
          >
        </p>
      </fieldset>

      <br >

      <div class="delivery_option">
        <fieldset>
          <legend>Delivery option</legend>
          <p>
            <label
              ><input
                type="radio"
                name="delivery"
                value="Online Delivery(DoorDash)" <?php echo $_SESSION["type"] ?>
                checked 
              >Online Delivery(DoorDash)</label
            >
            <label><input type="radio" name="delivery" value="Online Delivery(UberEat)" <?php echo $_SESSION["delivery"] ?>>Online Delivery(UberEat)</label>
            <label><input type="radio" name="delivery" value="Onine Delivery(MenuLog)" <?php echo $_SESSION["delivery"] ?> >Online Delivery(MenuLog)</label>
            <label
              ><input
                type="radio"
                name="delivery"
                value="In-store Pickup" <?php echo $_SESSION["delivery"] ?> 
              >In-store Pickup</label
            >
          </p>
        </fieldset>
      </div>

<br >
<fieldset>
<legend>Credit Card Information</legend>
   <p>
   <label for="CreditCardType" >Credit Card Type</label>
   <select name="CCtype" id="CreditCardType">
       <option value="">Please select</option>
       <option value="Visa" >Visa</option>
       <option value="Mastercard" >Mastercard</option>
    </select>  
   <label for="CreditCardName">Credit Card Name</label>
     <input type="text" pattern="[a-zA-Z]{0,25}" name="CCname" id="CreditCardName" required >
   <label for="CreditCardNum">Credit Card Number</label>
      <input type="text" pattern="\d{15,16}" name="CCnumber" id="CreditCardNum" required >
  </p>
  <p>
    <label>Expiry Date</label>
    <label for="Months" ></label>
    <select name="months" id="Months" required >
        <option value="">Month</option>
        <option value="Jan" >Jan</option>
        <option value="Feb" >Feb</option>
        <option value="Mar">Mar</option>
        <option value="Apr">Apr</option>
        <option value="May">May</option>
        <option value="Jun">Jun</option>
        <option value="Jul">Jul</option>
        <option value="Aug">Aug</option>
        <option value="Sept">Sept</option>
        <option value="Oct">Oct</option>
        <option value="Nov">Nov</option>
        <option value="Dec">Dec</option>
     </select>
    <label for="Years" ></label>
        <select name="years" id="Years" required >
        <option value="">Year</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
        <option value="2025">2025</option>
        <option value="2026">2026</option>           
        </select>
     <label for="CVV">CVV</label>
         <input type="text" name="cvv" id="CVV" maxlength="4" placeholder="000" required >
    </p>
</fieldset>

<br >
      <p>
        <label>Any comments<br ><textarea
            name="Comments"
            placeholder="Write your aspect here..."
          ></textarea>
        </label>
      </p>

      <p>
        <input type="submit" value="Submit Enquiry" />
        <input type="reset" value="Reset Enquiry" />
      </p>
    </form>
    
    <?php
       include_once "includes/footer.inc";
    ?>
  
	
  </body>
</html>



