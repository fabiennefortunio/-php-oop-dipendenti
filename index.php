<?php

/*classi per gestire i dipendenti di un'azienda.
Lascio a voi le scelte architetturali, domani le valutiamo insieme :sonrojo:
// Provate a metterci dentro la gestione di un'eccezione, ad esempio in una funzione che calcola lo stipendio*/

include_once "staff.php";

$staff1 = new Staff();
// assegno i valori alle variabili d'istanza
$staff1->id = 1;
$staff1->nome = 'Luca';
$staff1->email = 'luca@gmail.com';
$staff1->address= 'via roma 1 Padova';

var_dump($staff1);


?>

