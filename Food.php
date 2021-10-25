<?php

class Food extends Product{
    use tCordial;
   
    public $ingredients = [];

    public function __construct($p,$t,$i,$d, $ingredients){
        
        parent::__construct($p,$t,$i,$d);

        $this->ingredients = $ingredients;
           
           }

    #overrading de los métodos

   public function show(){
        echo "Hola soy el producto pizza $this->title\n";
    } 

    public function getImg(){
        echo $this->img;
    }

    
}