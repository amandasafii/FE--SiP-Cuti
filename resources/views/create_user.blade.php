<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah User</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-[#FFFDEB] flex">

    <!-- Sidebar -->
    <div class="w-64 bg-[#990000] p-5 text-white h-screen border-r-4 border-[#4d0000]">
        <h1 class="text-xl font-bold">SI CUTI</h1>
        <nav class="mt-5 space-y-2">
            <a href="/dashboard" class="block py-2 px-4 hover:bg-red-500 rounded">🏠 Dashboard</a>
            <a href="/mahasiswa" class="block py-2 px-4 hover:bg-red-500 rounded">🎓 Mahasiswa</a>
            <a href="/kajur" class="block py-2 px-4 hover:bg-red-500 rounded">👨‍💼 Kajur</a>
            <a href="/cuti" class="block py-2 px-4 hover:bg-red-500 rounded">📝 Cuti</a>
            <a href="/user" class="block py-2 px-4 bg-red-500 rounded font-bold">👤 User</a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1">
        <!-- Navbar -->
        <div class="bg-[#4d0000] text-white p-4 flex justify-between items-center shadow-md">
            <h2 class="text-lg font-bold">Tambah User</h2>
            <span>Formulir Penambahan User</span>
        </div>

        <!-- Form Content -->
        <div class="flex justify-center items-start p-8">
            <form action="/user" method="POST" class="bg-white p-8 rounded shadow-md w-full max-w-md">
                @csrf

                <!-- Hilangkan input id_user atau ganti jadi hidden kosong -->
                <input type="hidden" name="id_user" value="">

                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium mb-1">Username</label>
                    <input type="text" name="username" id="username" required class="w-full p-2 border border-gray-300 rounded">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium mb-1">Password</label>
                    <input type="password" name="password" id="password" required class="w-full p-2 border border-gray-300 rounded">
                </div>

                <div class="mb-6">
                    <label for="level" class="block text-sm font-medium mb-1">Level</label>
                    <select name="level" id="level" required class="w-full p-2 border border-gray-300 rounded">
                        <option value="">-- Pilih Level --</option>
                        <option value="admin">Admin</option>
                        <option value="mahasiswa">Mahasiswa</option>
                        <option value="kajur">Kajur</option>
                    </select>
                </div>

                <div class="flex justify-between">
                    <a href="/user" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Kembali</a>
                    <button type="submit" class="bg-[#990000] text-white px-4 py-2 rounded hover:bg-red-700">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
