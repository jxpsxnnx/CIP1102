<?php

    session_start();
?>

<!doctype html>
<html>
<head>

    <title></title>
    <meta charset="utf-8" />

    <style>

        body {

            background-color: #3A6B35;
            color: black;
            font-family: Georgia;

        }

       fieldset {
            border:10px ridge green;
            margin:  auto;
            text-align: left;
            background-color: #CBD18F;
            font-weight: bolder;
			font-family: georgia ;
			font-size: 16px;

        }

        .table1 {
            border:10px ridge green;
            margin:  auto;
            text-align: left;
            background-color: #CBD18F;
            font-weight: bolder;
			font-family: georgia ;
			font-size: 16px;
        }

        legend {

            text-align: center;
            font-size: 1.5em;
            font-weight: bolder;
            color: Black;
            border:10px ridge green;
            background-color: #E3B448;

        }

        h1,tr {

            text-align: center;

        }


        .apple {

            color: red;
            font-weight: bolder;
			font-family: georgia ;
			font-size: 16px;

        }

        .banana {

            color: yellow;
            font-weight: bolder;
			font-family: georgia ;
			font-size: 16px;

        }

        .payment {

            color: green;
            font-weight: bolder;
			font-family: georgia ;
			font-size: 16px;

        }
        button{
        font-family: georgia ;
        color: black;
        background-color: white;
        padding: .5px;
        border-radius: 4px;
        }
        .top:link {
             text-decoration: underline; 
            }
        .top:visited { 
            text-decoration: none; 
        }

    </style>

</head>

<body>

    

    <form action="JAPSON_1D_addToCart.php" method="post">
    <fieldset>
        <legend>Items Available</legend>
        <table class = "table1">

            <tr>

                <th>Item</th>
                <th>Quantity</th>
            
            </tr>

            <tr>
                
                <td class = "apple" >Apples</td>
                <td><input type="number" name="apples" size="5" value=0></td>
            
            </tr>

            <tr>
                
                <td class = "banana">Bananas</td>
                <td><input type="number" name="bananas" size="5" value=0></td>
            
            </tr>
            
            <tr>

                <td><br><input id="submit" type="submit" value="Click to add to cart"></td>
            
            </tr>
    
        </table>
        
        <br><br>

    </form>

    <br>

    <?php
    if (isset($_POST['apples'])) {

        if (is_numeric($_POST['apples'])) {

            $_SESSION['cart']['apples'] = $_POST['apples'];

        } elseif ($_POST['apples'] == "Remove") {

            unset($_SESSION['cart']['apples']);

        }
    }

    if (isset($_POST['bananas'])) {

        if (is_numeric($_POST['bananas'])) {

            $_SESSION['cart']['bananas'] = $_POST['bananas'];

        } elseif ($_POST['bananas'] == "Remove") {

            unset($_SESSION['cart']['bananas']);
        }
    }

    ?>
    <br><br><br><br>
    
    <fieldset style="width:300px">

    <legend>Your Cart</legend>

    <?php

    $total = 0;
    $apples = 0;
    $bananas = 0;
    $applePrice = 0;
    $bananaPrice= 0;

    if (!isset($_SESSION['cart'])) {

        $_SESSION['cart'] = array();

        echo "Your shopping cart is empty\n";

    }


    else {

        echo "<form action=\"JAPSON_1D_addToCart.php\" method=\"post\">\n";
        echo "<table>\n";
        echo "<tr><th>Item</th><th>Quantity</th></th></tr>\n";

        foreach($_SESSION['cart'] as $key => $added) {

            $uc = ucfirst($key);

            echo "<tr><td>$uc</td><td>$added</td>\n";
            echo "<td><input type=\"submit\" name=\"$key\" value=\"Remove\"></td></tr>\n";
            
            if ($key == "Apples" | $key == "apples") {

                $total = $total + $added * 25.75;
                $total = round($total, 2);
                $applePrice = round($added * 25.75, 2);
                $apples = $added;

            } else {

                $total = $total + $added * 15.50;
                $total = round($total, 2);
                $bananaPrice = round($added * 15.50, 2);
                $bananas = $added;

            }

        }

        echo "</table>\n";
        echo "</form>\n";

        echo "Cost of $apples"."<span id='apples'>"." apples"."</span>".": "."<span class ='payment'>"."₱".number_format($applePrice, 2)."</span><br>";
        echo "Cost of $bananas"."<span id='bananas'>"." bananas"."</span>".": "."<span class ='payment'>"."₱".number_format($bananaPrice, 2)."</span><br><br>";

        echo "Total cost before VAT: "."<span class ='payment'>"."₱".number_format($total, 2)."</span><br><br>";

        $total += $total * .12;
        $total = round($total, 2);

        echo "Total cost after VAT: "."<span class ='payment'>"."₱".number_format($total, 2)."</span><br><br>";

    }
    ?>

    <div>

        <form action="JAPSON_1D_addToCart.php" method="post">

            Payment: <input type="text" name="payment">
            <br><br>
            Pay: <input type="submit" name="pay">
            <button><a class = "top" href="#top" style="color: black">Buy Again</a></button>

        </form>

    </div>
    
    <?php

        if (isset($_POST['pay'])) {

            if (is_numeric($_POST['payment'])) {

                if ($_POST['payment'] >= $total) {

                    $change = $_POST['payment'] - $total;
                    $change = round($change, 2);

                    if ($change > 0) {

                        echo "Your change is: "."<span class ='payment'>"."₱".number_format($change, 2)."</span>";
                        echo "<br><br>Thanks for purchasing $apples"."<span id='apples'>"." apples"."</span>"." and $bananas"."<span id='bananas'>"." bananas"."</span>"."!";
                        
                    } else {

                        echo "Thanks for purchasing $apples"."<span id='apples'>"." apples"."</span>"." and $bananas"."<span id='bananas'>"." bananas"."</span>"."!";

                    }

                } else {

                    echo "Insufficient funds...";

                }

            } else {

                echo "Error. Payment should be an acceptable monetary value...";

            }

        }    

    ?>

</body>
</html>