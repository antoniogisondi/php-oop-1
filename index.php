<?php 
    class Genere {
        public $nome;

        public function __construct($nome){
            $this->nome = $nome;
        }
    }

    class Movie {
        public $titolo;
        public $genere;
        public $anno;
        public $voto;
        public $durata;

        public function __construct($titolo, Genere $genere, $anno, $voto, $durata ){
            $this->titolo = $titolo;
            $this->genere = $genere;
            $this->anno = $anno;
            $this->voto = $voto;
            $this->durata = $durata;
        }
        
        public function getMovies(){
            $string
        }
    }
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