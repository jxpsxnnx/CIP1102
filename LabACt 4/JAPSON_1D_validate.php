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
        <legend>Validation</legend>
     <?php
    //validate.php
    //improve the program by adding necessary comments for each significant codes.
    $myemail = "marygraceventura1025@gmail.com";
    $mypass = "12345";
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        if ($email == $myemail AND $pass == $mypass) {
            //statement if true
            //get the value of remember
            if (isset($_POST['remember'])) {
                //create a cookie named email/password set to 60 seconds of 60 60 minutes in 7 days
                setcookie('email', $email, time()+ 60 * 60 * 7);
                setcookie('pass', $pass, time()+ 60 * 60 * 7);
            } //please check the cookie created in the URL (chrome://settings/cookies/detail?site=localhost&search=cookies)
            session_start();
            $_SESSION['email'] = $email;
            header("location:welcome.php");
       
        }
        if(empty($email)AND empty($pass)){
            echo "Please enter a username and password to login.<br/>";
            echo "<a href = 'sessionlogin.php'> Click Here </a> to login again";
        }
            if (preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)){
                echo "$email is a Valid Email Address. <br/><br/>";
            }
            else{
                echo "$email is not a Valid Email Address. <br/><br/>";
                echo "<a href = 'sessionlogin.php'> Click Here </a> to login again <br/><br/>";
            }
        
           
        
        if (preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/", $pass)){
                echo "$pass is Valid Password. <br/><br/>";
                echo "<a href = 'welcome.php'> Click Here </a> to continue";
        }

                else{
                    echo "$pass is not a Valid Email Address. <br/><br/>";
                echo "<a href = 'sessionlogin.php'> Click Here </a> to login again <br/><br/>";

                }
            }      
            
                  
            
            

        
 

?>
</fieldset>

</body>
</html>