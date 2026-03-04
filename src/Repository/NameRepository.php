<?php 
namespace App\Repository;

use PDO;

class NameRepository
{
    public function __construct(private PDO $pdo) {}

    public function searchByName(string $term): array
    {
        $stmt = $this->pdo->prepare(
            "SELECT id, name, origin, meaning
             FROM names
             WHERE name ILIKE :term
             ORDER BY name ASC"
        );

        $stmt->execute([
            'term' => '%' . $term . '%'
        ]);

        return $stmt->fetchAll();
    }

    public function findAll(): array
    {
        return $this->pdo
            ->query("SELECT id, name FROM names ORDER BY name")
            ->fetchAll();
    }
}
?>