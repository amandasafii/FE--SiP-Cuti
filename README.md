# 🌸 Frontend SI CUTI — Panduan Awal Pembuatan Project Laravel 💻🎨

Haiii! 👋 Selamat datang di dokumentasi Frontend **SI CUTI** ✨  
Dokumentasi ini dibuat untuk membantu membangun frontend Laravel dari awal dan menghubungkannya dengan backend. Yuk kita mulai! 💪

---

## 🚀 Langkah 1: Clone Repository Backend 🌐

Sebelum membuat frontend, kita perlu jalankan backend dulu.

> 🔗 **Link Repository Backend**: [https://github.com/Alledanaralle/PBF](https://github.com/Alledanaralle/PBF)

### ✅ Cara Clone:
```masuk ke terminal Laragon
git clone https://github.com/Alledanaralle/PBF.git
cd PBF
composer install
php spark serve
```

## 📡Langkah 2: Cek Endpoint USER lewat Laravel & Postman👤

Setelah backend Laravel berjalan, kamu bisa cek apakah endpoint API-nya sudah aktif menggunakan Postman! 🛠️  
Berikut ini daftar lengkap endpoint yang bisa kamu pakai untuk entity USER:

---

### 🔗 Daftar Endpoint USER

| Method | Endpoint                            | Keterangan                  |
|--------|-------------------------------------|------------------------------|
| GET    | `http://localhost:8080/user`        | Ambil semua user             |
| GET    | `http://localhost:8080/user/{id}`   | Ambil user berdasarkan ID    |
| POST   | `http://localhost:8080/user`        | Tambah user baru             |
| PUT    | `http://localhost:8080/user/{id}`   | Edit data user               |
| DELETE | `http://localhost:8080/user/{id}`   | Hapus user                   |

---

## 🧪 Cara Tes Endpoint USER di Postman 🧡

1. Buka aplikasi **Postman**.
2. Pilih method sesuai kebutuhan: `GET`, `POST`, `PUT`, atau `DELETE`.
3. Masukkan URL seperti contoh berikut:

   - **GET semua user:**  
     ```
     http://localhost:8080/user
     ```

   - **GET user berdasarkan ID:**  
     ```
     http://localhost:8080/user/1
     ```

   - **POST tambah user:**  
     ```
     http://localhost:8080/user
     ```

   - **PUT edit user:**  
     ```
     http://localhost:8080/user/1
     ```

   - **DELETE hapus user:**  
     ```
     http://localhost:8080/user/1
     ```

4. Untuk method **POST** dan **PUT**:
   - Klik tab **Body**
   - Pilih **raw**
   - Pilih format **JSON**
   - Masukkan data contoh seperti ini:

```json
{
  "name": "Amanda",
  "email": "amannda@example.com",
  "password": "password123"
}
```

### ▶️ Klik tombol Send di Postman

Setelah kamu mengisi method, URL, dan body (jika perlu), klik tombol **Send** ▶️ di Postman.

Lihat respon dari server di bagian bawah.  
Kalau berhasil, akan muncul data user atau pesan sukses seperti:

```arduino
"Data berhasil disimpan"
```

## ⚙️ Langkah 3: Membuat Project Laravel via Quick App di Laragon 🐣

Kamu bisa bikin project Laravel super cepat hanya dalam hitungan detik pakai fitur **Quick App** di Laragon! ⚡  
Ikuti langkah-langkah di bawah ini~ 🧁

---

### 🐾 Step by Step Bikin Project Laravel:

1. **Buka aplikasi Laragon** 💻  
   Pastikan Laragon kamu sudah berjalan (warna tombol hijau "Started").

2. Klik menu **Menu ➡️ Quick App ➡️ Laravel**  
   ![Quick App Laravel](https://i.imgur.com/NoY3yUG.png)

3. Masukkan **nama project** Laravel kamu, misalnya: FE-SiPCuti

4. Klik **OK** ✅  
Tunggu beberapa detik... dan taraaaa~ 🎉 Laravel kamu langsung dibuat otomatis!

---

### 📁 Struktur Folder Project

Setelah selesai, kamu bisa lihat folder project kamu di:  
C:\laragon\www\FE-SiPCuti

## 🔥 Langkah 4: Menyalakan Server Laravel & Menambahkan View, Controller, dan Routes 🧁

Setelah kamu punya project Laravel `FE-SiPCuti`, sekarang kita mulai ngoding dan menyalakan servernya yuk! 💻✨

---

### 🚀 Menyalakan Server Laravel

1. **Buka CMD atau Terminal**
2. Masuk ke folder project Laravel kamu:
   ```bash
   cd C:\laragon\www\FE-SiPCuti
3. Jalankan Laravel server:

```bash
php artisan serve
```
4. Setelah menjalankan perintah tersebut, akan muncul output seperti ini:
Starting Laravel development server: http://127.0.0.1:8000

5. Buka browser kamu dan akses:
http://127.0.0.1:8000

### 🚀 Menambahkan View, Controllers dan Routes 

**1. Membuat File View**

Buat file view di:

resources/views/dashboard.blade.php

resources/views/user.blade.php

resources/views/edit_user.blade.php

resources/views/create_user.blade.php

resources/views/mahasiswa.blade.php

resources/views/edit_mahasiswa.blade.php

resources/views/create_mahasiswa.blade.php

Isi file `dashboard.blade.php` dengan kode berikut:
```blade
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

```
Isi file `user.blade.php` dengan kode berikut:

```blade
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
```

Isi file `edit_user.php` dengan kode berikut:
```blade
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
```

Isi file `create_user.blade.php` dengan kode berikut:
```blade
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
```
**2. Membuat Controller dengan query**
   Jalankan perintah di terminal untuk membuat controller:
   ```
   php artisan make:controller UserController
   ```
**3. Isikan tiap fungsi pada UserController dengan menarik API Backend supaya bisa menampilkan data dan melakukan CRUD. Berikut adalah codenya :**
   ```
   <?php

    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Http;
    
    class UserController extends Controller
    {
    /**
     * TAMPILKAN SEMUA DATA USER
     *
     * Mengambil data semua user dari API backend
     * dan menampilkannya di view 'user.blade.php'
     */
    public function index()
    {
        // Mengirim HTTP GET request ke endpoint API user
        $response = Http::get('http://localhost:8080/user');
        
        // Mengubah response JSON menjadi array PHP
        $users = $response->json();

        // Mengirim data user ke view
        return view('user', compact('users'));
    }

    /**
     * TAMPILKAN FORM TAMBAH USER
     *
     * Menampilkan form untuk menambahkan user baru
     */
    public function create()
    {
        return view('create_user');
    }

    /**
     * SIMPAN DATA BARU KE API
     *
     * Mengirim data form tambah user ke API backend menggunakan HTTP POST
     */
    public function store(Request $request)
    {
        // Mengirim request POST ke API dengan data dari form
        $response = Http::asForm()->post('http://localhost:8080/user', [
            'username' => $request->username,
            'password' => $request->password,
            'level' => $request->level,
        ]);

        // Cek apakah berhasil atau gagal
        if ($response->successful()) {
            return redirect('/user')->with('success', 'Data user berhasil ditambahkan.');
        } else {
            return back()->with('error', 'Gagal menambah data user.');
        }
    }

    /**
     * TAMPILKAN FORM EDIT USER
     *
     * Mengambil data user berdasarkan ID dan menampilkannya dalam form edit
     */
    public function edit($id)
    {
        // Ambil semua data user dari API
        $response = Http::get("http://localhost:8080/user");
        $users = $response->json();

        // Cari user yang sesuai dengan ID
        $user = collect($users)->firstWhere('id_user', $id);

        // Jika user ditemukan, tampilkan form edit
        if ($user) {
            return view('edit_user', compact('user'));
        } else {
            // Jika tidak ditemukan, kembalikan ke halaman user dengan pesan error
            return redirect('/user')->with('error', 'User tidak ditemukan.');
        }
    }

    /**
     * SIMPAN PERUBAHAN USER
     *
     * Mengirim data update user ke API backend menggunakan HTTP PUT
     */
    public function update(Request $request, $id)
    {
        // Data dasar yang akan dikirim
        $data = [
            'username' => $request->username,
            'level' => $request->level,
        ];

        // Jika password diisi, tambahkan ke data
        if ($request->filled('password')) {
            $data['password'] = $request->password;
        }

        // Kirim request PUT ke API dengan data yang diperbarui
        $response = Http::asForm()->put("http://localhost:8080/user/{$id}", $data);

        // Cek apakah berhasil atau tidak
        if ($response->successful()) {
            return redirect('/user')->with('success', 'Data user berhasil diperbarui.');
        } else {
            return back()->with('error', 'Gagal memperbarui data user.');
        }
    }

    /**
     * HAPUS USER
     *
     * Menghapus user berdasarkan ID dengan mengirim HTTP DELETE ke API
     */
    public function destroy($id)
    {
        // Kirim request DELETE ke API
        $response = Http::delete("http://localhost:8080/user/{$id}");

        // Cek hasil response
        if ($response->successful()) {
            return redirect('/user')->with('success', 'Data user berhasil dihapus.');
        } else {
            return redirect('/user')->with('error', 'Gagal menghapus data user.');
        }
    }
    }
```

**4. Buatkan Routes untuk user dengan code berikut :**
```
// User
use App\Http\Controllers\UserController;
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user', [UserController::class, 'store']);
Route::get('/user/{id}/edit', [UserController::class, 'edit']);
Route::put('/user/{id}', [UserController::class, 'update']);
Route::delete('/user/{id}', [UserController::class, 'destroy']);
```
## **⚙️ Cara Menjalankan Aplikasi Laravel - Halaman User**
Ikuti langkah-langkah di bawah ini untuk menjalankan aplikasi Laravel dan mengakses fitur User Management melalui browser:

✅ 1. Pastikan Backend API Aktif
Sebelum menjalankan frontend Laravel, pastikan backend API sudah berjalan di:
```
http://localhost:8080/user
```

🚀 2. Jalankan Laravel
Buka terminal dan arahkan ke folder root project Laravel kamu, lalu jalankan perintah:
```
php artisan serve
```
Jika berhasil, terminal akan menampilkan:
```
Starting Laravel development server: http://127.0.0.1:8000
```

🌐 3. Akses di Browser
Sekarang buka browser favoritmu dan masuk ke URL berikut:
```
http://127.0.0.1:8000/user
```
