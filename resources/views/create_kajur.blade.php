<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Kajur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-[#FFFDEB] flex">

    <!-- Sidebar -->
    <div class="w-64 bg-[#800000] p-5 text-white h-screen">
        <h1 class="text-xl font-bold">SI CUTI</h1>
        <nav class="mt-6 space-y-2">
            <a href="/dashboard" class="block px-4 py-2 rounded hover:bg-red-500">🏠 Dashboard</a>
            <a href="/mahasiswa" class="block px-4 py-2 rounded hover:bg-red-500">🎓 Mahasiswa</a>
            <a href="/kajur" class="block px-4 py-2 font-bold bg-red-500 rounded">👨‍💼 Kajur</a>
            <a href="/cuti" class="block px-4 py-2 rounded hover:bg-red-500">📄 Cuti</a>
            <a href="/user" class="block px-4 py-2 rounded hover:bg-red-500">👤 User</a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6">
        <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-semibold text-gray-700 mb-6">Tambah Data Kajur</h2>

            <form action="{{ url('/kajur') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label for="id_kajur" class="block font-semibold mb-1">ID Kajur</label>
                    <input type="text" name="id_kajur" id="id_kajur" value="{{ old('id_kajur') }}"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500" required>
                    @error('id_kajur')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="nama_kajur" class="block font-semibold mb-1">Nama Kajur</label>
                    <input type="text" name="nama_kajur" id="nama_kajur" value="{{ old('nama_kajur') }}"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500" required>
                    @error('nama_kajur')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="nidn" class="block font-semibold mb-1">NIDN</label>
                    <input type="text" name="nidn" id="nidn" value="{{ old('nidn') }}"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500" required>
                    @error('nidn')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="nama_jurusan" class="block font-semibold mb-1">Nama Jurusan</label>
                    <input type="text" name="nama_jurusan" id="nama_jurusan" value="{{ old('nama_jurusan') }}"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500" required>
                    @error('nama_jurusan')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="id_user" class="block font-semibold mb-1">ID User</label>
                    <input type="text" name="id_user" id="id_user" value="{{ old('id_user') }}"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500" required>
                    @error('id_user')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-between mt-6">
                    <a href="{{ url('/kajur') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 px-6 rounded transition">Kembali</a>
                    <button type="submit" class="bg-red-700 hover:bg-red-800 text-white font-semibold py-2 px-6 rounded transition">Simpan</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
