var inizioCard = $("#card-song-template").html();
var templateCard = Handlebars.compile(inizioCard);      // handlebars card

var inizioOption = $("#select-option-template").html();
var templateOption = Handlebars.compile(inizioOption);      // handlebars select option


$('.genre-selector').change(function() {    // genre selector
    var selectedGenre = $(this).val();
    if (selectedGenre == '') {
        $('.card').show();
    } else {
        $('.card').each(function(){
            if (selectedGenre == $(this).data('genre')) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }
});


$.ajax({        // ajax call to GET songs informations, used handlebars to populate html as well as select options
    url: 'data-json.php',
    method: 'GET',
    success: function(songs) {
        var optionObject = {};

        for (var i = 0; i < songs.length; i++) {
            var song = songs[i];

            var songObject = {
                sourceImg: song.immagineSrc,
                songName: song.titolo,
                author: song.autore,
                year: song.anno,
                genre: song.genere
            };
            var handlebarsSong = templateCard(songObject);
            $('.container.songs').append(handlebarsSong);

            if (optionObject[song.genere] === undefined) {  // I want an object with all the genres of the songs (without duplicates)
                optionObject[song.genere] = song.genere;
            }
        }
        genreFilterHandlebars(optionObject);
    },
    error: function(error) {
        alert('errore' + error);
    }
});



// FUNZIONI USATE



function genreFilterHandlebars(optionObject) {  // this function, thanks to handlebars, populate the select with as many options as genres (no duplicates)
    for (var key in optionObject) {
        var handlebarsOption = {
            genre: optionObject[key]
        }
        var handlebarsOptions = templateOption(handlebarsOption);
        $('.genre-selector').append(handlebarsOptions);
    }
}
