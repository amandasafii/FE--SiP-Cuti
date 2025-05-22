<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    // TAMPILKAN SEMUA DATA USER
    public function index()
    {
        $response = Http::get('http://localhost:8080/user');
        $users = $response->json();
        // dd($users);

        return view('user', compact('users'));
    }

    // TAMPILKAN FORM TAMBAH USER
    public function create()
    {
        return view('create_user');
    }

    // SIMPAN DATA BARU KE API
    public function store(Request $request)
{
    $response = Http::asForm()->post('http://localhost:8080/user', [
        'username' => $request->username,
        'password' => $request->password,
        'level' => $request->level,
    ]);

    if ($response->successful()) {
        return redirect('/user')->with('success', 'Data user berhasil ditambahkan.');
    } else {
        return back()->with('error', 'Gagal menambah data user.');
    }
}

    // TAMPILKAN FORM EDIT USER
    public function edit($id)
    {
        $response = Http::get("http://localhost:8080/user");
        $users = $response->json();

        $user = collect($users)->firstWhere('id_user', $id);

        if ($user) {
            return view('edit_user', compact('user'));
        } else {
            return redirect('/user')->with('error', 'User tidak ditemukan.');
        }
    }

    // SIMPAN PERUBAHAN USER
    public function update(Request $request, $id)
    {
        $data = [
            'username' => $request->username,
            'level' => $request->level,
        ];

        // Tambahkan password hanya jika diisi
        if ($request->filled('password')) {
            $data['password'] = $request->password;
        }

        $response = Http::asForm()->put("http://localhost:8080/user/{$id}", $data);

        if ($response->successful()) {
            return redirect('/user')->with('success', 'Data user berhasil diperbarui.');
        } else {
            return back()->with('error', 'Gagal memperbarui data user.');
        }
    }

    // HAPUS USER
    public function destroy($id)
    {
        $response = Http::delete("http://localhost:8080/user/{$id}");

        if ($response->successful()) {
            return redirect('/user')->with('success', 'Data user berhasil dihapus.');
        } else {
            return redirect('/user')->with('error', 'Gagal menghapus data user.');
        }
    }
}
