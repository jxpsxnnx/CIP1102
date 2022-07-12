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
        fieldset{
    border: 4px ridge #0d1137;
}
	</style>
</head>
<body>
 	<link rel="stylesheet" type="text/css" href="" />
     <fieldset>
     <?php
      if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
      }
    //welcome.php
    session_start();          
?>

<div style="text-align: center">
    <?php
        echo "<p>Welcome</p> "."<b>".$_SESSION['email']. "</b>"." to PHP Sessions and Cookies<br>";
        echo "<a href='logout.php'><br/>Logout</a>";
    ?>
</div>
</fieldset>
</body>
</html>