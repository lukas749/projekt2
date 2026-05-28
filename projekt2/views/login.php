<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel= "stylesheet" href = "/projekt2/public/css/style.css">
    <title>Document</title>

<style>
    body{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

form{
    width:650px;
    border: 1px solid #bababa;
    padding: 40px 60px;
    border-radius: 8px;
}
</style>


</head>
<body>
<form action="/projekt2/public/login" method="POST">
    <h2 class="text-center fw-bold fs-2">Login</h2>

    <div class="mb-3">
    <label for="username" class="form-label">Username:</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
  <div class="mb-5">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name= "password">
  </div>
  <div class="mb-2">
    <button type="submit" class="btn btn-primary">Login</button>
  </div>
  <p>Nemáte účet? <a href="/projekt2/public/register">Registration</a></p>
  
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> 
</body>
</html>



