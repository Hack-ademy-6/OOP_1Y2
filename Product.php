<?php

#public, private, protected
abstract class Product {
      public $price;
      public $title;
      protected $img;
      public $description;
      public static $count = 0;
      public static $iva = 20;
 

      public function __construct($p,$t,$i,$d){
         
        $this-> price = $p;
        $this-> title = $t;   
        $this-> img = $i;
        $this-> description = $d;
        self::$count++;
           }

    abstract public function show();

    public static function howManyProducts()
    {
      echo "Se han creado " . self::$count . " productos. \n";

    }

    public function getPrecio(){
        return $this->price+(($this->price*self::$iva)/100);
    }
    
/* 
      private function getPasswordInt(){
          
          return "pa***";
      }

      public function getPassword(){
          return $this->getPasswordInt();
      } */
}

