<?php
require __DIR__ . '/data/hotel.php';
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
    <header>
        <div class="container d-flex justify-content-between align-items-center h-100">
            <h1>Hotels</h1>
            <form action="index.php">
                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" name="parking">
                    <label class="btn btn-outline-primary" for="btncheck1">Parking</label>
                    
                    <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off" name="vote">
                    <label class="btn btn-outline-primary" for="btncheck2">Vote</label>

                    <button class="btn btn-outline-primary">Cerca</button>
                </div>
            </form>
        </div>
    </header>

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
                <tr>
                    <td><?= $hotel['name'] ?></td>
                    <td><?= $hotel['description'] ?></td>
                    <td><?php echo $hotel['parking'] === true ? 'Libero' : 'Occupato'  ?></td>
                    <td><?= $hotel['vote'] ?></td>
                    <td><?= $hotel['distance_to_center'] ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </main>
</body>
</html>
