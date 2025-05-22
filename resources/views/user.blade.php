<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data User</title>
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
            <h2 class="text-lg font-bold">Data User</h2>
            <span>Manajemen Data User</span>
        </div>

        <!-- Content -->
        <div class="p-8">
            <a href="/user/create" class="bg-[#800000] text-white py-2 px-4 rounded text-sm font-semibold inline-block">+ Tambah User</a>

            <div class="overflow-x-auto mt-6">
                <table class="min-w-full bg-white border border-gray-200 text-sm text-center">
                    <thead>
                        <tr class="bg-[#990000] text-white">
                            <th class="py-2 px-4 border">ID User</th>
                            <th class="py-2 px-4 border">Username</th>
                            <th class="py-2 px-4 border">Password</th>
                            <th class="py-2 px-4 border">Level</th>
                            <th class="py-2 px-4 border">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $u)
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4 border">{{ $u["id_user"] }}</td>
                            <td class="py-2 px-4 border">{{ $u["username"] }}</td>
                            <td class="py-2 px-4 border">{{ $u["password"] }}</td>
                            <td class="py-2 px-4 border">{{ $u["level"] }}</td>
                            <td class="py-2 px-4 border">
                                <div class="flex justify-center items-center gap-2">
                                    <a href="/user/{{ $u['id_user'] }}/edit" class="bg-orange-500 text-white px-3 py-1 rounded text-xs hover:bg-orange-600 transition">Edit</a>
                                    <form action="/user/{{ $u['id_user'] }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded text-xs hover:bg-red-700 transition">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="py-4 px-4 text-center text-gray-500">Tidak ada data user</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
