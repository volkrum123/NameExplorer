<?php 
namespace App\Database;

use PDO;
use PDOException;

class Connection
{
    private PDO $pdo;

    public function __construct()
    {
        $dsn = sprintf(
            "pgsql:host=%s;port=%s;dbname=%s",
            $_ENV['DB_HOST'],
            $_ENV['DB_PORT'],
            $_ENV['DB_NAME']
        );

        try {
            $this->pdo = new PDO(
                $dsn,
                $_ENV['DB_USER'],
                $_ENV['DB_PASS'],
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]
            );
        } catch (PDOException $e) {
            throw new \RuntimeException("Database connection failed.");
        }
    }

    public function get(): PDO
    {
        return $this->pdo;
    }
}
?>