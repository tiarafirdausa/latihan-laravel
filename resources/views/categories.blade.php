@extends('layouts.main')


@section('container')
    <h1>Post Categories</h1>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <div class="card text-bg-dark">
                    <img src="https://source.unsplash.com/400x400?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center">
                        <h5 class="card-title text-center flex-fill bg-dark p-2 text-white bg-opacity-50"><a href="/posts?category={{ $category->slug }}" class="text-decoration-none text-white">{{ $category->name }}</a></h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
