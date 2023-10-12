<?php

// Simula una base de datos con una lista de usuarios
$users = [
    ['id' => 1, 'name' => 'Usuario 1'],
    ['id' => 2, 'name' => 'Usuario 2'],
    ['id' => 3, 'name' => 'Usuario 3'],
];

header('Content-Type: application/json');
echo json_encode($users);