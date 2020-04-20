var inizioCard = $("#card-song-template").html();
var templateCard = Handlebars.compile(inizioCard);      // handlebars

$.ajax({        // ajax call to GET songs informations, used handlebars to populate html
    url: 'data-json.php',
    method: 'GET',
    success: function(songs) {

        for (var i = 0; i < songs.length; i++) {
            var song = songs[i];

            var songObject = {
                sourceImg: song.immagineSrc,
                songName: song.titolo,
                author: song.autore,
                year: song.anno
            };

            var handlebarsSong = templateCard(songObject);
            $('.container.songs').append(handlebarsSong);
        }
    },
    error: function(error) {
        alert('errore' + error);
    }
});
