<?
//Initial Database setup. Remove This line once you have customized the setup page and ran it at least once.
include("setup.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP User System</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h2>PHP User System Empty Page</h2>
    </header>
    
    <div id="loginBox">
        <form method="POST">
            <label class="loginLable">User Name:</label> <input name="user_name" type="text"><br>
            <label class="loginLable">Password:</label> <input name="password" type="password">
        </form>
        <h3><a href="register.php">CLick here to create an account</a></h3>
    </div>
    
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
<script>
$(document).ready(function()
{
    
});
</script>
</html>