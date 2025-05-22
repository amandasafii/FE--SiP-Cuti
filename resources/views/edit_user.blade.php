<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Edit User</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-[#FFFDEB] flex min-h-screen">

    <!-- Sidebar -->
    <div class="w-64 bg-[#990000] p-5 text-white h-screen border-r-4 border-[#4d0000] fixed">
        <h1 class="text-xl font-bold mb-8">SI CUTI</h1>
        <nav class="space-y-2">
            <a href="/dashboard" class="block py-2 px-4 hover:bg-red-500 rounded">🏠 Dashboard</a>
            <a href="/mahasiswa" class="block py-2 px-4 hover:bg-red-500 rounded">🎓 Mahasiswa</a>
            <a href="/kajur" class="block py-2 px-4 hover:bg-red-500 rounded">👨‍💼 Kajur</a>
            <a href="/cuti" class="block py-2 px-4 hover:bg-red-500 rounded">📝 Cuti</a>
            <a href="/user" class="block py-2 px-4 bg-red-500 rounded font-bold">👤 User</a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 ml-64 flex flex-col min-h-screen">
        <!-- Navbar -->
        <div class="bg-[#4d0000] text-white p-4 flex justify-between items-center shadow-md">
            <h2 class="text-lg font-bold">Edit User</h2>
            <span>Manajemen Data User</span>
        </div>

        <!-- Content -->
        <div class="flex-grow flex items-center justify-center p-8">
            <form action="/user/{{ $user['id_user'] }}" method="POST" class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
                @csrf
                @method('PUT')

                <div class="mb-5">
                    <label for="id_user" class="block text-sm font-semibold mb-1">ID User</label>
                    <input
                        type="text"
                        name="id_user"
                        id="id_user"
                        value="{{ $user['id_user'] }}"
                        readonly
                        class="w-full border border-gray-300 rounded px-3 py-2 bg-gray-100 cursor-not-allowed"
                    />
                </div>

                <div class="mb-5">
                    <label for="username" class="block text-sm font-semibold mb-1">Username</label>
                    <input
                        type="text"
                        name="username"
                        id="username"
                        value="{{ $user['username'] }}"
                        required
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500"
                    />
                </div>

                <div class="mb-5">
                    <label for="password" class="block text-sm font-semibold mb-1">Password (Kosongkan jika tidak ingin mengubah)</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500"
                    />
                </div>

                <div class="mb-7">
                    <label for="level" class="block text-sm font-semibold mb-1">Level</label>
                    <select
                        name="level"
                        id="level"
                        required
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500"
                    >
                        <option value="admin" {{ $user['level'] == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="mahasiswa" {{ $user['level'] == 'mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
                        <option value="kajur" {{ $user['level'] == 'kajur' ? 'selected' : '' }}>Kajur</option>
                    </select>
                </div>

                <div class="flex justify-between">
                    <a href="/user" class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded transition">Kembali</a>
                    <button type="submit" class="bg-[#990000] hover:bg-[#b30000] text-white px-5 py-2 rounded transition">Simpan</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
