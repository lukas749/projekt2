<?php
namespace App\Controllers;

use App\Repositories\UserRepository;
use App\Models\User;

class UserController
{
    private UserRepository $userRepo;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function index(){
            include __DIR__ . "/../../views/dashboard.php";
    }

    public function login(){
        include __DIR__ . "/../../views/login.php";
    }
    public function register(){
        include __DIR__ . "/../../views/register.php";
    }



}






?>