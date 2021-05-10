<?php
ini_set('display_errors', 1);

class Movie {
    public $titolo;
    public $regista;
    public $genere;
    private $valutazione;
    public $anno;
    public $trama;

    // inizio metodi
    function __construct($_titolo, $_regista) {
        $this->titolo = $_titolo;
        $this->regista = $_regista;
    }

    public function setValutazione($valutazione) { 
        $this->valutazione = $valutazione;   
    }

    public function getValutazione() {      
        return $this->valutazione;
    }

}


// FILM 1
$fight_club = new Movie('Figth Club', 'David Fincher' );

$fight_club->setValutazione('3.2');
echo $fight_club->getValutazione();

$fight_club->genere = 'Drama';
$fight_club->anno = '1999';
$fight_club->trama = 'The Narrator, an automobile recall specialist, is unfulfilled by his job and possessions and suffers from chronic insomnia. To cure this, he attends support groups, posing as a sufferer of diseases. His bliss is disturbed when another impostor, Marla Singer, begins attending the same groups. The two agree to split which groups they attend.
On a flight home from a business trip, the Narrator meets soap salesman Tyler Durden. The Narrator returns home to find his apartment and all his belongings have been destroyed by an explosion. Disheartened by his material loss, he calls Tyler and they meet at a bar. Tyler tells him he is trapped by consumerism. In the parking lot, he asks the Narrator to hit him, and they have a fistfight.';

var_dump($fight_club);

// FILM 2

$pulp_fiction = new Movie('Pulp Fiction', 'Quentin Tarantino');

$pulp_fiction->setValutazione('4.0');
echo $pulp_fiction->getValutazione();

$pulp_fiction->genere = 'Drama';
$pulp_fiction->anno = '1994';
$pulp_fiction->trama = "Hitmen Jules Winnfield and Vincent Vega arrive at an apartment to retrieve a briefcase for their boss, gangster Marsellus Wallace, from a business partner, Brett. After Vincent checks the contents of the briefcase, Jules shoots one of Brett's associates, then declaims a passage from the Bible before he and Vincent kill Brett for trying to double-cross Marsellus. They take the briefcase to Marsellus, but they have to wait while he bribes boxer Butch Coolidge to take a dive in his upcoming match. 
The next day, Vincent purchases heroin from his drug dealer, Lance. He shoots up and then drives to meet Marsellus's wife Mia, having agreed to escort her while Marsellus is out of town. They eat at Jack Rabbit Slim's, a 1950s-themed restaurant, and participate in a twist contest, then return home. While Vincent is in the bathroom, Mia finds his heroin and snorts it, mistaking it for cocaine. She suffers an overdose; Vincent rushes her to Lance's house, where they revive her with an injection of adrenaline into her heart. Vincent drops Mia off at her home, and the two agree never to tell Marsellus about the incident.";

var_dump($pulp_fiction);
