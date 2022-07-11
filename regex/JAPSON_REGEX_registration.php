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
            font-size: 25px;
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
            <legend>Registration</legend>
     <table align="center">
<form action="Registration.php" method="post">
<tr>
    <td class="label"><label for="uname">Username:</label></td>
    
<td>

<input type="text" placeholder="Enter Username" name="username" required>

</tr>
</td>

<br>

<tr>
    <td class="label"><label for="psw">Password:</label></td>
<td>

<input type="password" placeholder="Enter Password" name="psw" required>

</tr>
</td>

<br>

<tr>
    <td class="label"><label for="firstname">Name:</label></td>
<td>
    
<input type="text", name="firstname" placeholder="LN, FN" required>

</tr>
</td>

<br>

<tr>       
    <td class="label"><label for="phone">Cell Number:</label></td> 
<td>

<input type="tel" id="phone" placeholder="Contact Number" name="phone" required>

</td>
</tr>

<tr>
    <td colspan="2">
            
    <input type="submit" name="submit" value="Submit" class="submit">
    <input type="reset" name="reset" value="Clear" class="submit">

</td>
</tr>

</form>
</fieldset>
</table>
</body>
    


  