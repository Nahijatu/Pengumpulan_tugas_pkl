{{-- resources/views/list_tugas/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-5">Daftar Tugas</h1>
    <a href="{{ route('list_tugas.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Tugas</a>
    <table class="table-auto w-full mt-5">
        <thead>
            <tr>
                <th class="px-4 py-2">Nama Tugas</th>
                <th class="px-4 py-2">Deskripsi</th>
                <th class="px-4 py-2">Tanggal Deadline</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listTugas as $tugas)
                <tr>
                    <td class="border px-4 py-2">{{ $tugas->nama_tugas }}</td>
                    <td class="border px-4 py-2">{{ $tugas->deskripsi }}</td>
                    <td class="border px-4 py-2">{{ $tugas->tanggal_deadline }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('list_tugas.edit', $tugas->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
