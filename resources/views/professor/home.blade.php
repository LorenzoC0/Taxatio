@extends(template)

@section('title', 'Professor Home')

@section('body')
    <div class="container mx-auto">
        <div class="flex flex-col items-center justify-center h-screen">
            <h1 class="text-4xl font-bold">Professor Home</h1>
            <a href="{{ route('professor.logout') }}" class="text-blue-500">Logout</a>
        </div>
    </div>
@endsection
