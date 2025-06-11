<?php

require_once __DIR__ . "/../base/BaseBattleField.php";
require_once "PokemonWarrior.php";  // ou MarvelWarrior.php / StartrekWarrior.php
require_once "Weapon.php";

class BattleField extends BaseBattleField
{
    public static function createMyWarrior()
    {
        $name = $GLOBALS['warriorName'] ?? 'DefaultName'; // sécurité si variable absente

        $warrior = new PokemonWarrior($name);
        $warrior->imageUrl = "assets/img/pokemon.png";

        $weapon = new Weapon(1, 50);
        $weapon->imageUrl = "assets/img/sword.png";

        $warrior->weapon = $weapon;
        $warrior->saveNew();

        return $warrior;
    }

    public static function createOtherWarrior()
    {
        $name = "EnemyWarrior_" . rand(1000, 9999);

        $warrior = new PokemonWarrior($name);
        $warrior->imageUrl = "assets/img/pokemon_enemy.png";

        $weapon = new Weapon(2, 45);
        $weapon->imageUrl = "assets/img/axe.png";

        $warrior->weapon = $weapon;
        $warrior->saveNew();

        return $warrior;
    }
}

