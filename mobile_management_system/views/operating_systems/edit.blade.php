@extends('layouts.app')

@section('title', 'Edit Operating System')

@section('content')

<h2 class="text-3xl font-bold text-center">✏ Edit Operating System</h2>

<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg mt-6">
    <form action="{{ route('operating_systems.update', $operatingSystem->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label class="block text-gray-700 font-bold">OS Name:</label>
        <input type="text" name="name" class="w-full border p-2 rounded mt-2" value="{{ $operatingSystem->name }}" required>

        <label class="block text-gray-700 font-bold mt-2">Version:</label>
        <input type="text" name="version" class="w-full border p-2 rounded mt-2" value="{{ $operatingSystem->version }}" required>

        <div class="flex justify-between mt-4">
            <a href="{{ route('operating_systems.index') }}" class="bg-gray-300 text-black px-4 py-2 rounded shadow-md hover:bg-gray-400">
                🔙 Back to OS List
            </a>
            <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
                ✏ Update OS
            </button>
        </div>
    </form>
</div>

@endsection
