<?php
require 'data/hotel.php';
var_dump($hotels);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($hotels as $hotel) : ?>
    <ul>
        <li><?= $hotel['name'] ?></li>
        <li><?= $hotel['description'] ?></li>
        <li><?= $hotel['parking'] ?></li>
        <li><?= $hotel['vote'] ?></li>
        <li><?= $hotel['distance_to_center'] ?></li>
    </ul>
    <?php endforeach ?>
</body>
</html>