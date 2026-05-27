<?php
require_once __DIR__ ."/../vendor/autoload.php";

use App\Models\User;
use App\Core\Database;
use App\Repositories\UserRepository;



if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && $_POST["action"] === "save") {
    $db = new Database();
    $pdo = $db->getConnection();
    $userRepo =new UserRepository($pdo);
    $user = new User($_POST["username"], $_POST["password"]);
    $userRepo->save($user);
    header("Location: index.php");
}





?>