<?php
require_once __DIR__ ."/../vendor/autoload.php";

use App\Repositories\UserRepository;
use App\Core\Database;
use public\index;

/*
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && $_POST["action"] === "update") {
    $userRepo->update($_POST["user_id"]);
    header("Location: index.php");
}


exit();
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form>
<div class="container">
    <div class="wrapper py-3">
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required> 
                </div>
                </div>
                <div class="col">
                <div class="mb-3">
                    <input type="text" class="form-control" id="role" name="role" placeholder="Role" required> 
                </div>
                <div class="col">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</div>







<div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>    
</body>
</html>






