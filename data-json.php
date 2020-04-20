<?php
$data_canzoni = [
    [
        'immagineSrc' => 'https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg',
        'titolo' => 'New Jersey',
        'autore' => 'Bon Jovi',
        'anno' => 1988,
        'genere' => 'Rock'
    ],
    [
        'immagineSrc' => 'https://images.pyramidshop.com/images/_popup/ACPPR48056.jpg',
        'titolo' => 'Live at Wembley 86',
        'autore' => 'Queen',
        'anno' => 1988,
        'genere' => 'Pop'
    ],
    [
        'immagineSrc' => 'https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg',
        'titolo' => 'Ten\'s Summoner\'s Tales',
        'autore' => 'Sting',
        'anno' => 1993,
        'genere' => 'Pop'
    ],
    [
        'immagineSrc' => 'https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg',
        'titolo' => 'Steve Gadd Band',
        'autore' => 'Steve Gadd Band',
        'anno' => 2018,
        'genere' => 'Jazz'
    ],
    [
        'immagineSrc' => 'https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg',
        'titolo' => 'Brave new World',
        'autore' => 'Iron Maiden',
        'anno' => 2000,
        'genere' => 'Metal'
    ],
    [
        'immagineSrc' => 'https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg',
        'titolo' => 'One more acr, one more rider',
        'autore' => 'Eric Clapton',
        'anno' => 2002,
        'genere' => 'Rock'
    ],
    [
        'immagineSrc' => 'https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg',
        'titolo' => 'Made in Japan',
        'autore' => 'Deep Purple',
        'anno' => 1972,
        'genere' => 'Rock'
    ],
    [
        'immagineSrc' => 'https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg',
        'titolo' => 'And Justice for All',
        'autore' => 'Metallica',
        'anno' => 1988,
        'genere' => 'Metal'
    ],
    [
        'immagineSrc' => 'https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg',
        'titolo' => 'Hard Wired',
        'autore' => 'Dave Weckl',
        'anno' => 1994,
        'genere' => 'Jazz'
    ],
    [
        'immagineSrc' => 'https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg',
        'titolo' => 'Bad',
        'autore' => 'Michael Jacjson',
        'anno' => 1987,
        'genere' => 'Pop'
    ]
];

header('Content-Type: application/json');
echo json_encode($data_canzoni);

?>
