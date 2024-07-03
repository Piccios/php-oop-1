<?php 
class Movies{
    public $title;
    public $genre;
    public $length;

    /**
     * This function is the constructor of the class Movies
     *
     * @param [type] $title
     * @param [type] $genre
     * @param [type] $length
     */
    function __construct ($title, $genre, $length){
        $this->title = $title;
        $this->genre = $genre;
        $this->length = $length;

    /**
     * This function returns the title of the movie
     *
     * @return title
     */
    }
    public function getTitle(){
        return $this->title;
    }

    /**
     * This function returns the genre of the movie
     *
     * @return genre
     */
    public function getGenre(){
        return $this->genre;
    }
    
    /**
     * This function returns the length of the movie
     *
     * @return length
     */
    public function getLength(){
        return $this->length;
    }
}


$Star_Wars = new Movies('Star Wars', 'Sci-Fi', 160);
$Avengers = new Movies("Avengers", "Action", 200);
$Interstellar = new Movies("Interstellar", "Sci-Fi", 230);
$TheLegendOfAlJohnAndJack = new Movies("The legend of Al, John & Jack", "Comedy", 100);


var_dump($Star_Wars, $Avengers, $Interstellar, $TheLegendOfAlJohnAndJack);
