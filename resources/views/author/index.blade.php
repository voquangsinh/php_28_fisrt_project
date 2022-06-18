@extends('layouts.author')

@section('title', 'View authors')

@section('body')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        @if (session('icon'))
            <div class="alert alert-success">
                {{ session('icon') }}
            </div>
        @endif

        <a href="{{ route('author.create') }}">Them Author moi</a>
            @if ($authors->count())
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Phone number</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                @foreach ($authors as $author)
                                    <tr>
                                        <th scope="row"> {{ $loop->iteration }} </th>
                                        <td> <a href="{{ route('author.show', ['author' => $author->id]) }}" class="btn btn-primary">{{ $author->name }}</a> </td>
                                        <td> {{ $author->address }} </td>
                                        <td> {{ $author->phone_number }} </td>
                                        <td>
                                            <a href="{{ route('author.edit', ['author' => $author->id]) }}" class="btn btn-primary">Edit</a> 
                                            <form action="{{ route('author.destroy', ['author' => $author->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-primary">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                
                            </tbody>
                        </table>
            @else
                <p>Chua co Author nao duoc them</p>
            @endif
    </div>
</div>
@endsection