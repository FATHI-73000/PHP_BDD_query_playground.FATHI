<?php

require_once "Warrior.php";

class PokemonWarrior extends Warrior
{
    
    public int $level;

    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->imageUrl = "";
        $this->level = 1;
    }

    public function getPower(): int
    {
        return $this->level;
    }
}
