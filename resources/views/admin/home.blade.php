@extends('template')

@section('title', 'Admin Home')

@section('body')
    <div class="container mx-auto">
        <div class="flex flex-col items-center justify-center h-screen">
            <h1 class="text-4xl font-bold">Admin Home</h1>
            <a href="{{ route('admin.logout') }}" class="text-blue-500">Logout</a>
        </div>
    </div>
@endsection
