<?php

require_once "Warrior.php";

class StartrekWarrior extends Warrior
{
    public int $mentalPower;
    public int $superPower;
    public int $level;

    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->mentalPower = 8;
        $this->superPower = 100;
        $this->level = 1;
    }

    public function getPower(): int
    {
        return $this->mentalPower;
    }
}
