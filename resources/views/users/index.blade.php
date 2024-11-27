{{-- resources/views/users/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-5">Daftar User</h1>
    <a href="{{ route('users.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah User</a>
    <table class="table-auto w-full mt-5">
        <thead>
            <tr>
                <th class="px-4 py-2">Nama</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Status</th>
                @if(auth()->user()->status === 'manager')
                    <th class="px-4 py-2">Aksi</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td class="border px-4 py-2">{{ $user->nama }}</td>
                    <td class="border px-4 py-2">{{ $user->email }}</td>
                    <td class="border px-4 py-2">{{ $user->status }}</td>
                    @if(auth()->user()->status === 'manager')
                        <td class="border px-4 py-2">
                            <a href="{{ route('users.edit', $user->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
                            </form>
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
