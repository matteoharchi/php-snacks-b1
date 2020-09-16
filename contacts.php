<!-- Snack 2
Passare come parametri GET name, mail ed age e 
verificare (cercando i metodi che non conosciamo nella documentazione) che name 
sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e 
che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, 
altrimenti “Accesso negato” -->

<?php

$name = $_GET ['name'];
$mail = $_GET ['mail'];
$age = $_GET ['age'];

if (strlen($name) > 3 && (strpos($mail, '@') != false && strpos($mail, '.') != false) && is_numeric($age)){
        $say = 'Accesso riuscito';
    }else{
        $say = 'Accesso negato';
    };
echo $say;
?>