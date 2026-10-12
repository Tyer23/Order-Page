<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" >
    <meta name="description" content="Make a manage admin page" >
    <meta name="keywords" content="HTML, admin, manager" >
    <meta name="author" content="Akash, Aaron" >
    <title>Manage Admin Page</title>
    <link href="styles/enquire.css" rel="stylesheet" >
</head>

<body>
    <?php
       include_once "includes/header.inc";
	   include_once "includes/nav2.inc";
    ?>

    <h2>Welcome User, please follow the instructions if you want to:</h2>
    <form method="post" action="add-admin.php" >
	<fieldset>
       <legend>Add an Admin:</legend>
       <p><label for="uname">Enter a Username:</label>
	      <input type="text" name="uname" id="uname" ></p>
       <p><label for="pword">Enter a Password:</label>
	      <input type="text" name="pword" id="pword" ></p>
    <p><input type="submit" value="Add" ></p>	   
    </fieldset>
	</form>

<?php    
	include_once "includes/footer.inc";
?>

</body>
</html>
	