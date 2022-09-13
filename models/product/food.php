<?php

require_once __DIR__. "/product.php";

class Food extends Product{
    
    private $quantity;
    private $ingredients;
   

    public function __construct($name,$brand,$price,$animal_types,$quantity,$ingredients){
        
        parent::__construct($name,$brand,$price,$animal_types);
        $this->setQuantity($quantity);
        $this->setIngredients($ingredients);
    }

    public function getQuantity(){
        return $this->$quantity;
    }

    public function setQuantity($quantity){
        $this->$quantity = $quantity;
    }

    public function getIngredients(){
        return $this->$ingredients;
    }

    public function setIngredients($ingredients){
        $this->$ingredients = $ingredients;
    }
    

}

?>