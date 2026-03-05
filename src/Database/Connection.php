<?php 

    #Gives the PDO class a unique name.
    namespace App\Database;

    #Imports the PHP libaries used for db Connections.
    use PDO;
    use PDOException;

    # This class is responsible for creating and managing the database connection.
    class Connection
    {
        #a PDO Object that stores the db connection.
        private PDO $pdo;

        #Function to create the connection
        public function __construct()
        {
            #Creates the data source name(connection string)
            $dsn = sprintf(
                "pgsql:host=%s;port=%s;dbname=%s",
                $_ENV['DB_HOST'],
                $_ENV['DB_PORT'],
                $_ENV['DB_NAME']
            );

            #Uses the DNS and DB user/password to establish the connecection
            try {
                $this->pdo = new PDO(
                    $dsn,
                    $_ENV['DB_USER'],
                    $_ENV['DB_PASS'],
                    [
                        #Tells PDO to handle DB-side errors
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        #Formats the result fetched from the DB.
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        #Disables PDO emulated prepared statments.
                        PDO::ATTR_EMULATE_PREPARES => false,
                    ]
                );
            } catch (PDOException $e) {
                throw new \RuntimeException("Database connection failed.");
            }
        }

        #GET method, returns the pdo connection
        public function get(): PDO
        {
            return $this->pdo;
        }
    }
?>