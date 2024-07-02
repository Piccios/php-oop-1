<?php 
class Movies{
    public $title;
    public $genre;
    public $length;

    function __construct ($title, $genre, $length){
        $this->title = $title;
        $this->genre = $genre;
        $this->length = $length;
    }
}


$Star_Wars = new Movies('Star Wars', 'Sci-Fi', 160);
$Avengers = new Movies("Avengers", "Action", 200);
$Interstellar = new Movies("Interstellar", "Sci-Fi", 230);
$TheLegendOfAlJohnAndJack = new Movies("The legend of Al, John & Jack", "Comedy", 100);


var_dump($Star_Wars);
var_dump($Avengers);
var_dump($Interstellar);   
var_dump($TheLegendOfAlJohnAndJack);