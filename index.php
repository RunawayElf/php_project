<?php
  include_once $_SERVER['DOCUMENT_ROOT'] . '/php_pro/db_config/db.inc.php';

try  
{
   $sql = "SELECT name, description FROM role";
   $result = $pdo->query($sql);
}
catch (PDOException $e)
{
   $error = "error while fething roles";
   include 'error.html.php';
   exit();
}
foreach ($result as $row)
{
 $roles[] = array("name" => $row['name'], "description" => $row ['description']);
}
    
if (isset($_GET['add']))
{
    $title = "Add New User";
    $name = "";
    $email = "";
    $password = "";
    $rolee = "";
    $act = "?adduser";
    $button = "Add";
    $id = "";
  include 'form.html.php';
  exit();
}

if (isset($_POST['res']) && $_POST['res'] == 'Edit')
{
  $title = "Edit User";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $rolee = $_POST['role'];
  $act = "?edituser";
  $button = "Edit";
  $id = $_POST['id'];
  include 'form.html.php';
  exit();
}

if (isset($_POST['res']) && $_POST['res'] == 'Delete')
{
  try
    {
      $sql = "DELETE FROM users WHERE id = :id";
      $s = $pdo->prepare($sql);
      $s->bindValue(':id', $_POST['id']);
      $s->execute();
    }
  catch (PDOException $e)
    {
      $error = "Error while deleting the user";
      include 'error.html.php';
      exit();
    }
  header('Location: index.php');
  exit();
} 

if (isset($_GET['edituser']))
{
  try
  {
    $sql = "UPDATE users SET
        name = :name,
        email = :email,
        password = :password,
        role = :role WHERE id = :id";
    $s = $pdo->prepare($sql);
    $s->bindValue(':name', $_POST['uname']);
    $s->bindValue(':email', $_POST['email']);
    $s->bindValue(':password', $_POST['password']);
    $s->bindValue(':role', $_POST['urole']);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
}
  catch (PDOException $e)
  {
    $error = 'Error while editing the user';
    include 'error.html.php';
    exit();
  }
  
  header('Location: index.php');
  exit();
}
if (isset($_GET['adduser']))
{
  try
  {
    $sql = "INSERT INTO users SET 
        name = :name,
        email = :email,
        password = :password,
        role = :role";
    $s = $pdo->prepare($sql);
    $s->bindValue(':name', $_POST['uname']);
    $s->bindValue(':email', $_POST['email']);
    $s->bindValue(':password', $_POST['password']);
    $s->bindValue(':role', $_POST['urole']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error while adding the user';
    include 'error.html.php';
    exit();
  }
  
  header('Location: index.php');
  exit();
}

try
{
  $sql = 'SELECT id, name, email, password, role FROM users';
  $result = $pdo->query($sql);
}
catch(PDOException $e)
{
 $error = "Error while fetching the users" . $e->getMessage();
 include 'error.html.php';
 exit();
}

foreach ($result as $row)
{
  $users[] = array('id' => $row['id'],
      'name' => $row['name'],
      'email' => $row['email'],
      'password' =>$row['password'],
      'role' => $row['role']);
}
  
include 'ulist.html.php';
