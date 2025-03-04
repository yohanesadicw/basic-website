<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 text-white p-4 text-center text-xl font-bold">
        Selamat Datang, <?php echo htmlspecialchars($user['username']); ?>
    </header>
    
    <section class="text-center py-20 px-4">
        <h1 class="text-3xl font-bold mb-4">Dashboard</h1>
        <p class="text-lg text-gray-700 mb-6">Anda telah berhasil login.</p>
        <a href="logout.php" class="bg-red-600 text-white px-6 py-2 rounded-lg text-lg hover:bg-red-700">Logout</a>
    </section>
</body>
</html>
