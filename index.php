<?php 


 

class Product {
    
    public $name;
    public $director;
    public $year;

    public function __construct($name, $director, $year) {
        $this->getProductName();
        $this->director = $director;
        $this->year = $year;
    }


    
    public function getProductName(){
        return $this->$name;
    }
}

class Animal {
    
    public $name;
    public $director;
    public $year;

    public function __construct($name, $director, $year) {
        $this->getName();
        $this->director = $director;
        $this->year = $year;
    }


    
    public function getName(){
        return $this->$name;
    }
}

class User {
    
    public $name;
    public $director;
    public $year;

    public function __construct($name, $director, $year) {
        $this->name = $name;
        $this->director = $director;
        $this->year = $year;
    }


    
    public function printElements(){
        $quantità = rand(0, 200);
        return ;
    }
}
    



$cars = new Movie("Cars","John Lasseter", 2006);
$frozen = new Movie("Frozen","Chris Buck & Jennifer Lee", 2013);
$tarzan = new Movie("Tarzan","Chris Buck & Kevin Lima", 1999);

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

