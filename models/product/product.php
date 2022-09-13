<?php

class Product {
    
    protected $id;
    protected $name;
    protected $brand;
    protected $price;
    protected $animal_types;

    public function __construct($name,$brand,$price,$animal_types){
        
        $this->setName($name);
        $this->setBrand($brand);
        $this->setPrice($brand);
        $this->setAnimalTypes($brand);
    }

    public function getId(){
        return $this->$id;
    }

    public function setId($id){
        $this->$id = uniqid();
    }

    public function getName(){
        return $this->$name;
    }

    public function setName($name){
        $this->$name = $name;
    }

    public function getBrand(){
        return $this->$brand;
    }

    public function setBrand($brand){
        $this->$brand = $brand;
    }

    public function getPrice(){
        return $this->$price;
    }

    public function setPrice($price){
        $this->$price = $price;
    }

    public function getAnimalTypes(){
        return $this->$animal_types;
    }

    public function setAnimalTypes($animal_types){
        $this->$animal_types = $animal_types;
    }
}

?>