{{-- File: mahasiswa.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Poppins', sans-serif; }</style>
</head>
<body class="bg-[#FFFDEB] flex">
    <!-- Sidebar -->
<div class="w-64 bg-[#800000] p-5 text-white h-screen">
    <h1 class="text-xl font-bold">SISTEM CUTI</h1>
    <nav class="mt-5">
        <!-- Dashboard tanpa background merah, hanya hover -->
        <a href="/dashboard" class="block py-2 px-4 mb-2 hover:bg-red-500 rounded">🏠 Dashboard</a>
        
        <!-- Mahasiswa dengan hover dan bg merah supaya seolah "aktif" -->
        <a href="/mahasiswa" class="block py-2 px-4 mb-2 bg-red-500 rounded hover:bg-red-700">🎓 Mahasiswa</a>
        
        <a href="/kajur" class="block py-2 px-4 mb-2 hover:bg-red-500 rounded">👨‍🏫 Kajur</a>
        <a href="/cuti" class="block py-2 px-4 mb-2 hover:bg-red-500 rounded">📝 Cuti</a>
        <a href="/user" class="block py-2 px-4 mb-2 hover:bg-red-500 rounded">👤 User</a>
    </nav>
</div>


    <!-- Main Content -->
    <div class="flex-1 p-6 overflow-auto">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-semibold text-gray-700">Data Mahasiswa</h2>
                <a href="/mahasiswa/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">+ Tambah Data</a>
            </div>

            @if (session('success'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Sukses',
                        text: '{{ session('success') }}',
                        timer: 2000,
                        showConfirmButton: false
                    });
                </script>
            @endif

            <div class="overflow-x-auto">
                <table class="w-full table-auto border border-gray-300">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="p-2 border">NPM</th>
                            <th class="p-2 border">User</th>
                            <th class="p-2 border">Kajur</th>
                            <th class="p-2 border">Nama</th>
                            <th class="p-2 border">TTL</th>
                            <th class="p-2 border">JK</th>
                            <th class="p-2 border">Alamat</th>
                            <th class="p-2 border">Agama</th>
                            <th class="p-2 border">Angkatan</th>
                            <th class="p-2 border">Prodi</th>
                            <th class="p-2 border">No HP</th>
                            <th class="p-2 border">Email</th>
                            <th class="p-2 border">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mahasiswa as $mhs)
                            <tr>
                                <td class="p-2 border">{{ $mhs->npm }}</td>
                                <td class="p-2 border">{{ $mhs->id_user }}</td>
                                <td class="p-2 border">{{ $mhs->id_kajur }}</td>
                                <td class="p-2 border">{{ $mhs->nama_mahasiswa }}</td>
                                <td class="p-2 border">{{ $mhs->tempat_tanggal_lahir }}</td>
                                <td class="p-2 border">{{ $mhs->jenis_kelamin }}</td>
                                <td class="p-2 border">{{ $mhs->alamat }}</td>
                                <td class="p-2 border">{{ $mhs->agama }}</td>
                                <td class="p-2 border">{{ $mhs->angkatan }}</td>
                                <td class="p-2 border">{{ $mhs->program_studi }}</td>
                                <td class="p-2 border">{{ $mhs->no_hp }}</td>
                                <td class="p-2 border">{{ $mhs->email }}</td>
                                <td class="p-2 border">
                                    <a href="/mahasiswa/{{ $mhs->npm }}/edit" class="text-blue-600">✏️</a>
                                    <form action="/mahasiswa/{{ $mhs->npm }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Yakin hapus?')" class="text-red-600">🗑️</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
