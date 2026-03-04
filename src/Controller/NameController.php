<?php 
namespace App\Controller;

use App\Repository\NameRepository;

class NameController
{
    public function __construct(private NameRepository $repo) {}

    public function search(): void
    {
        $term = $_GET['q'] ?? '';

        if (strlen($term) < 2) {
            echo json_encode([]);
            return;
        }

        $results = $this->repo->searchByName($term);

        header('Content-Type: application/json');
        echo json_encode($results);
    }

    public function getNames(): void{
        $results= $this->repo->findAll();
        header('Content-Type: application/json');
        echo json_encode($results);
    }

}
?>