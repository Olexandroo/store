<?php

class Vasya
{
    public $name;
    public $surname;
    public $toDrink;
    public $isDrunk;
    /** @var  Jena */
    public $jena;

    /**
     * Vasya constructor.
     * @param $name
     * @param $surname
     * @param Jena $objJena
     */

    /** @var  Petrovic*/
    public $petrovic;
    public function __construct($name, $surname, $objJena, $petr)
    {
        $this->petrovic = $petr;
        $this->jena = $objJena;
        $this->name = $name;
        $this->surname = $surname;
        $this->toDrink = rand(1,100);
        $this->isDrunk = 'бухой';
        if($this->jena->crit()||$this->toDrink < 50){
            $this ->isDrunk = 'не пьян';

        }
        if($this->petrovic->vypit() && $this->jena->crit()){
            $this ->isDrunk = 'Васю не найти';
        }
    }

    function present(){
        echo 'Слесарь '.$this->name.' '.$this->surname.', '.$this->isDrunk."\n";
        echo $this->toDrink;
    }
}
class Jena
{
    public $crit;
    public function __construct(){
        $this->crit = rand(1,100);
    }

    public function crit(){
        return $this->crit>50;
}
}
class Petrovic
{
    public $vypit;
    public function __construct(){
        $this->vypit = rand(1,100);
    }
    public function vypit()
    {
        return $this->vypit > 50;
    }
}

$objectJena = new Jena();
$objectPetrovic = new Petrovic();
$objectVasya = new Vasya('Вася','Пупкин',$objectJena,$objectPetrovic);
$objectVasya->present();
//сработает крит на забор зарплаты