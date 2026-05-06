<?php
namespace App\Repositories;
use PDO;
use PDOException;
use App\Models\User;
class UserRepository{
    private $pdo;

    public function __construct(\PDO $pdo){
        $this->pdo = $pdo;
    }
}
?>