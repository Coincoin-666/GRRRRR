<!-- Création de la classe Hero héritant de Character. -->
<!-- Attributs: weapon, weaponDamage, shield, shieldValue. -->

<?php
class Hero extends Character {
    // Attributes
    private $weapon;
    private $weaponDamage;
    private $shield;
    private $shieldValue;

    //Functions
        /**
     * Get the value of weapon (its name)
     * @return string $weapon
     */
    public function get_weapon(): string {
        return  $this->weapon;
    }
      /**
     * Set the value of weapon (its name)
     * @param string
     * @return self
     */
    public function set_weapon(string $weapon): self {
        $this->weapon = $weapon;
        return $this;
    }
        /**
     * Get the value of weaponDamage (its power)
     * @return int $weaponDamage
     */
    public function get_weaponDamage(): int {
        return  $this->weaponDamage;
    }
      /**
     * Set the value of weaponDamage (its power)
     * @param int
     * @return self
     */
    public function set_weaponDamage(int $weaponDamage): self {
        $this->weaponDamage = $weaponDamage;
        return $this;
    }
        /**
     * Get the value of shield (its name)
     * @return string $shield
     */
    public function get_shield(): string {
        return  $this->shield;
    }
      /**
     * Set the value of shield (its name)
     * @param string
     * @return self
     */
    public function set_shield(string $shield): self {
        $this->shield = $shield;
        return $this;
    }
        /**
     * Get the value of shieldValue (its power)
     * @return int $shieldValue
     */
    public function get_shieldValue(): int {
        return  $this->shieldValue;
    }
      /**
     * Set the value of shieldValue (its power)
     * @param int
     * @return self
     */
    public function set_shieldValue(int $shieldValue): self {
        $this->shieldValue = $shieldValue;
        return $this;
    }
    public function __construct($health, $rage, $weapon, $weaponDamage, $shield, $shieldValue) {
        parent::__construct($health, $rage);
        $this->weapon  =  $weapon;
        $this->weaponDamage  =  $weaponDamage;
        $this->shield  =  $shield;
        $this->shieldValue  =  $shieldValue;
        return $health;
        return $rage;
        return $weapon;
        return $weaponDamage;
        return $shield;
        return $shieldValue;
    }
    /**
     * Create a damage inflicted function.
     * 
     */
    public function is_attacked($health, $shieldValue, $damage, $rage) {
        $health = ($health + $shieldValue) - $damage;
        $rage = $rage + 30;
    }
}