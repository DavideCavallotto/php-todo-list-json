<?php

// recupero il dato scitto dall'utente tamite $_POST

$new_argument = $_POST['argument'] ?? '';

$new_argument_input = [
    "text" => $new_argument,
    "done" => false
];

var_dump($new_argument);


//faccio richiesta al file list_arguments_todo per richiedere l'array di oggetti che verrà restituito come stringa
$list_from_json = file_get_contents('./list_arguments_todo.json');

//tramite json_decode traformo il file json sotto forma di stringa in variabile php
$arguments = json_decode($list_from_json, true);

// pusho il nuovo argomento nell'array che contiene i diversi argomenti
$arguments[] = $new_argument_input;

$response['arguments'] = $arguments;

// codifico l'array di formato json in array formato php

$list_from_json = json_encode($arguments);

// salvo il nuovo argomento

file_put_contents('./list_arguments_todo.json',$list_from_json );

header('Content-Type: application/json');

echo json_encode($response);
