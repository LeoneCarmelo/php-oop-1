<?php
require_once __DIR__ . '/Database/db.php';
require_once __DIR__ . '/Models/genre.php';
require_once __DIR__ . '/Models/movie.php';

//Generi
$fantasy = new Genre('Fantasy');
$action = new Genre('Action');
$comedy = new Genre('Comedy');
$cult = new Genre('Cult');

//$avatar->setVote(3);

//Films
$movies = [
    $avatar = new Movie('https://www.themoviedb.org/t/p/original/7ABsaBkO1jA2psC8Hy4IDhkID4h.jpg', 'Avatar', "Jake Sully è un marine costretto su una sedia a rotelle che accetta di trasferirsi sul pianeta Pandora in sostituzione del fratello morto.", $fantasy),
    $rambo = new Movie('https://www.themoviedb.org/t/p/original/hCxxOJojCUFyuahDx167glJgp7E.jpg', 'Rambo', "Giunto in una cittadina del Nord alla ricerca di un ex commilitone del Vietnam, l'eroe di guerra John Rambo è arrestato per vagabondaggio da un arrogante sceriffo.", $action),
    $interstellar = new Movie('https://www.themoviedb.org/t/p/original/pbrkL804c8yAv3zBZR4QPEafpAR.jpg', 'Interstellar', 'In seguito alla scoperta di un cunicolo spazio-temporale, un gruppo di esploratori si avventura in una eroica missione per tentare di superare i limiti della conquista spaziale. ', $fantasy),
    $leIene = new Movie('https://www.themoviedb.org/t/p/original/jwt159hXWA9Q5xpBo8hWb3zwLi7.jpg', 'Le Iene', 'Los Angeles. Una rapina a un importatore di diamanti che avrebbe potuto dare un ottimo bottino con un rischio calcolato si trasforma in una sparatoria che costringe i malviventi a una fuga disordinata.', $cult),

];

//var_dump($avatar) ;



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body class="bg-dark text-white">


    <div class="container">
        <h1 class="text-center py-4">Movies List</h1>
        <div class="row row-cols-2">
            <?php foreach ($movies as $movie): ?>
                <div class="col">
                    <div class="card text-left my-4">
                        <img class="card-img-top" src="<?= $movie->img ;?>" alt="">
                        <div class="card-body">
                            <h4 class="card-title">
                                <?= $movie->title; ?>
                            </h4>
                            <p class="card-text">
                                <?= $movie->description; ?>
                            </p>
                            <p class="card-text">
                                <?= $movie->genre->type;    ?>
                            </p>
                        </div>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>