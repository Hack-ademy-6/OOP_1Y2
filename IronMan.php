<?php
require "tCordial.php";

//IRON MAN

//extremidades superiores
 #atacar
 #defender


  //extremidad superior derecha
    #brazo
    #motosierra


 //extremidad superior izquierda
    #katana
    #bazuka

//extremidades inferiores
  #volar
  #avanzar

  //piernas
  //tanque
  //cohete

abstract class ExtremidadesSuperiores{
    abstract public function atacar();
    abstract public function defender();
}

abstract class ExtremidadesInferiores{
    abstract public function volar();
    abstract public function avanzar();
}


abstract class ExtremidadSuperiorDerecha extends ExtremidadesSuperiores{
    abstract public function atacar();
    abstract public function defender();
}

abstract class ExtremidadSuperiorIzquierda extends ExtremidadesSuperiores{
    abstract public function atacar();
    abstract public function defender();
}


class Brazo extends ExtremidadSuperiorDerecha{
    public function atacar(){
        echo "Te pego un puñetazo\n";
    }

    public function defender(){
        echo "Construyo un campo de fuerza\n";
    }
}


class Motosierra extends ExtremidadSuperiorDerecha{
    public function atacar(){
        echo "Te corto en tiritas\n";
    }

    public function defender(){
        echo "Te bloqueo y te corto en dos tu golpe\n";
    }
}


class Katana extends ExtremidadSuperiorIzquierda{
    public function atacar(){
        echo "Te corto con elegancia\n";
    }

    public function defender(){
        echo "Te parto en 3\n";
    }
}


class Bazuka extends ExtremidadSuperiorIzquierda{
    public function atacar(){
        echo "Te lanzo un misil\n";
    }

    public function defender(){
        echo "Te bloqueo con mi misil\n";
    }
}


class Piernas extends ExtremidadesInferiores{
    public function volar(){
        echo "Doy un salto\n";
    }

    public function avanzar(){
        echo "Corro hacia ti\n";
    }
}


class Tanque extends  ExtremidadesInferiores{
    public function volar(){
        echo "Doy vueltas y despego\n";
    }

    public function avanzar(){
        echo "Avanzo arrastrandome hacia ti\n";
    }
}


class Cohete extends  ExtremidadesInferiores{
    public function volar(){
        echo "Salgo despedido\n";
    }

    public function avanzar(){
        echo "Te difumino de la faz de la tierra\n";
    }
}


class IronMan{
    use tCordial;
    public $esd;
    public $esi;
    public $ei;

    public function __construct(ExtremidadSuperiorDerecha $esd,ExtremidadSuperiorIzquierda $esi,ExtremidadesInferiores $ei){
      $this->esd = $esd;
      $this->esi = $esi;
      $this->ei = $ei;
    }

    public function muevete(){
        $this->ei->avanzar();
    }

    public function destruccion(){
        $this->esi->atacar();
        $this->esd->atacar();
    }

    public function vuelo(){
        $this->ei->volar();
      
    }
    
    public function proteccion(){
        $this->esi->defender();
        $this->esd->defender();
    }
   
}


$miIronMan = new IronMan(new Brazo(),new Bazuka(),new Piernas());
$miIronMan->proteccion();
$miIronMan2 = new IronMan(new Motosierra(),new Katana(),new Cohete());
$miIronMan2->proteccion();
$miIronMan2->destruccion();
$miIronMan2->saludar();


