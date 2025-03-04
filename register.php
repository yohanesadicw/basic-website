<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'database_name');
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// login.php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user;
        header('Location: dashboard.php');
    } else {
        echo "Login gagal!";
    }
}

// register.php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    $query = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $username, $password);
    if ($stmt->execute()) {
        echo "Registrasi berhasil!";
    } else {
        echo "Registrasi gagal!";
    }
}
?>
