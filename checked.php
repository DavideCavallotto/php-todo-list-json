<?php

$checked_index = intval($_POST['i'] ?? null);



$response = [
    'success' => true,    
];

if ($checked_index || $checked_index === 0) {
    
    $list_from_json = file_get_contents('./list_arguments_todo.json');
    
    $arguments = json_decode($list_from_json, true);     
    
    $arguments[$checked_index]['done'] = !$arguments[$checked_index]['done'];

    $response['arguments'] = $arguments;  

    $list_from_json = json_encode($arguments);     

    file_put_contents('./list_arguments_todo.json', json_encode($arguments));
} else {
    $response['success'] = false;
    $response['message'] = 'c\'è stato un problema';       
    
}

header('Content-Type: application/json');

echo json_encode($response);