<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Tambah Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .sidebar { background-color: #800000; min-height: 100vh; }
        .sidebar a { display: block; padding: 12px 16px; color: white; font-weight: 600; border-radius: 4px; margin-bottom: 8px; transition: background-color 0.3s; text-decoration: none; }
        .sidebar a:hover { background-color: #b22222; }
        .sidebar a.mahasiswa:hover { background-color: #ff4c4c; }
        .sidebar a:not(.mahasiswa):hover { background-color: #a52a2a; }
    </style>
</head>
<body class="bg-[#FFFDEB] flex">

    <!-- Sidebar -->
    <div class="sidebar w-64 p-6 text-white">
        <h1 class="text-2xl font-bold mb-8">SI CUTI</h1>
        <nav>
            <a href="/dashboard" class="dashboard">🏠 Dashboard</a>
            <a href="/mahasiswa" class="mahasiswa bg-[#ff4c4c]">🎓 Mahasiswa</a>
            <a href="/kajur" class="kajur">👨‍🏫 Kajur</a>
            <a href="/cuti" class="cuti">📄 Cuti</a>
            <a href="/user" class="user">👤 User</a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-10">
        <h1 class="text-3xl font-bold text-[#800000] mb-6">Tambah Data Mahasiswa</h1>

        {{-- Error Handling --}}
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                <strong>Terjadi kesalahan:</strong>
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/mahasiswa') }}" method="POST" class="bg-white p-6 rounded shadow space-y-6 max-w-4xl">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="npm" class="block mb-1 font-semibold text-gray-700">NPM</label>
                    <input type="text" id="npm" name="npm" value="{{ old('npm') }}" required
                        class="border border-gray-300 rounded p-2 w-full focus:outline-none focus:ring-2 focus:ring-[#800000]" />
                </div>

                <div>
                    <label for="id_user" class="block mb-1 font-semibold text-gray-700">ID User</label>
                    <input type="text" id="id_user" name="id_user" value="{{ old('id_user') }}" required
                        class="border border-gray-300 rounded p-2 w-full focus:outline-none focus:ring-2 focus:ring-[#800000]" />
                </div>

                <div>
                    <label for="id_kajur" class="block mb-1 font-semibold text-gray-700">ID Kajur</label>
                    <input type="text" id="id_kajur" name="id_kajur" value="{{ old('id_kajur') }}" required
                        class="border border-gray-300 rounded p-2 w-full focus:outline-none focus:ring-2 focus:ring-[#800000]" />
                </div>

                <div>
                    <label for="nama_mahasiswa" class="block mb-1 font-semibold text-gray-700">Nama Mahasiswa</label>
                    <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" value="{{ old('nama_mahasiswa') }}" required
                        class="border border-gray-300 rounded p-2 w-full focus:outline-none focus:ring-2 focus:ring-[#800000]" />
                </div>

                <div>
                    <label for="tempat_tanggal_lahir" class="block mb-1 font-semibold text-gray-700">Tempat, Tanggal Lahir</label>
                    <input type="text" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir" value="{{ old('tempat_tanggal_lahir') }}" required
                        class="border border-gray-300 rounded p-2 w-full focus:outline-none focus:ring-2 focus:ring-[#800000]" />
                </div>

                <div>
                    <label for="jenis_kelamin" class="block mb-1 font-semibold text-gray-700">Jenis Kelamin</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" required
                        class="border border-gray-300 rounded p-2 w-full focus:outline-none focus:ring-2 focus:ring-[#800000]">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>

                <div>
                    <label for="alamat" class="block mb-1 font-semibold text-gray-700">Alamat</label>
                    <input type="text" id="alamat" name="alamat" value="{{ old('alamat') }}" required
                        class="border border-gray-300 rounded p-2 w-full focus:outline-none focus:ring-2 focus:ring-[#800000]" />
                </div>

                <div>
                    <label for="agama" class="block mb-1 font-semibold text-gray-700">Agama</label>
                    <input type="text" id="agama" name="agama" value="{{ old('agama') }}" required
                        class="border border-gray-300 rounded p-2 w-full focus:outline-none focus:ring-2 focus:ring-[#800000]" />
                </div>

                <div>
                    <label for="angkatan" class="block mb-1 font-semibold text-gray-700">Angkatan</label>
                    <input type="text" id="angkatan" name="angkatan" value="{{ old('angkatan') }}" required
                        class="border border-gray-300 rounded p-2 w-full focus:outline-none focus:ring-2 focus:ring-[#800000]" />
                </div>

                <div>
                    <label for="program_studi" class="block mb-1 font-semibold text-gray-700">Program Studi</label>
                    <input type="text" id="program_studi" name="program_studi" value="{{ old('program_studi') }}" required
                        class="border border-gray-300 rounded p-2 w-full focus:outline-none focus:ring-2 focus:ring-[#800000]" />
                </div>

                <div>
                    <label for="no_hp" class="block mb-1 font-semibold text-gray-700">No HP</label>
                    <input type="text" id="no_hp" name="no_hp" value="{{ old('no_hp') }}" required
                        class="border border-gray-300 rounded p-2 w-full focus:outline-none focus:ring-2 focus:ring-[#800000]" />
                </div>

                <div>
                    <label for="email" class="block mb-1 font-semibold text-gray-700">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                        class="border border-gray-300 rounded p-2 w-full focus:outline-none focus:ring-2 focus:ring-[#800000]" />
                </div>
            </div>

            <div class="mt-6 flex justify-between">
                <a href="{{ url('/mahasiswa') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded">
                    Kembali
                </a>
                <button type="submit" class="bg-[#800000] hover:bg-[#b22222] text-white font-semibold py-2 px-6 rounded">
                    Simpan
                </button>
            </div>
        </form>
    </div>

</body>
</html>
