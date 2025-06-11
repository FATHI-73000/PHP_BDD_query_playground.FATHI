<?php

// Chemins corrigés en relatif à ce fichier
require_once __DIR__ . "/PokemonWarrior.php";
require_once __DIR__ . "/MarvelWarrior.php";
require_once __DIR__ . "/StartrekWarrior.php";
require_once __DIR__ . "/Weapon.php";

class BattleField
{
    // Crée ton propre guerrier avec le nom global $warriorName
    public static function createMyWarrior()
    {
        global $warriorName;

        // Instanciation d'un guerrier PokemonWarrior par exemple
        $warrior = new PokemonWarrior($warriorName);

        // Affecter une image au guerrier
        $warrior->imageUrl = "images/my_warrior.png";

        // Création et affectation d'une arme avec image
        $weapon = new Weapon(1, 50);
        $weapon->imageUrl = "images/my_weapon.png";
        $warrior->weapon = $weapon;

        // Sauvegarde du guerrier
        $warrior->saveNew();

        return $warrior;
    }

    // Crée un autre guerrier (ennemi)
    public static function createOtherWarrior()
    {
        // Exemple d'un MarvelWarrior
        $warrior = new MarvelWarrior("Enemy");

        // Affecter une image au guerrier
        $warrior->imageUrl = "images/enemy_warrior.png";

        // Création et affectation d'une arme avec image
        $weapon = new Weapon(2, 40);
        $weapon->imageUrl = "images/enemy_weapon.png";
        $warrior->weapon = $weapon;

        // Sauvegarde du guerrier
        $warrior->saveNew();

        return $warrior;
    }
}
