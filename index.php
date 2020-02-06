<?php

/*classi per gestire i dipendenti di un'azienda.
Lascio a voi le scelte architetturali, domani le valutiamo insieme 
Provate a metterci dentro la gestione di un'eccezione, ad esempio in una funzione che calcola lo stipendio*/



//here i include the class staff:
include_once "staff.php";


//OBJECT LUCA:
$staff1 = new Staff();
// assegno i valori alle variabili d'istanza
$staff1->id = 1;
$staff1->nome = 'Luca';
$staff1->email = 'luca@gmail.com';
$staff1->address= 'via roma';

echo '<pre>';
var_dump($staff1);
echo '<pre>';



// OBJECT MARIA:
$staff2 = new Staff();
// assegno i valori alle variabili d'istanza
$staff2->id = 2;
$staff2->nome = 'Maria';
$staff2->email = 'maria@gmail.com';
$staff2->address= 'via cipro';

var_dump($staff2);



//OBJECT MARCO:
$staff3 = new Staff();
// assegno i valori alle variabili d'istanza
$staff3->id = 3;
$staff3->nome = 'Marco';
$staff3->email = 'marco@gmail.com';
$staff3->address= 'via appia';

var_dump($staff3);



?>


