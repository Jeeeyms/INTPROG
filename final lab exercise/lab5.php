<?php
// Get JSON input
$data = json_decode(file_get_contents('php://input'), true);

// Get username from input
$username = $data['username'] ?? 'Guest';

// Prepare response
$response = [
    'status' => 'success',
    'message' => "Welcome, $username!"
];

// Send JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>