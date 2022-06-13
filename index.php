<?php
    class Movie
    {
        public $title;
        public $genre;
        public $direct;
        public $year;

        function __construct($_title, $_genre, $_direct, $_year)
        {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->direct = $_direct;
            $this->year = $_year;
        }

        public function getMovie()
        {
            return "Movie: " . $this->title . "<br/>" . "Genre: " . $this->genre . "<br/>" . "Direct: " . $this->direct . "<br/>" . "Years: " . $this->year;
        }
    }

    $star_wars = new Movie('Star Wars', 'Fantasy','George Lucas', 1977);

    $lotr = new Movie('Lord Of The Rings', 'Fantasy','Peter Jackson', 2001);

    $spider_man = new Movie('Spider-man','Action','Sam Raimi',2002);

    $irishman = new Movie('Irishman','Gangster','Martin Scorsese',2019);

    $movies = [];
    $movies[] =  $star_wars;
    $movies[] = $lotr;
    $movies[] = $spider_man;
    $movies[] = $irishman;
    ?>

    <h3>Film:</h3>
    <?php foreach ($movies as $movie) : ?>
        <p><?php echo $movie->getMovie(); ?></p>

    <?php endforeach ?>