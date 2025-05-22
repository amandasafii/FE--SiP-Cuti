<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MahasiswaController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:8080/mahasiswa');
        $mahasiswa = json_decode($response->body());

        return view('mahasiswa', compact('mahasiswa'));
    }

    public function create()
    {
        return view('create_mahasiswa');
    }

    public function store(Request $request)
    {
        // Validasi data yang masuk
        $request->validate([
            'npm' => 'required|string',
            'id_user' => 'required|string',
            'id_kajur' => 'required|string',
            'nama_mahasiswa' => 'required|string',
            'tempat_tanggal_lahir' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'alamat' => 'required|string',
            'agama' => 'required|string',
            'angkatan' => 'required|string',
            'program_studi' => 'required|string',
            'no_hp' => 'required|string',
            'email' => 'required|email',
        ]);

        $data = $request->all();

        // Kirim POST ke API backend
        $response = Http::post('http://localhost:8080/mahasiswa', $data);

        if ($response->successful()) {
            return redirect('/mahasiswa')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->back()
                ->withErrors(['msg' => 'Gagal tambah data: ' . $response->body()])
                ->withInput();
        }
    }

    public function edit($npm)
    {
        $response = Http::get("http://localhost:8080/mahasiswa/{$npm}");
        $result = $response->json();

        if (isset($result['data'])) {
            $mahasiswa = $result['data'];
        } else {
            $mahasiswa = $result;
        }

        $mahasiswa = json_decode(json_encode($mahasiswa));

        return view('edit_mahasiswa', compact('mahasiswa'));
    }

    public function update(Request $request, $npm)
    {
        $data = $request->all();
        $response = Http::put("http://localhost:8080/mahasiswa/{$npm}", $data);

        if ($response->successful()) {
            return redirect('/mahasiswa')->with('success', 'Data berhasil diperbarui!');
        } else {
            return redirect()->back()
                ->withErrors(['msg' => 'Gagal update data: ' . $response->body()])
                ->withInput();
        }
    }

    public function destroy($npm)
    {
        $response = Http::delete("http://localhost:8080/mahasiswa/{$npm}");

        if ($response->successful()) {
            return redirect('/mahasiswa')->with('success', 'Data berhasil dihapus!');
        } else {
            return redirect('/mahasiswa')->withErrors(['msg' => 'Gagal hapus data']);
        }
    }
}
