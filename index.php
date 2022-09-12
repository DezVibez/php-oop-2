<?php 


 class Product {
    
    public $name;
    public $price;
    public $brand;
    public $type; //per tipo intendiamo la tipologia: cibo, accessori, ecc.
    public $quantità;

    public function __construct($name, $price, $brand, $type){          
        $this->getProductName($name);
        $this->getProductPrice($price);
        $this->getProductBrand($brand);
        $this->getProductQuantità($quantità);
    }

    public function getProductName($name){
        return $this->$name;
    }

    public function getProductPrice($price){
        return $this->$price;
    }

    public function getProductBrand($brand){
        return $this->$brand;
    }

    public function getProductPrice($type){
        return $this->$type;
    }

    public function getProductQuantità($quantità){
        return $this->$quantità;
    }
}
    

$cibo_gatto = new Product("Crocchette Salmone", 21.75 , "Advance", "alimentazione");
$cibo_cane = new Product("Riso Cane Adulto","Chris Buck & Jennifer Lee", "alimentazione");
$cibo_criceto = new Product("Mangime Conigli ","Chris Buck & Kevin Lima", "alimentazione");



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
    
<h1>Ciaone</h1>


</body>
</html>

