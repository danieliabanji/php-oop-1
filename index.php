<?php

include __DIR__ . '/Models/Movie.php';
include __DIR__ . '/data/db.php';


// $film_1->getFilmData();
// $film_2->getFilmData();
// $film_3->getFilmData();
// var_dump($film_3);


$movies = [$film_1, $film_2, $film_3];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>

    <body>
        <header>
            <h1 class="text-center m-0 py-3">My movie</h1>
        </header>

        <main>
            <div class="container py-4">
                <div class="movies_box">
                    <div class="row p-3 g-3 text-center">
                        <?php foreach ($movies as $movie): ?>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body my-card-body">
                                    <h3 class="card-title">
                                        <?php echo $movie->title ?>
                                    </h3>
                                    <div class="card-img">
                                        <img src="<?php echo $movie->poster ?>" alt="">
                                    </div>
                                    <div class="card-text pt-3">
                                        durata:
                                        <?php echo $movie->duration ?>min
                                    </div>
                                    <div class="card-text pt-3">
                                        anno:
                                        <?php echo $movie->year ?>
                                    </div>
                                    <div class="card-text pt-3">
                                        genere:
                                        <?php for ($i = 0; $i < count($movie->genre->name); $i++) {
                                echo $movie->genre->name[$i] . ', ';
                            } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </main>

    </body>

</html>
</body>

</html>