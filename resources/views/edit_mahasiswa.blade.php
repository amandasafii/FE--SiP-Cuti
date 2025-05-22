<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .form-input {
            @apply border border-gray-300 p-2 rounded w-full;
        }
    </style>
</head>
<body class="bg-[#FFFDEB] flex">

    <!-- Sidebar -->
    <div class="w-64 bg-[#800000] p-5 text-white h-screen">
        <h1 class="text-xl font-bold">SI CUTI</h1>
        <nav class="mt-5 space-y-2">
            <a href="/dashboard" class="block py-2 px-4 bg-red-500 rounded">🏠 Dashboard</a>
            <a href="/mahasiswa" class="block py-2 px-4 hover:bg-red-500 rounded">🎓 Mahasiswa</a>
            <a href="/kajur" class="block py-2 px-4 hover:bg-red-500 rounded">👨‍🏫 Kajur</a>
            <a href="/cuti" class="block py-2 px-4 hover:bg-red-500 rounded">📄 Cuti</a>
            <a href="/user" class="block py-2 px-4 hover:bg-red-500 rounded">👤 User</a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-10">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-semibold mb-6 text-gray-700">Edit Mahasiswa</h2>
            @foreach ($mahasiswa as $mhs)
                
            <form action="/mahasiswa/{{ $mhs->npm }}" method="POST">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" name="npm" value="{{ $mhs->npm }}" placeholder="NPM" class="form-input" readonly>
                    <input type="text" name="id_user" value="{{ $mhs->id_user }}" placeholder="ID User" class="form-input">
                    <input type="text" name="id_kajur" value="{{ $mhs->id_kajur }}" placeholder="ID Kajur" class="form-input">
                    <input type="text" name="nama_mahasiswa" value="{{ $mhs->nama_mahasiswa }}" placeholder="Nama Mahasiswa" class="form-input">
                    <input type="text" name="tempat_tanggal_lahir" value="{{ $mhs->tempat_tanggal_lahir }}" placeholder="Tempat, Tanggal Lahir" class="form-input">
                    <select name="jenis_kelamin" class="form-input">
                        <option value="Laki-laki" {{ $mhs->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ $mhs->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                    <input type="text" name="alamat" value="{{ $mhs->alamat }}" placeholder="Alamat" class="form-input">
                    <input type="text" name="agama" value="{{ $mhs->agama }}" placeholder="Agama" class="form-input">
                    <input type="text" name="angkatan" value="{{ $mhs->angkatan }}" placeholder="Angkatan" class="form-input">
                    <input type="text" name="program_studi" value="{{ $mhs->program_studi }}" placeholder="Program Studi" class="form-input">
                    <input type="text" name="no_hp" value="{{ $mhs->no_hp }}" placeholder="No HP" class="form-input">
                    <input type="email" name="email" value="{{ $mhs->email }}" placeholder="Email" class="form-input">
                </div>

                <div class="flex justify-between mt-6">
                    <a href="/mahasiswa" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded">
                        Kembali
                    </a>
                    <button type="submit" class="bg-[#800000] hover:bg-red-700 text-white font-semibold py-2 px-6 rounded">
                        Simpan
                    </button>
                </div>
            </form>

            @endforeach
        </div>
    </div>

</body>
</html>
