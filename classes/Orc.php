<!-- Création de la classe Orc héritant de Character. -->
<!-- Attributs: damage -->

<?php
class Orc extends Character {
    // Attributes
    /**
     * Create a variable to store inflicted damage.
     * 
     * @var int $damage
     */
    private $damage;

    //Functions
    /**
     * Set the orc attack
     * 
     * @param int
     * @return self
     */
    public function attack() {
        rand(600, 800);
        return $this;
    }
    /**
     * Get the value of damage
     * 
     * @return int
     */ 
    public function getDamage(): int {
        return $this->damage;
    }
    /**
     * Set the value of damage
     * 
     *@param int
     * @return  self
     */ 
    public function setDamage(int $damage): self {
        $this->damage = $damage;
        return $this;
    }
    public function __construct($health, $rage, $damage) {
        parent::__construct($health, $rage);
        $this->damage = $damage;
    }
}