<?php

class   Formule1
{
    private int $speed = 0; //propriété privée speed qui est à 0 par défaut

    public function drive()
    { //méthode public drive() qui affiche...
        return ("Vroom vroom à " . $this->speed . "km/h");
    }

    public function shiftGear()
    {
        $this->setSpeed($this->getSpeed() + 25);
    }

    /**
     * Get the value of speed
     */ 
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set the value of speed
     *
     * @return  self
     */ 
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }
}

    $myFormule1 = new Formule1(); //variable $myFormule1 contient l'instance de la classe Formule1
    echo $myFormule1->drive() . '<br>';  //utilisation de la méthode drive() de l'instance de la classe Formule
    $myFormule1->shiftGear();
    echo $myFormule1->drive() . '<br>';

?>
