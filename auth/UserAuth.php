<?php
include '../CRUD/DatabaseHandler.php';

class UserAuth
{
  private $username;
  private $password;
  private $dbHandler;

  public function __construct($username, $password)
  {
    $this->username = $username;
    $this->password = $password;
    $this->dbHandler = new DatabaseHandler();
  }

  public function signin()
  {
    if (empty($this->username) || empty($this->password)) {
      echo "Fill all fields";
    } else {
      $allUsers = $this->dbHandler->getTableData('UserTable');
      $isUserFound = false;
      foreach ($allUsers as $user) {
        if ($this->username == $user['userName'] && $this->password == $user['userPassword']) {
          $isUserFound = true;
          session_start();
          $_SESSION['userName'] = $this->username;
          $_SESSION['userPassword'] = $this->password;
          $_SESSION['userRole'] = $user['userRole'];
          if (isset($_SESSION['userRole']) && $_SESSION['userRole'] == 'admin') {
            header("location:../views/dashboard.php");
            exit();
          }
          header("location:../views/products.php");
          exit();
        }
      }
      if (!$isUserFound) {
        echo "<script>alert('Incorrect username or password');</script>";
        echo "<script>window.location.href = '../views/signin.php';</script>";
        exit();
      }
    }
  }
}

if (isset($_POST['signin-submit'])) {
  $user = new UserAuth($_POST['username'], $_POST['password']);
  $user->signin();
}
