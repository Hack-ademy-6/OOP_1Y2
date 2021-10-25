<?php
#include "Product.php"; #se ejecuta todo menos lo que no encuentra
require "tCordial.php";
require "Product.php"; #fatal error
require "Computer.php";
require "Food.php";
require "HeroesMarvel.php";
require "iSuperheroe.php";
require "JeanGrey.php";
require "Ciclope.php";





#$movil = new Product(600,"iphone 12","","el mejor" );
#$tostadora = new Product(50, "rowenta", "", "tuesta estupenda");
#$movil->show();
#$tostadora->show();

#$pc1 = new Computer(1000, "Huawei", "", "muy eficaz", 16, "1tb");

/* var_dump($movil);
var_dump($tostadora); */

$pizza = new Food(15, "Margarita","img","simple pero buena",["harina", "agua"]);
#$pizza->show();

/* $pc1->show();

$pc2 = new Computer(1000, "Huawei", "", "muy eficaz", 16, "1tb");

var_dump($pc2->getPrecio());

echo Product::$count . "\n";

Product::howManyProducts();
 */


 $jeangrey= new JeanGrey();

 $jeangrey->volar();

 $ciclope= new Ciclope();

 $ciclope->volar();
 $ciclope->desaparecer();

 #$ciclope->saludar();
 $pizza->saludar();