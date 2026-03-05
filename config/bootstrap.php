<?php 

    #Imports the Dotenv class from the composer package
    use Dotenv\Dotenv;

    #Includes the composers autoloader to load all installed packages and their classes.
    require __DIR__ . '/../vendor/autoload.php';

    #Creates the Dotenv object that looks for the .env file.
    $dotenv = Dotenv::createImmutable(__DIR__ . '/../');

    #Loads the found env file.
    $dotenv->load();
    
?>