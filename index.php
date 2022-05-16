<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-oop</title>
</head>
<body>
    
<?php

class Movie {
    public $title;
    public $year;
    public $poster;

    // function construct che accetta title e year
    function __construct ($title, $year, $poster) {
        $this->title = $title;
        $this->year = $year;
        $this->poster = $poster;
    }

    //function per stampare i DATA
    public function __toString() {
        if($this->title) {
            $this->getMovieInfo($this->title);
            return
            "<div>
                <img src="."$this->poster"."> 
                <h2>Title: "."$this->title"."</h2>
                <h3>Year: "."$this->year"."</h3>
            </div>";
        } else {
            return 
            "<div>
            <img src="."$this->poster".">
                <h2>Title not Available</h2>".
                "<h3>"."Year: "."$this->year"."</h3>
            </div>";
        }
    }

    public function getMovieInfo($title){
        if(strlen($this->title) > 0) {
                return $this -> title;
        }
    }
}

// assegno la classe Movie ad una variabile passando dei parametri
$ilSignoreDegliAnelli1 = new Movie ("Il Signore degli Anelli - La Compagnia dell'Anello", 2001, "https://pad.mymovies.it/filmclub/2002/01/011/locandina.jpg");

$ilSignoreDegliAnelli2 = new Movie ("Il Signore degli Anelli - Le due torri", 2002,"https://mr.comingsoon.it/imgdb/locandine/big/1031.jpg");

$ilSignoreDegliAnelli3 = new Movie ("Il Signore degli Anelli - Il ritorno del Re", 2003,"https://pad.mymovies.it/filmclub/2004/01/014/locandina.jpg");

echo $ilSignoreDegliAnelli1;
echo $ilSignoreDegliAnelli2;
echo $ilSignoreDegliAnelli3;
?>

</body>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    body {
        display: flex;
        justify-content: center;
        column-gap: 90px;
        margin-top: 100px;
    }

    div {
        text-align:center;
        height: 600px;
    }

    img {
        width: calc(100% - 20%);
        margin-bottom: 25px;
    }
</style>
</html>