<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>user list</title>
      <style>
        table {
          border-collapse: collapse;
         }
        td, th {
          border: 1px solid black;
          }
    </style>
  </head> 
  <body>
    <h3>The list of users</h3>
    <table border="1">
      <tr>
        <th>User name</th>
        <th>email</th>
        <th>role</th>
        <th>options</th>
      </tr>
      <?php foreach($users as $user): ?>
      <tr>
        <form action="?" method="post">
        <td><input type="hidden" name="name" value="<?php echo $user['name']; ?>"><?php echo $user['name']; ?></td>
        <td><input type="hidden" name="email" value="<?php echo $user['email']; ?>"><?php echo $user['email']; ?></td>
        <td><input type="hidden" name="role" value="<?php echo $user['role']; ?>"><?php echo $user['role']; ?></td>
        <td>
            <input type="hidden" name="password" value="<?php echo $user['password']; ?>">
            <input type="hidden" name="id" value="<?php echo $user['id'];?>">
            <input type="submit" name="res" value="Edit">
            <input type="submit" name="res" value="Delete">
        </td>
        </form>
      </tr>
      <?php endforeach; ?>
    </table>
    <p><a href="?add">Add new user</a></p>
  </body>
</html>
