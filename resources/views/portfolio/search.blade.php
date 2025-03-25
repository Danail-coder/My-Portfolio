@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold text-white">Search Results for "{{ $query }}"</h2>

    @if($results->isEmpty())
        <p class="text-gray-400 mt-4">No results found.</p>
    @else
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
            @foreach($results as $result)
                <div class="bg-gray-800 p-4 rounded-lg">
                    <h3 class="text-xl font-bold">{{ $result->title }}</h3>
                    <p class="text-gray-400 mt-2">{{ Str::limit($result->description, 100) }}</p>
                    <a href="{{ route('projects.show', $result->id) }}" class="text-green-400 mt-2 inline-block">View Details</a>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection