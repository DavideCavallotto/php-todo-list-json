<?php

$list_from_json = file_get_contents('./list_arguments_todo.json');

$arguments = json_decode($list_from_json, true);

header('Content-Type: application/json');

echo json_encode($arguments);

?>