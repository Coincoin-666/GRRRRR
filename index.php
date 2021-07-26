<?php
require "classes/Character.php";
require "classes/Hero.php";
require "classes/Orc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRRRRRRRR</title>
</head>

<body>
    <?php
    $john = new Hero(2000, 0, "Banana", 250, "StoneShield", 600);
    $marlène = new Orc(500, 0, 1);

    var_dump($john);
    var_dump($marlène);
    ?>
</body>

</html>