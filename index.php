<?php
require __DIR__ . '/data/hotel.php';

$vote = $_GET['vote'] ?? '';
$parking = $_GET['parking'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- Header -->
    <?php include __DIR__ . '/template/header.html' ?>

    <main class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance to Center</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($hotels as $hotel) : ?>
                <tr class="<?php
                if($parking){ echo $hotel['parking'] === false ? 'd-none ' : ''; } 
                if($vote){ echo $hotel['vote'] <= 3 ? 'd-none ' : ''; }
                ?>">
                    <td><?= $hotel['name'] ?></td>
                    <td><?= $hotel['description'] ?></td>
                    <td><?= $hotel['parking'] === true ? 'Libero' : 'Occupato'  ?></td>
                    <td><?= $hotel['vote'] ?></td>
                    <td><?= $hotel['distance_to_center'] ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </main>
</body>
</html>
