<!-- Création d'un script de combat entre un Orc et un Héros -->
<!-- Principe: L'Orc attaque le Héros de façon répétée, faisant augmenter la Rage du Héros. -->
<!-- Quand la Rage du Héros atteint un certain seuil, il défonce l'Orc. -->

<?php
/**
 * General Class: Character - Set Health & Rage
 * @var int
 * @var int
 */

class Character {
    // Attributes
    private $health;
    private $rage;
    
    // Functions
    /**
     * Get the value of health
     * @return int
     */
    public function get_health(): int {
        return $this->health;
    }
    /**
     * Set the value of health
     * @param int $health
     * @return self
     */
    public function set_health(int $health): self {
        $this->health = $health;
        return $this;
    }
        /**
     * Get the value of rage
     * @return int
     */
    public function get_rage(): int {
        return $this->rage;
    }
      /**
     * Set the value of rage
     * @param int $rage
     * @return self
     */
    public function set_rage(int $rage): self {
        $this->rage = $rage;
        return $this;
    }
    /**
     * Character constructor
     * Set the values of health and rage.
     * 
     * @param int $health
     * @param int $rage
     */
    public function __construct(int $health, int $rage) {
        $this->health = $health;
        $this->rage = $rage;
    }
}