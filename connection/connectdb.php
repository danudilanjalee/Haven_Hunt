
<?php
    $hostname = "127.0.0.1";
    $username = "root";
    $password = "mariadb";
    $dbname = "HavenHunt";

    $connection = mysqli_connect($hostname,$username,$password,$dbname);
?>
CREATE DATABASE havenhunt;

USE havenhunt;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
