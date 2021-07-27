<?php
require "classes/Character.php";
require "classes/Hero.php";
require "classes/Orc.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>GRRRRRRRR</title>
</head>

<body>
    <h1 class="text-center">GRRRRRRRR - The Ultimate Battle Of The Century Of The Universe Of Gods</h1>
    <?php
    $john = new Hero(2000, 0, "Banana", 250, "StoneShield", 600);
    $joanna = new Orc(500, 0, 0);

    var_dump($john);
    var_dump($joanna);
    ?>
    <div class="container w-50">
        <!-- Hero -->
        <div class="row justify-content-evenly">
            <div class="card col">
                <h2 class="card-title text-end">John Le Héros</h2>
                <p class="card-text">Je m'appelle John. Je suis un héros avec une épee en forme de banane.</p>
                <p class="card-text">
                    Compétences:
                <ul>
                    <li><strong>HP: </strong><?= $john->get_health() ?></li>
                    <li><strong>Rage: </strong><?= $john->get_rage() ?></li>
                    <li><strong>Arme: </strong><?= $john->get_weapon() ?></li>
                    <li><strong>Force: </strong><?= $john->get_weaponDamage() ?></li>
                    <li><strong>Bouclier: </strong><?= $john->get_shield() ?></li>
                    <li><strong>Défense: </strong><?= $john->get_shieldValue() ?></li>
                </ul>
                </p>
            </div>
            <!-- Orc -->
            <div class="card col">
                <h2 class="card-title text-end">Joanna L'Orc</h2>
                <p class="card-text">Moi je m'appelle Joanna. Je suis une femelle Orc pas très sympa.</p>
                <p class="card-text">
                    Compétences:
                <ul>
                    <li><strong>HP: </strong><?= $joanna->get_health() ?></li>
                    <li><strong>Rage: </strong><?= $joanna->get_rage() ?></li>
                    <li><strong>Force: </strong><?= $joanna->getDamage() ?></li>
                </ul>
                </p>
            </div>
        </div>
        <div class="row">
            <p class="text-danger">Attention! Joanna attaque et inflige <?= $joanna->attack($damage) ?> points de dégât!</p>
        </div>
    </div>

</body>

</html>