<?php

class Ciclope extends HeroesMarvel implements iSuperheroe{
  use tCordial;
    public function volar(){
        echo "Vuelo saltando\n";
    }

    public function desaparecer(){
        echo "Desaparezco entre rayos que te ciegan\n";
    }

    public function saludar(){
        echo "Hola soy Ciclope\n";
    }
}