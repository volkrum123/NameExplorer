<?php 

#allows autoloading
namespace App\Repository;
use PDO;

class NameRepository{

    #Dependency injection: gets the db connection
    public function __construct(private PDO $pdo){}
    
    #Accapts the name and returns a array
    public function searchByName(string $term): array{
        #Creating the query with parameters
        $stmt = $this->pdo->prepare(
            "SELECT id, name, origin, meaning
             FROM names
             WHERE name ILIKE :term
             ORDER BY name ASC"
        );
        #adds the parameters
        $stmt->execute([
            'term' => '%' . $term . '%'
        ]);
        
        #Returns the results from the DB using the FETCH_ASSOC
        return $stmt->fetchAll();
    }

    public function findAll(): array{
        return $this->pdo->query("SELECT id, name FROM names ORDER BY name")->fetchAll();
    }
}
?>