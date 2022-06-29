<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'tareas_db'
);
if (!isset($conn)) {
    echo 'La BD tareas_db no está conectada';
}

$conn->set_charset("utf8");
