@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pb-5">
            <img src="{{$user->profiles->profileImage() }}" class="rounded-circle w-100">
        </div>
        <div class="clo-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
               <div class="d-flex ml-4 align-items-center pb-3 pl-3">
                   <div class="h4 pl-3">{{ $user->username }}</div>

                   <follow-button user-id="{{ $user->id }}" follows="{{ $follows ?? '' }}"></follow-button>
               </div>
            </div>
            <div>
                @can ('update', $user->profiles)
                    <a href="/p/create">Add new post!</a>
                @endcan
            </div>
        @can ('update', $user->profiles)
                <a href="/profiles/{{ $user->id }}/edit">Edit profile!</a>
            @endcan
                <div class="d-flex">
                <div class="pt-5 pl-5"><strong>{{ $postsCount() }}</strong> posts</div>
                <div class="pt-5 pl-5"><strong>{{$followersCount()}}</strong></div>
                <div class="pt-5 pl-5"><strong>{{ $followingCount() }}</strong></div>
            </div>
            <div class="pt-5 font-weight-bold">{{ $user->profiles->title }}</div>
            <div>{{$user->profiles->description}}</div>
            <div><a href="#">{{$user->profiles->url}}</a> </div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post -> id }}">
                <img src="/storage/{{$post->image}}" class="w-100">
            </a>
        </div>
        @endforeach

        </div>

    </div>
</div>
@endsection
