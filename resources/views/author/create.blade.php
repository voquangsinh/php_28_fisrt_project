@extends('layouts.author')

@section('title', 'Create new author')

@section('body')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <form action=" {{ route('author.store') }} " method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">name</label>
              <input type="text" name="name" class="form-control" value="{{old('name')}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">address</label>
              <textarea name="address"  class="form-control" id="" cols="30" rows="10">{{old('address')}}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">phone number</label>
              <input type="text" name="phone_number" class="form-control" value="{{old('phone_number')}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
@endsection