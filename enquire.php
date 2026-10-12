<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Make a product enquiry page" />
    <meta name="keywords" content="HTML, enquire" />
    <meta name="author" content="Quoc Co Luc" />
    <title>A Product Enquiry Page</title>
    <link href="styles/enquire.css" rel="stylesheet" />
  </head>

  <body>
    <?php
       include_once "includes/header.inc";
       include_once "includes/nav.inc";
    ?>

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
          required
        />
    
        <label for="LastName">Last Name</label>
        <input
          type="text"
          pattern="[a-zA-Z\s]{0,25}"
          name="lname"
          id="LastName"
          required
        />
      </p>

      <p>
        <label
          >Email Address<input type="email" name="contactemail" required
        /></label>
      </p>
    </fieldset>
      <br />

      <fieldset>
        <legend>Address</legend>
        <p>
          <label for="StreetAddress">Street Address</label>
          <input
            type="text"
            maxlength="40"
            name="str_addr"
            id="StreetAddress"
            required
          />
          <label for="Suburb/Town">Suburb/Town</label>
          <input
            type="text"
            maxlength="20"
            name="suburb"
            id="Suburb/Town"
            required
          />
        </p>
        <p>
          <label for="state">State</label>
          <select name="state" id="state" required>
            <option value="">Please select</option>
            <option value="VIC">VIC</option>
            <option value="NSW">NSW</option>
            <option value="QLD">QLD</option>
            <option value="NT">NT</option>
            <option value="WA">WA</option>
            <option value="SA">SA</option>
            <option value="TAS">TAS</option>
            <option value="ACT">ACT</option>
          </select>
          <label for="Postcode">Postcode</label>
          <input
            type="text"
            pattern="\d{4}"
            name="postcode"
            id="Postcode"
            required
          />
        </p>
      </fieldset>
      <br />

      <fieldset>
        <legend>Contact</legend>
        <p>
          <label for="PhoneNumber">Phone Number</label>
          <input
            type="text"
            pattern="\d{10}"
            placeholder="0123456789"
            name="phonenumber"
            id="PhoneNumber"
            required
          />
          Preferred Contact
          <label
            ><input
              type="radio"
              name="contact"
              value="Email"
              checked
            />Email</label
          >
          <label><input type="radio" name="contact" value="Post" />Post</label>
          <label
            ><input type="radio" name="contact" value="Phone" />Phone</label
          >
        </p>
      </fieldset>
      <br />

      <fieldset>
        <legend>Product</legend>
        <p>Product Type
        <label><input type="radio" name="type" value="Italian" checked >Italian</label>
        <label><input type="radio" name="type" value="Mexican" >Mexican</label>
        <label><input type="radio" name="type" value="Arabian" >Arabian</label>
        <label for="menu">Menu</label>
          <select name="menu" id="menu" required >
            <option value="">Please select</option>
            <option value="Pepperoni Pizza">Pepperoni Pizza (Italian) - $12.45</option>
            <option value="Bruschetta">Bruschetta (Italian) - $18.50</option>
            <option value="Lasagne">Lasagne (Italian) - $19.00</option>
            <option value="Frijoles Charros">Frijoles Charros (Mexican) - $16.15</option>
            <option value="Quesadilla">Quesadilla (Mexican) - $21.30</option>
            <option value="Huevos Rancheros">Huevos Rancheros (Mexican) - $18.70</option>
            <option value="Hummus">Hummus (Arabian) -$23.00</option>
            <option value="Egyptian Rice">Egyptian Rice (Arabian) - $21.00</option>
            <option value="Chicken Shawarma">Chicken Shawarma (Arabian) - $30.00</option>
          </select>
       </p>

       <p>
          <label for="quantity">Quantity</label>
        <input
          type="text"
          pattern="\d{1}"
          name="qty"
          id="quantity"
          required
        />
          Product Features:
          <label
            ><input
              type="radio"
              name="features"
              value="Vegetarian" checked
            />Vegetarian</label
          >
          <label
            ><input
              type="radio"
              name="features"
              value="Non-vegetarian"
            />Non-vegetarian</label
          >
        </p>
      </fieldset>

      <br />

      <div class="delivery_option">
        <fieldset>
          <legend>Delivery option</legend>
          <p>
            <label
              ><input
                type="radio"
                name="delivery"
                value="Online Delivery(DoorDash)" checked
              />Online Delivery(DoorDash)</label
            >
            <label><input type="radio" name="delivery" value="Online Delivery(UberEat)" >Online Delivery(UberEat)</label>
            <label><input type="radio" name="delivery" value="Online Delivery(MenuLog)" >Online Delivery(MenuLog)</label>
            <label
              ><input
                type="radio"
                name="delivery"
                value ="In-store Pickup"
              />In-store Pickup</label
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
       <option value="Visa">Visa</option>
       <option value="Mastercard">Mastercard</option>
    </select>  
   <label for="CreditCardName">Credit Card Name</label>
     <input type="text" pattern="[a-zA-Z\s]{0,25}" name="CCname" id="CreditCardName" required >
   <label for="CreditCardNum">Credit Card Number</label>
      <input type="text" pattern="\d{16}" name="CCnumber" id="CreditCardNum" required >
  </p>
  <p>
    <label>Expiry Date</label>
    <label for="Months" ></label>
    <select name="months" id="Months" required >
        <option value="">Month</option>
        <option value="Jan">Jan</option>
        <option value="Feb">Feb</option>
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
         <input type="text" name="cvv" id="CVV" pattern="d\{3}" placeholder="000" required >
    </p>
</fieldset>

<br >
      <p>
        <label
          >Any comments<br />
          <textarea
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
