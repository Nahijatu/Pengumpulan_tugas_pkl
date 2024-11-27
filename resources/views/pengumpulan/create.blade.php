@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-6 text-center">Tambah Pengumpulan Tugas</h2>
    <form method="POST" action="{{ route('pengumpulan.store') }}">
        @csrf
        <div class="mb-4">
            <label for="nama_tugas" class="block text-sm font-medium text-gray-700">Nama Tugas</label>
            <input type="text" id="nama_tugas" name="nama_tugas" required class="mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="tanggal_deadline" class="block text-sm font-medium text-gray-700">Tanggal Deadline</label>
            <input type="date" id="tanggal_deadline" name="tanggal_deadline" required class="mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <select id="status" name="status" required class="mt-1 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="proses">Proses</option>
                <option value="selesai">Selesai</option>
            </select>
        </div>
        <button type="submit" class="w-full py-2 bg-green-500 text-white rounded-md hover:bg-green-600">Tambah Tugas</button>
    </form>
</div>
@endsection
