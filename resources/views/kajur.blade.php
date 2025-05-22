<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Kajur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        <div class="max-w-7xl mx-auto bg-white shadow-lg rounded-lg p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-semibold text-gray-700">Data Kajur</h2>
                <a href="/kajur/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">+ Tambah Data</a>
            </div>

            @if (session('success'))
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: '{{ session('success') }}',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    });
                </script>
            @endif

            @if (session('error'))
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal!',
                            text: '{{ session('error') }}',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    });
                </script>
            @endif

            <div class="overflow-x-auto">
                <table class="w-full border border-gray-300 mt-4">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="p-2 border">ID Kajur</th>
                            <th class="p-2 border">Nama Kajur</th>
                            <th class="p-2 border">NIDN</th>
                            <th class="p-2 border">Nama Jurusan</th>
                            <th class="p-2 border">ID User</th>
                            <th class="p-2 border w-24">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                            <tr class="text-center">
                                <td class="p-2 border">{{ $item->id_kajur }}</td>
                                <td class="p-2 border">{{ $item->nama_kajur }}</td>
                                <td class="p-2 border">{{ $item->nidn }}</td>
                                <td class="p-2 border">{{ $item->nama_jurusan }}</td>
                                <td class="p-2 border">{{ $item->id_user }}</td>
                                <td class="p-2 border text-center">
                                    <a href="{{ url('kajur/' . $item->id_kajur . '/edit') }}" class="text-blue-500 hover:text-blue-700">✏️</a> |
                                    <form action="{{ url('kajur/' . $item->id_kajur) }}" method="POST" class="inline" id="delete-form-{{ $item->id_kajur }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="confirmDelete('{{ $item->id_kajur }}')" class="text-red-500 hover:text-red-700">🗑️</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center p-4">Tidak ada data.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="mt-4">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Yakin ingin menghapus?',
                text: "Data tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#e3342f',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }
    </script>

</body>
</html>
