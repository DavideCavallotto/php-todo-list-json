<?php
//faccio richiesta al file list_arguments_todo per richiedere l'array di oggetti che verrà restituito come stringa
$list_from_json = file_get_contents('./list_arguments_todo.json');
//tramite json_decode traformo il file json sotto forma di stringa in variabile php
$arguments = json_decode($list_from_json, true);

header('Content-Type: application/json');

echo json_encode($arguments);


?>