<?php 

include __DIR__. '/models/credit-card/fra.php';
include __DIR__. '/models/customer/';
include __DIR__. '/models/product/product.php';
include __DIR__. '/models/product/food.php';



$prodotto = new Food("cibo per cani","viskies",5.00,"cane", "3kg","manzo");

var_dump($prodotto);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>
    ciaone
</h1>
    
</body>
</html>

