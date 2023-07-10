<?php 
    class Movie {
        public $titolo;
        public $genere;
        public $anno;
        public $voto;
        public $durata;

        public function __construct($titolo, $genere, $anno, $durata){
            $this->titolo = $titolo;
            $this->genere = $genere;
            $this->anno = $anno;
            $this->durata = $durata;
        }
        
        public function getMovies(){
            $string = "Movie: ".$this->titolo.", Genere: ".$this->genere.", Anno: ".$this->anno.", Durata: ".$this->durata;

            if($this->voto != NULL){
                $string.= ", Voto: ".$this->voto;
            }
            return $string;
        }
    }

    $pacific_rim = new Movie('Pacific Rim: La Rivolta', 'Azione', '2018', 150 );
    $pacific_rim->voto = 7.5;

    $ali = new Movie('ALI', 'Drammatico', '2001', 156);
    $ali->voto = 8.5;

    echo $pacific_rim->getMovies();
    echo "<br/>";
    echo $ali->getMovies()
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        
    </body>
</html>