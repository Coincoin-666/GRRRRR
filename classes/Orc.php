<!-- Création de la classe Orc héritant de Character. -->
<!-- Attributs: damage -->

<?php
class Orc extends Character {
    // Attributes
    private $damage;

    //Functions
    /**
     * Get the value of damage
     * @return int
     */ 
    public function getDamage(): int {
        return $this->damage;
    }
    /**
     * Set the value of damage
     *@param int
     * @return  self
     */ 
    public function setDamage(int $damage): self {
        $this->damage = $damage;
        return $this;
    }
    public function attack($damage) {
        $damage = rand(600, 800);
        return $damage;
    }
    public function __construct($health, $rage, $damage) {
        parent::__construct($health, $rage);
        $this->damage = $damage;
        return $health;
        return $rage;
        return $damage; 
    }
}