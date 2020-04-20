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
        <header>
            <div class="container">
                <div class="logo">
                    <img src="https://lh3.googleusercontent.com/proxy/QPlz6AxzP_WI6V_U5AAs4qvrlBlxksU5MzBxcVOL91u-9n5ujHeBJmLXa_5M3TZQCR-VyM8IJV68C_I3MJTWWrcltM9djJ8Tu6Fp15AKtbnKTAJmTubgxUqbfb8eLq0" alt="spotify logo">
                </div>
            </div>
        </header>
        <main>
            <div class="container songs">
                <?php include 'data.php'; ?>
                <?php foreach ($data_canzoni as $key => $song) { ?>
                    <div class="card">
                        <img src="<?php echo $song['immagine-src']; ?>">
                        <h4><?php echo $song['titolo']; ?></h4>
                        <p><?php echo $song['autore']; ?></p>
                        <span><?php echo $song['anno']; ?></span>
                    </div>
                <?php } ?>
            </div>
        </main>


        <script src="dist/main.js" charset="utf-8"></script>
    </body>
</html>
