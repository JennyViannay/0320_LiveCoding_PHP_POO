<?php 
class Team {
    private $name;
    private $attack = 20;
    private $life = 100;
    private $newAttack;
   


    public function getNewAttack(){
        return $this->newAttack;
    }

    public function setNewAttack($newAttack){
        $this->newAttack = $newAttack;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }
    
    public function getAttack(){
        return $this->attack;
    }  

    public function getLife(){
        return $this->life;
    }

    public function kick($target) {
        $target->life = $target->life - $this->newAttack;
        if($target->life < 0) {
            return "La team de ".$target->name ." est morte ! :("; 
        }
    }

    public function upLife()
    {
        $this->life = $this->life + 5;
    }
}
