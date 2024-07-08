<?php
session_start();

if (!isset($_SESSION['progress'])) {
    $_SESSION['progress'] = 0;
}

$_SESSION['progress'] += 1;

if ($_SESSION['progress'] > 100) {
    $_SESSION['progress'] = 100;
}

$response = array("progress" => $_SESSION['progress']);

//для бесконечной загрузки
if ($_SESSION['progress'] == 100) {
    session_destroy();
}

echo json_encode($response);
