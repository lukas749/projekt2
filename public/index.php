<?php
require_once __DIR__. "/../vendor/autoload.php";

session_start();

use App\Models\User;
use App\Core\Database;
use App\Repositories\UserRepository;

$db = new Database();

$pdo = $db->getConnection();

var_dump($pdo);

$userRepo = new UserRepository($pdo);


$user = new User("Miro", "Miro", "user", false);

 var_dump($user);

$user->setUsername("alexandra");
var_dump($user);

?>