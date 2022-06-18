@extends('layouts.author')

@section('title', 'Show author')

@section('css') 
<style>

    h1 {
        color: red;
    }
</style>

@endsection

@section('body')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <h1>Author name: {{ $author->name }}</h1>
        <h1>Author address: {{ $author->address }}</h1>
        <h1>Author phone number: {{ $author->phone_number }}</h1>
    </div>
</div>
@endsection