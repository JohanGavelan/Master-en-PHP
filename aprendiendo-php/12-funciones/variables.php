<?php


$frase = "Hola mundo";

echo $frase;


function hola() {

    global $frase;

    echo "<h1>$frase</h1>";

    $year = 2020;

    echo "<h1>$year</h1>";


    return $year;

}

echo hola();

echo '<hr>';

// Funciones variables


function goodMorning() {
    
    return 'Hello! Good morning!';

}

function goodAfternoon() {

    return 'Hey! Hope you are having a good afternoon!';

}

function goodNight() {

    return 'Have a great night! See you tomorrow';

}


$horario = 'Morning'; // $_GET['schedule']

$mifuncion = 'good' . $horario;

echo $mifuncion();