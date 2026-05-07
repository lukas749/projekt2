<?php
require_once __DIR__. "/../vendor/autoload.php";

session_start();

use App\Models\User;
use App\Core\Database;
use App\Repositories\UserRepository;

$db = new Database();

$pdo = $db->getConnection();

$userRepo = new UserRepository($pdo);
var_dump($pdo);

/*$user = $userRepo->findByUsername("Zdeno");*/

$user = new User("Fero", "Fero","user", false);

$userRepo->save($user);

if ($user = $userRepo->findByUsername("Fero")) {
   $user->setUsername("Majo");
    $user->setPassword("Majo");
    $user->setRole("user");
    $userRepo->update($user); 
}

?>