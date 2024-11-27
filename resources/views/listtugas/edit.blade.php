{{-- resources/views/list_tugas/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-6 text-center">Edit Tugas</h2>
    <form method="POST" action="{{ route('list_tugas.update', $tugas->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nama_tugas" class="block text-sm font-medium text-gray-700">Nama Tugas</label>
            <input type="text" id="nama_tugas" name="nama_tugas" value="{{ old('nama_tugas', $tugas->nama_tugas) }}" required class="mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" required class="mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('deskripsi', $tugas->deskripsi) }}</textarea>
        </div>
        <div class="mb-4">
            <label for="tanggal_deadline" class="block text-sm font-medium text-gray-700">Tanggal Deadline</label>
            <input type="date" id="tanggal_deadline" name="tanggal_deadline" value="{{ old('tanggal_deadline', $tugas->tanggal_deadline) }}" required class="mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <button type="submit" class="w-full py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Update Tugas</button>
    </form>
</div>
@endsection
