<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film List</title>
    <?php

    class Movie {
        public $name;
        public $categories;
        public $titleImg;
        public $description;

        public function __construct($name, $categories, $titleImg, $description)
        {
        $this->name = $name;
        $this->categories = $categories;
        $this->titleImg = $titleImg;
        $this->description = $description;
        }

        public function getDescription(){
            return $this -> description;
        }
        
        public function displayInfo() {
            echo "<h1>" . $this->name . "</h1>";
            echo "<img style='max-width : 300px;' src='" . $this->titleImg . "' alt='" . $this->name . "'>";
            echo "<h5> " . implode(", ", $this->categories) . "</h5>";
            echo "<p>" . $this->description . "</p>";
        }


    }

    $movie1 = new Movie(
            'American Beauty',
            ['Dramma', 'Romantico'], 
            'https://m.media-amazon.com/images/M/MV5BNTBmZWJkNjctNDhiNC00MGE2LWEwOTctZTk5OGVhMWMyNmVhXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_FMjpg_UX1000_.jpg', 
            "Lester Burnham (Kevin Spacey) ha quarantadue anni e lavora come scrittore per un periodico (occupazione che detesta): è sposato con Carolyn, ambiziosa e spregiudicata agente immobiliare che gli ha dato una figlia, Jane. La ragazza, di sedici anni, deve fare i conti con una bassa autostima e con un 'alta insoddisfazione nei confronti della sua famiglia. La vita dei Burnham si intreccia con quella dei nuovi vicini di casa, i Fitts: il capo-famiglia Frank, colonnello del Corpo dei Marines in pensione; la moglie Barbara, permanentemente in stato di shock; e il figlio Ricky, abituale consumatore di marijuana a dispetto dei principi del padre"
        );
    $movie2 = new Movie(
            'Magnolia',
            ['Strory-Thriller', 'Romantico'], 
            'https://c8.alamy.com/comp/2JHDFHJ/film-poster-magnolia-1999-2JHDFHJ.jpg', 
            "Magnolia è un film del 1999, scritto e diretto da Paul Thomas Anderson.
            È una piovosa giornata a San Fernando Valley, Los Angeles. Un vecchio magnate della TV, Earl Partridge (Jason Robards), ormai malato terminale, sta realizzando di aver rifiutato tutto ciò che di buono aveva nella vita: la moglie e il figlio Frank (Tom Cruise), quest'ultimo diventato un invasato predicatore maschilista con una mentalità corrotta e un profondo odio verso il padre.
            Il moribondo è curato dall'infermiere Phil Parma (Philips Hoffman): la sua bontà d'animo e la sua ingenuità lo metteranno in situazioni molto imbarazzanti. Al capezzale di Earl c'è anche la sua seconda moglie, Linda (Julianne Moore), lacerata dai sensi di colpa per averlo tradito molte volte, che scopre di amare il marito solo ora.
            Parallelamente, un anziano conduttore Tv, Jimmy Gator (Baker Hall), scopre di avere due mesi di vita. Distrutto dal rimorso, confessa alla consorte di averla tradita e di aver molestato, anche se lei ha rimosso il ricordo, la figlia Claudia, una ragazza insicura, infelice e cocainomane, con la quale ha un rapporto turbolento. Tuttavia l'incontro con il poliziotto divorziato Jim le farà cambiare vita.
            Donnie Smith invece è un ex bambino prodigio, un asso nei quiz televisivi con i quali ha guadagnato molto. Senza lavoro, si ritrova a fare i conti con la propria identità. Infine c'è il piccolo Stanley, anch'egli campione di quiz, ai quali partecipa solo perché costretto dall'avido padre. L'epilogo, sconcertante e sorprendente, coglierà di sorpresa tutti i personaggi."
        );
    ?>
</head>
<body>
    <div class="row">
        <div class="col">
            <?php 
                $movie1->displayInfo();
            ?>
        </div>
        <div class="col">
            <?php 
                $movie2->displayInfo();
            ?>
        </div>
    </div>
    
</body>
</html>
