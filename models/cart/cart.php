<?php 

class Cart {

private $products = [];

public function getProducts(){
 return $this->product;
}

public function getTotal()

{ 
    $total = 0;
    foreach($this->products as $product){
        $total += $product->getPrice();
    }
    return $total;
}

public function addProduct($product)

{ 
   if(!($product instanceof Product ) 
   throw new Exception ("$product must be instance of Prouduct");
   $this->products[] = $product;
}


}






?>