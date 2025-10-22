<?php

require 'functions.php';

$DB_HOST = 'localhost';
$DB_NAME = 'bike_rental';
$DB_USER = 'root';
$DB_PASS = '';

function db()
{
    global $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS;
    $dsn = "mysql:host={$DB_HOST}; dbname={$DB_NAME}";
    return new PDO($dsn, $DB_USER, $DB_PASS);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike Shop Rental</title>
</head>

<body>
    <nav>
        <a href="index.php">Home</a>
        <a href="index.php?report=available">Available</a>
        <a href="index.php?report=completed">Completed</a>
        <a href="index.php?report=customers">Customers</a>
        <a href="index.php?report=multi">Multi</a>
        <a href="index.php?report=open">Open</a>
        <a href="index.php?report=top3">Top 3</a>
    </nav>

    <?php
    if (isset($_GET['report'])) {
        $dir = __DIR__ . '/' . 'reports/' . $_GET['report'] . '.php';
        include $dir;
    }
    ?>
</body>

</html>