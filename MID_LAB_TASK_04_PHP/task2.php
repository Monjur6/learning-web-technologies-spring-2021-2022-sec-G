<?php
$vat=15;
$price="";
$vprice=0;
if(isset($_POST["calcBtn"]))
{
    $price= $_POST["price"];
    $vprice=($price/100)*$vat;
}
?>
<!doctype html>
<html>
    <head>
        <title>Task 2</title>
        <meta charset="utf-8">
        <style>
            label{
                display: block;
            }
        </style>
    </head>
    <body>
        <h2>Vat of a price:<?=$vprice?></h2>
        <form action="" method="post">
            <label for="price">price:
                <input type="text" name="price" value="<?=$price?>">
            </label>
            <button name="calcBtn" type="submit">Calculate</button>
        </form>
    </body>
</html>