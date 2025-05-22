<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard SI Cuti</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-[#FFFDEB] flex">

    <!-- Sidebar -->
    <!-- Sidebar -->
        <div class="w-64 bg-[#800000] p-5 text-white h-screen">
            <h1 class="text-xl font-bold">SI CUTI</h1>
            <nav class="mt-5 space-y-2">
                <a href="/" class="block py-2 px-4 font-bold bg-red-500 rounded hover:bg-red-400">🏠 Dashboard</a>
                <a href="/mahasiswa" class="block py-2 px-4 hover:bg-red-500 rounded">🎓 Mahasiswa</a>
                <a href="/kajur" class="block py-2 px-4 hover:bg-red-500 rounded">👨‍💼 Kajur</a>
                <a href="/cuti" class="block py-2 px-4 hover:bg-red-500 rounded">📝 Cuti</a>
                <a href="/user" class="block py-2 px-4 hover:bg-red-500 rounded">👤 User</a>
            </nav>
        </div>


    <!-- Main Content -->
    <div class="flex-1">
        <!-- Navbar -->
        <div class="bg-[#800000] text-white p-4 flex justify-between items-center">
            <h2 class="text-lg font-bold">Dashboard</h2>
            <span>Selamat datang di Sistem Informasi Cuti</span>
        </div>

        <!-- Content -->
        <div class="p-8">
            <div class="bg-white p-6 rounded shadow-md">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Informasi Sistem</h3>
                <p class="text-gray-600">Gunakan menu di sebelah kiri untuk mengelola data Mahasiswa, Kajur, dan Cuti.</p>
            </div>
        </div>
    </div>
</body>
</html>
