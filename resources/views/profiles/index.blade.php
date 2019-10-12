@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://www.logologo.com/logos/letter-a-logo.jpg" class="rounded-circle" width="200px" height="150px">
        </div>
        <div class="clo-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add new post!</a>
            </div>
            <div class="d-flex">
                <div class="pt-5"><strong>{{ $user->posts->count() }}1</strong> posts</div>
                <div class="pt-5"><strong>Link 1</strong></div>
                <div class="pt-5"><strong>Link 1</strong></div>
            </div>
            <div class="pt-5 font-weight-bold">{{ $user->profiles->title }}</div>
            <div>{{$user->profiles->description}}</div>
            <div><a href="#">{{$user->profiles->url}}</a> </div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <img src="/storage/{{$post->image}}" class="w-100">
        </div>
        @endforeach

        </div>

    </div>
</div>
@endsection
