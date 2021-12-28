<?php

require __DIR__ . '/function.php';

/* $response = '[
    {
        "poster": "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg",
        "title": "New Jersey",
        "author": "Bon Jovi",
        "genre": "Rock",
        "year": "1988"
    },
    {
        "poster": "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
        "title": "Live at Wembley 86",
        "author": "Queen",
        "genre": "Pop",
        "year": "1992"
    },
    {
        "poster": "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg",
        "title": "Ten\'s Summoner\'s Tales",
        "author": "Sting",
        "genre": "Pop",
        "year": "1993"
    },
    {
        "poster": "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg",
        "title": "Steve Gadd Band",
        "author": "Steve Gadd Band",
        "genre": "Jazz",
        "year": "2018"
    },
    {
        "poster": "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg",
        "title": "Brave new World",
        "author": "Iron Maiden",
        "genre": "Metal",
        "year": "2000"
    },
    {
        "poster": "https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg",
        "title": "One more car, one more raider",
        "author": "Eric Clapton",
        "genre": "Rock",
        "year": "2002"
    },
    {
        "poster": "https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg",
        "title": "Made in Japan",
        "author": "Deep Purple",
        "genre": "Rock",
        "year": "1972"
    },
    {
        "poster": "https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg",
        "title": "And Justice for All",
        "author": "Metallica",
        "genre": "Metal",
        "year": "1988"
    },
    {
        "poster": "https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg",
        "title": "Hard Wired",
        "author": "Dave Weckl",
        "genre": "Jazz",
        "year": "1994"
    },
    {
        "poster": "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg",
        "title": "Bad",
        "author": "Michael Jacjson",
        "genre": "Pop",
        "year": "1987"
    }
]';

$disks = json_decode($response, true); */

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Dischi</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <style>
        body{
            background-color: #1e2d3b;
        }
        .card,
        header,
        footer{
            background-color: #36404a;
        }
    </style>
</head>
<body>

    <header>
        <div class="logo p-2">
        <img height="30" src="https://www.wallpapertip.com/wmimgs/17-176153_download-logo-spotify-png.png" alt="">
        </div>
    </header>
 <!-- /header  -->

    <main class="my-4">
    <div class="container">
      <div class="row justify-content-center">

        <?php foreach ($disks as $disk) : ?>
          <div class="col-2">
            <div class="card text-white">
              <img class="img-fluid" src="<?= $disk['poster'] ?>" alt="">
              <div class="card-body">
                <h3><?= $disk['title'] ?></h3>
                <p><?= $disk['author'] ?></p>
                <p><?= $disk['year'] ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </main>
  <!-- /main -->

  <footer class="p-3">
    <p class="text-center text-white">
      copyright &copy;Boolean
    </p>
  </footer>

</body>
</html>