@extends('layouts.app')

@section('title', 'Mobile Phone Details')

@section('content')

<h2 class="text-3xl font-bold text-center">🔍 Mobile Phone Details</h2>

<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg mt-6">
    <p class="text-lg border-b pb-2"><span class="font-bold">ID:</span> {{ $mobilePhone->id }}</p>
    <p class="text-lg border-b pb-2 mt-2"><span class="font-bold">Model:</span> {{ $mobilePhone->model }}</p>
    <p class="text-lg border-b pb-2 mt-2"><span class="font-bold">Brand:</span> {{ $mobilePhone->brand->name }}</p>
    <p class="text-lg border-b pb-2 mt-2"><span class="font-bold">OS:</span> {{ $mobilePhone->operatingSystem->name }} {{ $mobilePhone->operatingSystem->version }}</p>
    <p class="text-lg border-b pb-2 mt-2"><span class="font-bold">CPU:</span> {{ $mobilePhone->cpu }}</p>
    <p class="text-lg border-b pb-2 mt-2"><span class="font-bold">RAM (GB):</span> {{ $mobilePhone->ram }}</p>
    <p class="text-lg border-b pb-2 mt-2"><span class="font-bold">Launch Price:</span> ${{ number_format($mobilePhone->launch_price, 2) }}</p>

    <div class="mt-4 text-center">
        <a href="{{ route('mobile_phones.index') }}" class="bg-gray-300 text-black px-4 py-2 rounded shadow-md hover:bg-gray-400">
            🔙 Back to Mobile List
        </a>
    </div>
</div>

@endsection
