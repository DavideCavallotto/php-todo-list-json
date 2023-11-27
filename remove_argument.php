<?php

$delete_index = intval($_POST['i'] ?? null);

$response = [
    'success' => true,    
];

if($delete_index || $delete_index === 0) {
    $list_from_json = file_get_contents('./list_arguments_todo.json');

    $arguments = json_decode($list_from_json, true); 

    array_splice($arguments,$delete_index,1);

    $response['results'] = $arguments;  

    $list_from_json = json_encode($arguments);

    file_put_contents('./list_arguments_todo.json',$list_from_json );

} else {
    $response['success'] = false;
    $response['message'] = 'c\'è stato un problema';       
    
}

header('Content-Type: application/json');

echo json_encode($response);