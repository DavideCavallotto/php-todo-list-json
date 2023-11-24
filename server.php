<?php

$arguments = ['PHP', 'Laravel', 'React'];

header('Content-Type: application/json');

echo json_encode($arguments);

?>