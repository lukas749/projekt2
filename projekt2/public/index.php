<?php

require_once __DIR__."/../vendor/autoload.php";

session_start();

use App\Core\Database;
use App\Repositories\UserRepository;
use App\Models\User;

$db = new Database();

$pdo = $db->getConnection();
$userRepo =new UserRepository($pdo);

/*$user = new User("Fero","Fero","admin",false);

$userRepo->save($user);

$user = $userRepo->findByUsername("Stano");

if($user){

    $user->setUsername("Peter");

    $userRepo->update($user);

    echo "Používateľ bol upravený";
}
else{
    echo "Používateľ neexistuje";
}
*/



$users = $userRepo->select();
/*var_dump($users);
*/
include __DIR__ ."/../views/home.php";
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && $_POST["action"] === "update") {
    
}
/*
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && $_POST["action"] === "info") {
    $stmt = $db->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->execute([":id" => $_GET["id"]]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}
*/
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && $_POST["action"] === "delete") {
   $sql= "DELETE * FROM users WHERE id=:id;";
   $stmt = $db->prepare($sql);
   $stmt = execute([
        ":id" => $_POST["user_id"]
   ]);

}




?>