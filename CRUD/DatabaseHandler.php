<?php

class DatabaseHandler {
    private $server = 'localhost';
    private $username = 'root';
    private $password;
    private $database = 'ovo';
    public $conn;
    public function __construct()
    {
        return $this->connect();
    }

    public function connect(){
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
        } catch (Exception $ex) {
            echo 'connection failed' . $ex->getMessage();
        }
    }

    public function getTableData($tableName)
    {
        $data = null;
        $query = "SELECT * FROM $tableName";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function insertForm()
    {
        if (isset($_POST['contact-submit'])) {
            $username = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            if (empty($username) || empty($email) || empty($message)) {
                echo "<script>alert('All fields are required');</script>";
                return;
            }
            $query = "INSERT INTO ContactFormSubmissions(contactName, contactEmail, contactMessage) VALUES ('$username','$email', '$message')";
            if ($sql = $this->conn->query($query)) {
                echo "<script>alert('Contact form submited successfully');</script>";
            } else {
                echo "<script>alert('Contact submition failed');</script>";
            }
        }
    }

    public function insertUser()
    {
        if (isset($_POST['signup-submit'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            if (empty($username) || empty($email) || empty($password)) {
                echo "<script>alert('All fields are required');</script>";
                return;
            }
            $query = "INSERT INTO UserTable(userName, userEmail, userPassword, userRole) VALUES ('$username','$email', '$password', 'simple')";
            if ($sql = $this->conn->query($query)) {
                echo "<script>alert('Registered successfully');</script>";
                echo "<script>window.location.href = 'signin.php';</script>";
            } else {
                echo "<script>alert('Register failed');</script>";
                echo "<script>window.location.href = 'signup.php';</script>";
            }
        }
    }
}
$dbHandler = new DatabaseHandler();
$formData = $dbHandler->getTableData('ContactFormSubmissions');
$userData = $dbHandler->getTableData('UserTable');
$clothesData = $dbHandler->getTableData('ClothesTable');
$storesData = $dbHandler->getTableData('StoresTable');