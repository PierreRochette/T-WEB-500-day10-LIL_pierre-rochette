<?php

header('Content-Type: application/json'); 

if($_SERVER['REQUEST_METHOD'] === 'GET') {
    $name = isset($_GET['name']) ? $_GET['name'] : ''; 

    $response = array('name' => $name); 
    echo json_encode($response); 
} else {
    echo json_encode(array('error' => 'Invalid request method')); 
}