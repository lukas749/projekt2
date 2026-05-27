<?php

require_once __DIR__."/../vendor/autoload.php";

session_start();

use App\Core\Database;
use App\Repositories\UserRepository;
use App\Models\User;

$db = new Database();

$pdo = $db->getConnection();
$userRepo =new UserRepository($pdo);




$users = $userRepo->select();
/*
$marian = new User("Marian", "Marian", "user", false);
$userRepo->save($marian);

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && $_POST["action"] === "save") {
    $db = new Database();
    $pdo = $db->getConnection();
    $userRepo =new UserRepository($pdo);
    
    $userRepo->delete($_POST["user_id"]);
    header("Location: index.php");
}
*/


include __DIR__ ."/../views/home.php";
?>