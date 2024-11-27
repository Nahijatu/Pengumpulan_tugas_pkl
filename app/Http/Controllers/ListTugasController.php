<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListTugas;

class ListTugasController extends Controller
{
    public function index()
    {
        $listTugas = ListTugas::all();
        return view('list_tugas.index', compact('listTugas'));
    }

    public function create()
    {
        return view('list_tugas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_tugas' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal_deadline' => 'required|date',
        ]);

        ListTugas::create($validated);

        return redirect()->route('list_tugas.index');
    }

    public function edit(ListTugas $tugas)
    {
        return view('list_tugas.edit', compact('tugas'));
    }

    public function update(Request $request, ListTugas $tugas)
    {
        $validated = $request->validate([
            'nama_tugas' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal_deadline' => 'required|date',
        ]);

        $tugas->update($validated);

        return redirect()->route('list_tugas.index');
    }

    public function destroy(ListTugas $tugas)
    {
        $tugas->delete();
        return redirect()->route('list_tugas.index');
    }
}
