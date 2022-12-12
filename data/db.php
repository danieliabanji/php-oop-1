<?php

$movies = [

    'avatar' => [
        'title' => 'Avatar',
        'poster' => 'https://i.etsystatic.com/27725708/r/il/008c5a/2904647259/il_fullxfull.2904647259_ilg7.jpg',
        'year' => '2009',
        'duration' => '162',
        'genre' => [
            'sci-fi',
            'action',
            'adventure'
        ]

    ],


    'avatar_2' => [
        'title' => 'Avatar - La via dell\'acqua',
        'poster' => 'https://pad.mymovies.it/filmclub/2008/03/090/locandinapg13.jpg',
        'year' => '2022',
        'duration' => '192',
        'genre' => [
            'sci-fi',
            'action',
            'adventure'
        ]

    ],
    'gatto' => [
        'title' => 'Il gatto con gli stivali 2',
        'poster' => 'https://mr.comingsoon.it/imgdb/locandine/big/59957.jpg',
        'year' => '2022',
        'duration' => '102',
        'genre' => [
            'animation',
            'adventure',
            'comedy',
            'fantasy',
            'romance'
        ]
    ]

];


$genres_1 = new Genre($movies['avatar']['genre']);
$film_1 = new Movie($movies['avatar']['title'], $movies['avatar']['poster'], $movies['avatar']['year'], $movies['avatar']['duration'], $genres_1);

$genres_2 = new Genre($movies['avatar_2']['genre']);
$film_2 = new Movie($movies['avatar_2']['title'], $movies['avatar_2']['poster'], $movies['avatar_2']['year'], $movies['avatar_2']['duration'], $genres_2);

$genres_3 = new Genre($movies['gatto']['genre']);
$film_3 = new Movie($movies['gatto']['title'], $movies['gatto']['poster'], $movies['gatto']['year'], $movies['gatto']['duration'], $genres_3);