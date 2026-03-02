<?php 
#Imports the phpdotenv Class from Composer.
use Dotenv\Dotenv;

#Loads composers autoloader to load installed packages, src classes and namespaces.
require __DIR__ . '/../vendor/autoload.php';

#Looks for the .env file in my project root to loads environment variables safely.
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
#Reads the .env file
$dotenv->load();
?>