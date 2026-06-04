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
            include __DIR__ . "/../../views/home.php";
    }

    public function login(){
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = trim($_POST["username"] ?? "");
            $password = trim($_POST["password"] ?? "");
            $user = $this->userRepo->findByUsername($username);

            if (!$user || !$user->passwordVerify($password) ) {
                $_SESSION["flash_error"] = "Nesprávne meno alebo heslo";
            
                header("Location:/projekt2/public/login");
                exit();
            }
            $_SESSION["user_id"] = $user->getId();
            $_SESSION["username"] = $user->getUsername();
            $_SESSION["role"] = $user->getRole();
        
            if ($user->getRole === "admin") {
                header("Location:/projekt2/public/admin");
            }else {
                header("Location:/projekt2/public/dashboard.php");
            }
            exit();
        }
        include __DIR__ . "/../../views/login.php";
    }
    public function register(){
        include __DIR__ . "/../../views/register.php";
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = trim($_POST["username"] ?? "");
            $password = trim($_POST["password"] ?? "");

        if ($this->userRepo->findByUsername($username)) {
            $_SESSION["flash_error"] = "Uzivatelske meno uz existuje";
            
            header("Location:/projekt2/public/register");
            exit();
        }
        if (mb_strlen($username) < 3 || mb_strlen($password) <6 ) {
            $_SESSION["flash_error"] = "Uzivatelske meno musi mat aspon 3 znaky a heslo 6 znakov";
            header("Location:/projekt2/public/register");
            exit();
        }
    
        $newUser = new User($username, $password);
        if ($this->userRepo->save($newUser)){
            $_SESSION["flash_succes"] = "Registracia prebehla uspesne";
            header("Location:/projekt2/public/login");
            exit();
        }
    }

    include __DIR__ . "/../../views/register.php";

}

    public function logout() :void
    {
        session_destroy();
        header("Location:/projekt2/public/");
        exit();
    }
}
?>