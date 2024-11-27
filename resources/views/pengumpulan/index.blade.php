@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-5">Daftar Pengumpulan Tugas</h1>
    <a href="{{ route('pengumpulan.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Pengumpulan</a>
    <table class="table-auto w-full mt-5">
        <thead>
            <tr>
                <th class="px-4 py-2">Nama Tugas</th>
                <th class="px-4 py-2">Tanggal Deadline</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengumpulans as $pengumpulan)
                <tr>
                    <td class="border px-4 py-2">{{ $pengumpulan->nama_tugas }}</td>
                    <td class="border px-4 py-2">{{ $pengumpulan->tanggal_deadline }}</td>
                    <td class="border px-4 py-2">{{ $pengumpulan->status }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('pengumpulan.edit', $pengumpulan->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                        <form action="{{ route('pengumpulan.destroy', $pengumpulan->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
