<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="wrapper py-3">
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required> 
                </div>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="password" name="password" placeholder="Password" required> 
                </div>
                <div class="col">
                <form action="save.php" method="POST">
                <input type="hidden" name="action" value="save">
                <input type="hidden" name="user_id" value="" >
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </form>
</div>
<h1>Users list</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Username</th>
      <th scope="col">Role</th>
      <th scope="col">Created_at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    <?php foreach ($users as $user) :?>
    <tr>    
        <td><?= $user->getId(); ?></td>
        <td><?= $user->getUsername(); ?></td>
        <td><?= $user->getRole(); ?></td>
        <td><?= $user->getCreatedAt(); ?></td>
        <td>
        <form action="delete.php" method="POST"> 
            <input type="hidden" name="action" value="delete">
            <input type="hidden" name="user_id" value="<?= $user->getId(); ?>" >
            <button type = "submit" class = "btn btn-danger">Delete</button>
        </form>
        <form action= "info.php" method="POST">
            <input type="hidden" name="action" value="info">
            <input type="hidden" name="user_id" value="<?= $user->getId(); ?>" >    
            <button type="submit" class="btn btn-info">Info</button>
         </form>
        <form action = "update.php" method="POST">  
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="user_id" value="<?= $user->getId(); ?>" >
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </td>

    </tr>
        
    <?php endforeach;?>
  <tbody>

  </tbody>
</table>
    </div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>