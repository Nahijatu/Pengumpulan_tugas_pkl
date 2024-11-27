<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use App\Models\Pengumpulan;

class PengumpulanController extends Controller
{
    public function index()
    {
        $pengumpulans = Pengumpulan::all();
        return view('pengumpulan.index', compact('pengumpulans'));
    }

    public function create()
    {
        return view('pengumpulan.create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'nama_tugas' => 'required|string|max:255',
        'tanggal_deadline' => 'required|date',
        'status' => 'required|in:proses,selesai',
    ]);

    // Menambahkan user_id (pastikan user yang login disertakan)
    $validated['user_id'] = auth()->user()->id;

    // Menyimpan data ke database
    Pengumpulan::create([
        'user_id' => Auth::user()->id,
        'nama_tugas' => $request->nama_tugas,
        'tanggal_deadline' => $request->tanggal_deadline,
        'status' => $request->status,
    ]);
    
        return redirect()->route('pengumpulan.index');

}


public function edit($id)
{
    $pengumpulan = Pengumpulan::findOrFail($id);
    return view('pengumpulan.edit', compact('pengumpulan'));
}


public function update(Request $request, $id)
{
    $request->validate([
        'nama_tugas' => 'required|string|max:255',
        'tanggal_deadline' => 'required|date',
        'status' => 'required|string|in:proses,selesai',
    ]);

    $pengumpulan = Pengumpulan::findOrFail($id);
    $pengumpulan->update([
        'nama_tugas' => $request->nama_tugas,
        'tanggal_deadline' => $request->tanggal_deadline,
        'status' => $request->status,
    ]);

    return redirect()->route('pengumpulan.index')->with('success', 'Pengumpulan berhasil diperbarui.');
}


    // Menambahkan method destroy untuk menghapus pengumpulan
    public function destroy($id)
    {
        $pengumpulan = Pengumpulan::findOrFail($id);
        $pengumpulan->delete();

        return redirect()->route('pengumpulan.index')->with('success', 'Pengumpulan berhasil dihapus.');
    }
}
