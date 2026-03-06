<?php 

#Assings unique name.
namespace App\Repository;

#utilizes the php PDO library.
use PDO;

# this is a container for all of the different sql functions.
class NameRepository
{
    #Establishes the db connection
    public function __construct(private PDO $pdo) {}

    #Search Name function
    public function searchByName(string $term): array
    {
        #Creates the parametized query.
        $stmt = $this->pdo->prepare(
            "SELECT id, name, origin, meaning
             FROM names
             WHERE name ILIKE :term
             ORDER BY name ASC"
        );

        #Inserted parameters into query
        $stmt->execute([
            'term' => '%' . $term . '%'
        ]);
        
        #executes query and returns the results stored in an array.
        return $stmt->fetchAll();
    }

    #get all names function
    public function findAll(): array
    { 
        # Creates normal query
        $stmt = $this->pdo->query(
            "SELECT id, name 
             FROM names 
             ORDER BY name"
             );
        #Executes query
        $result = $stmt->fetchAll();
        
        #Return query results
        return $result;
    }

    public function NameByLetter(string $term): array{

    $stmt = $this->pdo->prepare(
        "SELECT id, name
         FROM names
         WHERE name ILIKE :term;");

    #Inserted parameters into query
    $stmt->execute([
        'term' => $term . '%'
    ]);
        
    #executes query and returns the results stored in an array.
    return $stmt->fetchAll();
    }
}
?>