<?php

class Computer extends Product {
 
    public $cpu;
    public $ssd;
 

    public function __construct($p,$t,$i,$d,$cpu,$ssd){
       parent::__construct($p,$t,$i,$d);

       $this->cpu = $cpu;
       $this->ssd = $ssd;
           }

     public function show(){
            echo "Hola soy el producto ordenador $this->title y cuesto $this->price €\n";
        } 
    
}