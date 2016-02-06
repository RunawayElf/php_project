<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
  </head>
  <body>
    <h1><?php echo $title; ?></h1>
    <form action="<?php echo $act; ?>" method="post">
    <div>
      <label for="name">Name: <input type="text" name="uname" id="name" value="<?php echo $name; ?>"></label>
    </div>
    <div>
      <label for="email">E-mail: <input type="text" name="email" id="Email" value="<?php echo $email; ?>"></label>
    </div>
    <div>
      <label for="password">Password: <input type="password" name="password" id="pass" value="<?php echo $password; ?>"></label>
    </div>
    <div>
      <select name="urole" id="urole">
        <option value="">Select one</option>
        <?foreach ($roles as $role): ?>
          <option value="<?php echo $role['name']; ?>" 
            <?php if($role['name'] == $rolee)
            echo " selected"; ?>>
              <?php echo $role['name']; ?> 
          </option>
        <?php endforeach; ?>
      </select>
    </div>
    <div>
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <input type="submit" value="<?php echo $button; ?>">
    </div>
   </form>
   
  </body>
</html>
