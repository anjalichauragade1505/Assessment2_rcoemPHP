<?php

// Connect to the database
function connectToDatabase()
{
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=contacts', 'root', 'anjali');
        return $pdo;
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
}

// Debugging helper
function dd($var)
{
    var_dump($var);
    exit;
}

// Select all records from a table
function selectAll($table)
{
    $pdo = connectToDatabase();
    $query = 'SELECT * FROM ' . $table;
    $statement = $pdo->prepare($query);
    $statement->execute();
    
    return $statement->fetchAll(PDO::FETCH_CLASS, \Models\contacts::class);
}

// Create a new record in the specified table
function create($table, $fields)
{
    $pdo = connectToDatabase();
    $query = "INSERT INTO $table SET";
    
    // Fields processing logic (incomplete)
    foreach ($fields as $value) {
        // Field value logic here
    }

    $statement = $pdo->prepare($query);
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, \Models\contacts::class);
}

