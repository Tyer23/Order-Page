<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" >
    <meta name="description" content="Make a log in page" >
    <meta name="keywords" content="HTML, PHP, login" >
    <meta name="author" content="Aaron, Akash" >
    <title>Log In - Food Order System</title>
    <link href="styles/admin.css" rel="stylesheet" >
    <link href="styles/enquire.css" rel="stylesheet" >
</head>

<body>
<?php 
      include_once('includes/header.inc'); 
      include_once('includes/nav.inc');
?>

      <div class="login">
            <h2 class="bs">Login</h2>
            <br><br>
            <br><br>
        <form action="accessmanager.php" method="post" class="bs">
            Username: <br>
            <input type="text" name="username" placeholder="Enter Username"><br><br>

            Password: <br>
            <input type="password" name="password" placeholder="Enter Password"><br><br>

            <input type="submit" name="submit" value="Login" class="button1">
            <br><br>
            </form>

           
        </div>

<?php 
   include_once('includes/footer.inc'); 
?>
</body>
</html>

