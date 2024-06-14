<?php
require_once('./../utils/imports.php');
try {
    $image = "data:image/png;base64,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";
    new User("muslim", "muslim@tyaza.org", 'Pa$$word1');
    new User("customer1", "customer1@tyaza.org", 'Pa$$word1');
    new User("customer2", "customer2@tyaza.org", 'Pa$$word1');
    new User("customer3", "customer3@tyaza.org", 'Pa$$word1');
    new User("customer4", "customer4@tyaza.org", 'Pa$$word1');
    new User("muslim", "muslim@tyaza.org", 'Pa$$word1');
    new Car("Toyota", 'a1', $image);
    new Car("Toyota23", 'a1', $image);
    new Car("Toyotada", 'd1', $image);
    new Car("Toyota09", 'an', $image);
} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}

$pdo = null;