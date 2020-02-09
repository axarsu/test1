<?php

if ($_SERVER['REQUEST_METHOD'] != 'GET') {
  http_response_code(405);
  die('Method Not Allowed');
}

$response = [
  'ip' => $_SERVER['REMOTE_ADDR'],
];

if (!empty($_GET['name'])) {
  $response['greeting'] = $_GET['name'];
}

header('x-hello-world: Sandro Axarsu');
header('Content-Type: application/json');

echo json_encode($response);
