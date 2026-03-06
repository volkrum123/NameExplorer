<?php 

#Loads the bootstrap file
require __DIR__ . '/../config/bootstrap.php';

#Import the class
use App\Database\Connection;
use App\Repository\NameRepository;
use App\Controller\NameController;

#creates an instance of the connection class
$connection = new Connection();
#Creats a repository object and passes the con get() function
$repo = new NameRepository($connection->get());
#Creates a controller object with acces to the repo.
$controller = new NameController($repo);

// Very simple routing
$action = $_GET['action'] ?? '';

if ($action === 'search') {
    $controller->search();
    exit;
}else if ($action === 'getNames') {
    $controller->getNames();
    exit;
}else if ($action === 'getNamesByLetter') {
    $controller->getNamesByLetter();
    exit;
}

require __DIR__ . '/views/home.php';
?>