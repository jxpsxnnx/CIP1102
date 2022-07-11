<!doctype html>
<html>
<head>
	<title></title>
	<meta charset ="utf-8" />
	<style>
        body{
            background-color: #F6F0BC;
        }
    table{
    border: 5px ridge #D4CAA3;
   border-collapse: collapse;  
   height: 320px;
   width: 410px;
   text-align: center;
   background-color: #F6F0BC;
    }
        legend{
            border: 4px #31906E ridge;
            margin: auto;
            font-family: "georgia";
            font-size: 16px;
            background-color: #FFFDD0;
        }
        fieldset{
            background-color: #FFFDD0;
            border: 6px #31906E ridge;
        }
        

        tr, td{
        border: 4px ridge #D4CAA3;
        font-family: "georgia";
        font-size: 16px;
   

}
       
	</style>
</head>
<body>
 	<link rel="stylesheet" type="text/css" href="" />
     
        <fieldset>
            <legend>Congratulations, you have successfully registered. Please keep the following information below.</legend>
     <table align="center">
    <tr>
    <td>
 
<?php
$UserName = $_POST['username'];

echo "Username: ";
    if (preg_match("/^(USR)_([0-9]{2}[a-d]{2})$/", $UserName))
            
        echo " $UserName<br/><br/>";
    else
        echo "<font color=red> Invalid Username. </font><br/><br/>";
     
?>

    </td>
    </tr>
    <tr>
        <td>
            <?php
            $PassWord = $_POST['psw'];
            echo "Password: ";
            if (preg_match("/^[A-Za-z_0-99]+$/" , $PassWord))
            
                echo "$PassWord <br/><br/>";
                else 
                echo "<font color=red> Weak Password. </font><br/><br/>";
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            $name = $_POST['firstname'];
            echo "Name: ";
            if (preg_match("/[^A-Za-z]/" , $name))
                echo "$name <br/><br/>";
                else 
                echo "<font color=red> Invalid Name. </font><br/><br/>";

            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            $cellNum = $_POST['phone'];
            echo "Cellphone Number: ";
            if (preg_match("/((\+[0-9]{2})|0)[.\- ]?9[0-9]{2}[.\- ]?[0-9]{3}[.\- ]?[0-9]{4}/" , $cellNum))
            echo "$cellNum <br/><br/>";
                else 
                echo "<font color=red> Invalid format. </font><br/><br/>";

            ?>
            
        </td>
    </tr>
    
    
    </fieldset>
    
    
</table>
    <button align="center" onclick="history.back()">Go Back</button>

</body>
</html>