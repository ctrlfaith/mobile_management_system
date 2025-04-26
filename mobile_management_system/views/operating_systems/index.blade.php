@extends('layouts.app')

@section('title', 'Operating System Management')

@section('content')

<div class="flex flex-col items-center justify-center text-center mt-6">
    <h2 class="text-5xl font-extrabold flex items-center space-x-4">
        <img src="{{ asset('images/OS Management.png') }}" alt="Operating System" class="w-12 h-12">
        <span>Operating System Management</span>
    </h2>
</div>

<div class="flex justify-between items-center bg-white p-4 rounded-lg shadow-lg mb-4 mt-10">
    <h3 class="text-2xl font-bold flex items-center space-x-2">
        <img src="{{ asset('images/icon-brand-list.png') }}" alt="Brand List Icon" class="w-6 h-6">
        <span>OS List</span>
    </h3>
    <a href="{{ route('operating_systems.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
        ➕ Add OS
    </a>
</div>

<div class="bg-white p-6 rounded-lg shadow-lg">
    <table class="w-full border-collapse border border-gray-300">
        <thead class="bg-gray-100">
            <tr>
                <th class="border p-3">ID</th>
                <th class="border p-3">OS Name</th>
                <th class="border p-3">Version</th>
                <th class="border p-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($operatingSystems as $os)
            <tr class="hover:bg-gray-50">
                <td class="border p-3 text-center">{{ $os->id }}</td>
                <td class="border p-3">{{ $os->name }}</td>
                <td class="border p-3">{{ $os->version }}</td>
                <td class="border p-3 flex space-x-2 justify-center">
                    <a href="{{ route('operating_systems.show', $os->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">🔍 View</a>
                    <a href="{{ route('operating_systems.edit', $os->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">✏ Edit</a>
                    <form action="{{ route('operating_systems.destroy', $os->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600" onclick="return confirm('Are you sure?')">🗑 Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
