<?php
require_once __DIR__. "/../vendor/autoload.php";

session_start();

use App\Models\User;
use App\Core\Database;
use App\Repositories\UserRepository;

$db = new Database();
$pdo = $db->getConnection();

$userRepo = new UserRepository($pdo);
$userRepo->save

?>