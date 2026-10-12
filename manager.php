<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" >
    <meta name="description" content="Make a manager page" >
    <meta name="keywords" content="HTML, manager" >
    <meta name="author" content="Quoc Co Luc" >
    <title>Manager Page</title>
    <link href="styles/enquire.css" rel="stylesheet" >
</head>

<body>
    <?php
       include_once "includes/header.inc";
	   include_once "includes/nav2.inc";
    ?>

    <h2>Welcome User, please follow the instructions if you want to:</h2>
    <form method="post" action="display-order.php" >
	<fieldset>
       <legend>Display An Order Based On:</legend>
	   <p><label>Please choose one of these options:</label></p>
       <p><label><input type="radio" name="search" value="All" >All Orders</label></p>
       <p><label><input type="radio" name="search" value="First Name"><label for="fn">Enter Customer's First Name:</label><input type="text" name="fn" id="fn" ></label></p>
	   <p><label><input type="radio" name="search" value="Particular">
	      <label for="parpro">A Particular Product:</label>
		  <select name="parpro" id="parpro" >
		     <option value=''>Please select</option>
             <option value='Pepperoni Pizza'>Pepperoni Pizza</option>
	         <option value='Lasagne'>Lasagne</option>
	         <option value='Bruschetta'>Bruschetta</option>
		     <option value='Frijoles Charros'>Frijoles Charros</option>
		     <option value='Quesadilla'>Quesadilla</option>
		     <option value='Huevos Rancheros'>Huevos Rancheros</option>
		     <option value='Hummus'>Hummus</option>
		     <option value='Egyptian Rice'>Egyptian Rice</option>
		     <option value='Chicken Shawarma'>Chicken Shawarma</option>
          </select>
		  </label>
	   </p>
       <p><label><input type="radio" name="search" value="pending">Pending Orders</label></p>
       <p><label><input type="radio" name="search" value="Sort">Sorting Orders By Total Cost</label></p>
    <p><input type="submit" value="Search" ></p>	   
    </fieldset>
	</form>
    
    <?php
	    include_once "includes/footer.inc";
    ?>
 
</body>
</html>
