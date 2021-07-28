<!-- Création de la classe Hero héritant de Character. -->
<!-- Attributs: weapon, weaponDamage, shield, shieldValue. -->

<?php
class Hero extends Character
{
    // Attributes
    /**
     * Hero's variables creation
     * 
     * @var string $weapon
     * @var int $weaponDamage
     * @var string $shield
     * @var int $shieldValue
     */
    private $weapon;
    private $weaponDamage;
    private $shield;
    private $shieldValue;

    //Functions
    /**
     * Get the value of weapon (its name)
     * @return string $weapon
     */
    public function get_weapon(): string
    {
        return  $this->weapon;
    }
    /**
     * Set the value of weapon (its name)
     * @param string
     * @return self
     */
    public function set_weapon(string $weapon): self
    {
        $this->weapon = $weapon;
        return $this;
    }
    /**
     * Get the value of weaponDamage (its power)
     * @return int $weaponDamage
     */
    public function get_weaponDamage(): int
    {
        return  $this->weaponDamage;
    }
    /**
     * Set the value of weaponDamage (its power)
     * @param int
     * @return self
     */
    public function set_weaponDamage(int $weaponDamage): self
    {
        $this->weaponDamage = $weaponDamage;
        return $this;
    }
    /**
     * Get the value of shield (its name)
     * @return string $shield
     */
    public function get_shield(): string
    {
        return  $this->shield;
    }
    /**
     * Set the value of shield (its name)
     * @param string
     * @return self
     */
    public function set_shield(string $shield): self
    {
        $this->shield = $shield;
        return $this;
    }
    /**
     * Get the value of shieldValue (its power)
     * @return int $shieldValue
     */
    public function get_shieldValue(): int
    {
        return  $this->shieldValue;
    }
    /**
     * Set the value of shieldValue (its power)
     * @param int
     * @return self
     */
    public function set_shieldValue(int $shieldValue): self
    {
        $this->shieldValue = $shieldValue;
        return $this;
    }

    /**
     * Hero's constructor with all its values AND those from its parent.
     * 
     * @param int $health
     * @param int $rage
     * @param string $weapon
     * @param int $weaponDamage
     * @param string $shield
     * @param int $shieldValue
     */
    public function __construct(int $health, int $rage, string $weapon, int $weaponDamage, string $shield, int $shieldValue)
    {
        parent::__construct($health, $rage);
        $this->weapon  =  $weapon;
        $this->weaponDamage  =  $weaponDamage;
        $this->shield  =  $shield;
        $this->shieldValue  =  $shieldValue;
    }
    /**
     * Hero damaging function : the armor does not break or decrease.
     * 
     * @param int $damage
     * @return int
     */
    public function is_attacked(int $damage): int
    {
        if ($this->shieldValue < $damage) {
            $this->set_health($this->get_health() - ($damage - $this->shieldValue));
        }
        return $this->get_health();
    }
    /**
     * Rage increasing function: the value is in character.php so we need to call the setter.
     * 
     * @return int
     */
    public function increaseRage(): int
    {
        $this->set_rage($this->get_rage() + 30);
        return $this->get_rage();
    }
}
