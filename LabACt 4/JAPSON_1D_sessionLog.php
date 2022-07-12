
<?php 
    if (isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
        $email = $_COOKIE['email'];
        $pass = $_COOKIE['pass'];

    }
?>
<!doctype html>
<html>
<head>
	<title></title>
	<meta charset ="utf-8" />
	<style>
       table{
    border: 2px ridge #0d1137;
   border-collapse: collapse;
   
   height: 320px;
   width: 410px;
   text-align: center;
   background-color: #e52165;
}

tr, td{
    border: 2px ridge #0d1137;
   border-collapse: collapse;

}

body{
    background-color: #e52165;
    font-family: Georgia;
    font-weight: bolder;
    color: white;
}

h1{
    border: solid black;
width: 500px;
height: 100px;
font-size: 45px;
background-color: #e52165;
color:darkcyan;

padding-top: 50px;
margin: auto;
}

.label{
    background-color: black;
    color: white;
    
}
label{
    font-size: 20px;
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
<table align ="center">
<legend>Login Form Using Sessions and Cookies with Remember Me</legend>
<form method = "post" action ="validate.php">
<tr>
    <th>Email</th>
    <td><input type ="text" name = "email"></td>
</tr>
<tr>
    <th>Password</th>
    <td><input type ="password" name = "pass"></td>
</tr>
<tr>
    <td colspan ="2" align = "center"><input type = "checkbox" name = "remember" value = "1">
<label for ="remember">Remember Me</label></td>
</tr>
<tr>
    <td colspan = "2"><input type ="submit" value ="Login" name = "login"></td>
</tr>
    </form>
</table>
</fieldset>
</body>
</html>