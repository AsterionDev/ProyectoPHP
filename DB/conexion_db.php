<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'biblioteca_db'
);
if (!isset($conn)) {
    echo 'La BD biblioteca_db no está conectada';
}

$conn->set_charset("utf8");
