<?php 

#Assigns a unique name 
namespace App\Controller;

#Imports the NameRepository class
use App\Repository\NameRepository;

#Handdels incoming requests, calling bussesnes logic and retuns responses.
class NameController
{
    #recieves the NameRepository object
    public function __construct(private NameRepository $repo) {}

    #SearchMethod
    public function search(): void
    {
        #Reads a value from the URL query string.
        $term = $_GET['q'] ?? '';

        if (strlen($term) < 2) {
            echo json_encode([]);
            return;
        }
        #Calls the search repo
        $results = $this->repo->searchByName($term);
    
        # converts results to json and sends it to frontend js.
        header('Content-Type: application/json');
        echo json_encode($results);
    }

    #getNames method
    public function getNames(): void{
        #Calls method from repo
        $results= $this->repo->findAll();
        # converts results to json and sends it to frontend js.
        header('Content-Type: application/json');
        echo json_encode($results);
    }

}
?>