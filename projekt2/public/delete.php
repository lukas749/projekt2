<?php

require_once __DIR__ ."/../vendor/autoload.php";

use App\Repositories\UserRepository;
use App\Core\Database;

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && $_POST["action"] === "delete") {
    $db = new Database();
    $pdo = $db->getConnection();
    $userRepo =new UserRepository($pdo);
    
    $userRepo->delete($_POST["user_id"]);
    header("Location: index.php");
}
?>