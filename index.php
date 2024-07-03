<?php 
class Movies{
    public $title;
    public $genre;
    public $length;

    function __construct ($title, $genre, $length){
        $this->title = $title;
        $this->genre = $genre;
        $this->length = $length;

    /**
     * The above function is a PHP method named getTitle that returns the value of the title property of
     * the class instance.
     * 
     * @return The `getTitle` method is returning the value of the `title` property of the object.
     */
    }
    public function getTitle(){
        return $this->title;
    }

    /**
     * The getGenre function in PHP returns the genre of an object.
     * 
     * @return The `genre` property of the object is being returned by the `getGenre` method.
     */
    public function getGenre(){
        return $this->genre;
    }
    
    /**
   * The getLength function in PHP returns the length property of the object.
   * 
   * @return The `length` property of the object is being returned.
   */
    public function getLength(){
        return $this->length;
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