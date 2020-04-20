<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Dischi ajax PHP</title>
        <link rel="stylesheet" href="dist/style.css">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <script src="https://kit.fontawesome.com/29630d724d.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js" integrity="sha256-usTqAE1ywvdMtksWzdeWzD75MsfJN0h0U7y2NtZL3N0=" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>    <!-- HEADER -->
            <div class="container">
                <div class="logo">
                    <img src="img/logo.jpg" alt="spotify logo">
                </div>
            </div>
        </header>
        <main>
            <div class="container genre">
                <select class="genre-selector">     <!-- handlebars options -->
                    <option value="">Filtra per Genere:</option>
                </select>
            </div>
            <div class="container songs">

                <?php // include 'data.php'; ?>     <!-- To see php method just remove the // -->
                <?php foreach ($data_canzoni as $key => $song) { ?>
                    <div class="card" data-genre="<?php echo $song['genere']; ?>">
                        <div class="img-name">
                            <img src="<?php echo $song['immagineSrc']; ?>">
                            <h4><?php echo $song['titolo']; ?></h4>
                        </div>
                        <div class="info-songs">
                            <p><?php echo $song['autore']; ?></p>
                            <span><?php echo $song['anno']; ?></span>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </main>



        <script id="card-song-template" type="text/x-handlebars-template">  <!-- Template handlebars to create song card -->
            <div class="card" data-genre="{{genre}}">
                <div class="img-name">
                    <img src="{{sourceImg}}">
                    <h4>{{songName}}</h4>
                </div>
                <div class="info-songs">
                    <p>{{author}}</p>
                    <span>{{year}}</span>
                </div>
            </div>
        </script>


        <script id="select-option-template" type="text/x-handlebars-template">  <!-- Template handlebars to create select options -->
            <option value="{{genre}}">{{genre}}</option>
        </script>

        <script src="dist/main.js" charset="utf-8"></script>
    </body>
</html>
