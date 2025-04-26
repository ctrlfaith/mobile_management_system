@extends('layouts.app')

@section('title', 'Operating System Details')

@section('content')

<h2 class="text-3xl font-bold text-center">🔍 Operating System Details</h2>

<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg mt-6">
    <p class="text-lg border-b pb-2"><span class="font-bold">OS ID:</span> {{ $operatingSystem->id }}</p>
    <p class="text-lg border-b pb-2 mt-2"><span class="font-bold">OS Name:</span> {{ $operatingSystem->name }}</p>
    <p class="text-lg border-b pb-2 mt-2"><span class="font-bold">Version:</span> {{ $operatingSystem->version }}</p>

    <div class="mt-4 text-center">
        <a href="{{ route('operating_systems.index') }}" class="bg-gray-300 text-black px-4 py-2 rounded shadow-md hover:bg-gray-400">
            🔙 Back to OS List
        </a>
    </div>
</div>

@endsection
