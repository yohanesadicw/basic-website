<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Sederhana</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 text-white p-4 text-center text-xl font-bold">
        Selamat Datang di Website Kami
    </header>
    
    <section class="text-center py-20 px-4">
        <h1 class="text-4xl font-bold mb-4">Landing Page Sederhana</h1>
        <p class="text-lg text-gray-700 mb-6">Ini adalah contoh landing page menggunakan Tailwind CSS.</p>
        <a href="#" class="bg-blue-600 text-white px-6 py-2 rounded-lg text-lg hover:bg-blue-700">Pelajari Lebih Lanjut</a>
    </section>
    
    <section class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md mt-10">
        <h2 class="text-2xl font-bold text-center mb-4">Login</h2>
        <form action="login.php" method="POST" class="space-y-4">
            <input type="text" name="username" placeholder="Username" class="w-full p-2 border rounded-lg">
            <input type="password" name="password" placeholder="Password" class="w-full p-2 border rounded-lg">
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Login</button>
        </form>
        <p class="text-center text-gray-600 mt-4">Belum punya akun? <a href="register.php" class="text-blue-600">Daftar</a></p>
    </section>
    
    <section class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md mt-10">
        <h2 class="text-2xl font-bold text-center mb-4">Register</h2>
        <form action="register.php" method="POST" class="space-y-4">
            <input type="text" name="username" placeholder="Username" class="w-full p-2 border rounded-lg">
            <input type="password" name="password" placeholder="Password" class="w-full p-2 border rounded-lg">
            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700">Register</button>
        </form>
    </section>
    
    <footer class="bg-gray-800 text-white text-center p-4 mt-10">
        &copy; 2025 Website Sederhana. Dibuat dengan ❤️ oleh Anda.
    </footer>
</body>
</html>
