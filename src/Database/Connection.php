<?php 

#Specifies the location of this class.
namespace App\Database;

use PDO; #Database abstraction class
use PDOException; # Database exception handeling class

#Creates and provides the database connection
Class Connection{

    #private property for storing the DB connection.
    private PDO $pdo;

    public function __construct()
    {
        # USES the .env file to create the Database source name
        $dsn = sprintf(
            "pgsql:host=%s;port=%s;dbname=%s",
            $_ENV['DB_HOST'],
            $_ENV['DB_PORT'],
            $_ENV['DB_NAME']
        );
        try{
            #USES the $dsn and .env to connect to Postgresql
            $this->pdo = new PDO(
                $dsn,
                $_ENV['DB_USER'],
                $_ENV['DB_PASS'],
                [
                    #Catches,logs and debugs silent errors.
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]
            );
        }catch(PDOException $e){
            throw new \RuntimeException("Database connection failed.");
        }
    }

    public function get(): PDO{
        return $this->pdo;
    }
}
?>