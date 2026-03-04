<?php 
require __DIR__ . '/../config/bootstrap.php';

use App\Database\Connection;
use App\Repository\NameRepository;
use App\Controller\NameController;

// Dependency wiring
$connection = new Connection();
$repo = new NameRepository($connection->get());
$controller = new NameController($repo);

// Very simple routing
$action = $_GET['action'] ?? '';

if ($action === 'search') {
    $controller->search();
    exit;
}

require 'index.html';
?>