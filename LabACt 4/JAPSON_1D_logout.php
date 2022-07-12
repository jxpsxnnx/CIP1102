<!doctype html>
<html>
<head>
	<title></title>
	<meta charset ="utf-8" />
	<style>
        body{
            background-color: #e52165;
    font-family: Georgia;
    font-weight: bolder;
    color: white;
    margin: auto;
        }
        legend{
    border: 4px ridge #0d1137;
    margin:auto;
}

fieldset{
    border: 4px ridge #0d1137;
}
	</style>
</head>
<body>
 	<link rel="stylesheet" type="text/css" href="" />
    <fieldset>
        <legend>Logout</legend>
    <div align ="center">
<?php 
 session_start();
 session_destroy();
 if(isset($_COOKIE['email']) AND isset($_COOKIE['pass'])){
    $email = $_COOKIE['email'];
    $pass = $_COOKIE['pass'];
    setcookie('email',$email,time() - 1);
    setcookie('pass',$pass,time() - 1);
 }
 echo "You have sucessfully logout. <br>";
 echo "Click here <a href ='sessionlogin.php'>login </a> again";

?>
</div>
</fieldset>
</body>
</html>