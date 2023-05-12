<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'sql_lab');
define('DB_PASS', 'TL]*Em_k*RexvcZi');
define('DB_NAME', 'sql_lab');
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die('Connection failed' . $conn->connect_error);
}

