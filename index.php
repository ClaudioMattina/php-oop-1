<?php

    class Movie {

        public  $name;
        public $author;
        public $year;

        function __construct($_name, $_author, $_year){
            $this -> name = $_name;
            $this -> author = $_author;
            $this -> year = $_year;
        }

        public function get_year(){
            return $this -> year;
            if($this->year ==!is_numeric($this->year)){
                echo "valore non valido";
            };
        }
        

        
    }

    $primoFilm = new Movie('Pulp Fiction', 'Tarantino', 1998);
    $secondoFilm = new Movie('la Sirenetta', 'Caio', 2018);
    $terzoFilm = new Movie('Lilo e Stitch', 'Tizio', 2020);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <?php 
            var_dump($primoFilm); 
        ?>
    </div>
    <div>
        <?php 
            var_dump($secondoFilm); 
        ?>
    </div>
    <div>
        <?php 
            var_dump($terzoFilm); 
        ?>
    </div>

    
            
</body>
</html>