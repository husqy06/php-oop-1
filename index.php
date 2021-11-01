<?php
    class Movie {
        public $title;
        public $cast;
        public $plot;
        public $duration;
        public $original_language;
        public $director;
        public $release_date;
        public $cover;
        
        function __construct($_title, $_cast, $_plot, $_duration, $_original_language, $_director, $_release_date, $_cover) {

            $this->title = $_title;
            $this->cast = $_cast;
            $this->plot = $_plot;
            $this->duration = $_duration;
            $this->original_language = $_original_language;
            $this->director = $_director;
            $this->release_date = $_release_date;
            $this->cover = $_cover;
        }

        function get_title() {
            return $this->title;
        }

        function set_title($_title) {
            $this->title = $_title;
        }

        function get_cast() {
            return $this->cast;
        }

        function set_cast($_cast) {
            $this->cast = $_cast;
        }

        function get_plot() {
            return $this->plot;
        }

        function set_plot($_plot) {
            $this->plot = $_plot;
        }

        function get_duration() {
            return $this->duration;
        }

        function set_duration($_duration) {
            $this->duration = $_duration;
        }

        function get_original_language() {
            return $this->original_language;
        }

        function set_original_language($_original_language) {
            $this->original_language = $_original_language;
        }

        function get_director() {
            return $this->director;
        }

        function set_director($_director) {
            $this->director = $_director;
        }

        function get_release_date() {
            return $this->release_date;
        }

        function set_release_date($_release_date) {
            $this->release_date = $_release_date;
        }

        function get_cover() {
            return $this->cover;
        }

        function set_cover($_cover) {
            $this->cover = $_cover;
        }
    };

    $movies = [
        new movie(
            'The Eternals',
            'Angelina Jolie, Richard Madden, Gemma Chan, Kit Harington',
            'Dopo una tragedia inaspettata a seguito degli eventi di Avengers: Endgame, gli Eterni, una razza aliena immortale creata dai Celestiali, che hanno segretamente vissuto sulla Terra per oltre 7000 anni, si riuniscono per proteggere l\'umanità dalle loro controparti malvagie, i Devianti.',
            156,
            'english',
            'Chloé Zhao',
            '03/11/2021',
            'https://pad.mymovies.it/filmclub/2019/05/044/locandinapg1.jpg'
        ),
        new movie(
            'Venom - La furia di Carnage',
            'Tommy Hardy, Woody Harrelson, Amber Sienna, Michelle Williams',
            'Dopo aver trovato un corpo ospite nel giornalista investigativo Eddie Brock, il simbionte alieno deve affrontare un nuovo nemico, Carnage, alter ego dell\'assassino seriale Cletus Kasady.',
            98,
            'english',
            'Andy Serkis',
            '14/10/2021',
            'https://pad.mymovies.it/cinemanews/2021/177850/locandina-ver.jpg'
        ),
    ]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP OOP 1</title>
</head>
<body>
    <div class="container">
        <?php foreach($movies as $movie) {?>
            <div class="film_container">
                <div class="img_container">
                    <img src="<?php echo $movie->get_cover() ?>" alt="">   
                </div>

                <div class="info_container">
                    <h3>Titolo: <?php echo $movie->get_title() ?></h3>
                    <h3>Cast: <?php echo $movie->get_cast() ?></h3>
                    <h3>Plot: <?php echo $movie->get_plot() ?></h3>
                    <h3>Durata: <?php echo $movie->get_duration() ?></h3>
                    <h3>Lingua originale: <?php echo $movie->get_original_language() ?></h3>
                    <h3>Data di uscita: <?php echo $movie->get_release_date() ?></h3>
                </div>
            </div>
            

        <?php } ?>
    </div>
</body>
</html>