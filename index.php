<?php

    class movie {

        public $title;
        public $genre;
        public $duration;
        public $year;
        public $director;
        private $plot;


        public function __construct(
            string $title,
            string $genre,
            float $duration = 0,
            int $year = 0,
            string $director = '',
            string $plot = ''
        )
        {
            $this->title = $title;
            $this->genre = $genre;
            $this->plot = "lorem ipsum dolor";
        }

        public function getgenre() {
            return $this->plot;
        }
    }

    $movieOne = new movie('Kung Fu Panda', 'Comedy');
    $movieTwo = new movie('The Chainsaw Massacre', 'Horror');

    var_dump($movieOne);
    var_dump($movieTwo);


?>