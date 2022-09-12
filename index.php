<?php 

class User {
    protected $first_name;
    protected $last_name;
    protected $mail;
    protected $password;

    public function __construct($first_name, $last_name, $mail, $password){          
        $this->getUserFirstName($first_name);
        $this->getUserLastName($last_name);
        $this->getUserMail($mail);
    }

    protected function getUserFirstName($first_name){
        return $this->$first_name;
    }
    protected function getUserLastName($last_name){
        return $this->$last_name;
    }
    protected function getUserMail($mail){
        return $this->$mail;
    }
    protected function getUserFirstName($password){
        return $this->$password;
    }
}


class Product {
    
    public $name;
    public $price;
    public $brand;
    public $type; //per tipo intendiamo la tipologia: cibo, accessori, ecc.
    public $quantità;

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

    public function getProductType($type){
        return $this->$type;
    }

    public function getProductQuantità($quantità){
        return $this->$quantità;
    }
}

class Cibo extends Product
{
    public $type; //per tipo intendiamo la tipologia: cibo, accessori, ecc.
    public $quantità;

    public function __construct($name, $price, $brand, $type, $quantità){          
        parent::__construct($name, $price, $brand, $type, $quantità);
    }

    public function getProductType($type){
        return $this->$type;
    }

    public function getProductQuantità($quantità){
        return $this->$quantità;
    }
}

class Accessorio extends Product
{
    public $type; //per tipo intendiamo la tipologia: cibo, accessori, ecc.
    public $quantità;

    public function __construct($name, $price, $brand, $type, $quantità){          
        parent::__construct($name, $price, $brand, $type, $quantità);
    }

    public function getProductType($type){
        return $this->$type;
    }

    public function getProductQuantità($quantità){
        return $this->$quantità;
    }
}
    

//CIBI

$cibo_gatto = new Cibo("Crocchette Salmone", 21.75 , "Advance", "alimentazione", "9kg" );
$cibo_cane = new Cibo("Riso Cane Adulto", 17.99 ,"Taste of Wild","alimentazione", "2kg");
$cibo_criceto = new Cibo("Mangime Conigli", 29.69 , "Versele" ,"alimentazione", "9kg");

$cibi = [$cibo_gatto, $cibo_cane, $cibo_criceto];

//ACCESSORI

$ciotola_cane = new Accessorio("Ciotola Acciaio", 5.00 , "Advance", "accessorio" );
$collare_cane = new Accessorio("Collare per Cani", 17.99 , "Taste of Wild", "accessorio");
$tiragraffi = new Accessorio("Tiragraffi", 8.39 , "North Pole" , "accessorio");

$accessori = [$ciotola_cane, $collare_cane, $tiragraffi];


?>



