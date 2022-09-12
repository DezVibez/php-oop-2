<?php 


 class Product {
    
    public $name;
    public $price;
    public $brand;
    public $type; //per tipo intendiamo la tipologia: cibo, accessori, ecc.

    public function __construct($name, $price, $brand){          
        $this->getProductName($name);
        $this->getProductPrice($price);
        $this->getProductBrand($brand);
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
}
    



$cibo_gatto = new Product("croccantini","John Lasseter", 2006);
$cibo_cane = new Product("Frozen","Chris Buck & Jennifer Lee", 2013);
$cibo_criceto = new Product("Tarzan","Chris Buck & Kevin Lima", 1999);

$movies = [$cars,$frozen,$tarzan];

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

