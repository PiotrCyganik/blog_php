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
                <a href="#">Add new post!</a>
            </div>
            <div class="d-flex">
                <div class="pt-5"><strong>Link 1</strong></div>
                <div class="pt-5"><strong>Link 1</strong></div>
                <div class="pt-5"><strong>Link 1</strong></div>
            </div>
            <div class="pt-5 font-weight-bold">{{ $user->profiles->title }}</div>
            <div>{{$user->profiles->description}}</div>
            <div><a href="#">{{$user->profiles->url}}</a> </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="https://scontent-sof1-1.cdninstagram.com/vp/d0b4b9a7b13454d6a7866f3a9e56f3a3/5E36CC57/t51.2885-15/sh0.08/e35/c0.40.822.822a/s640x640/69968971_2305100466416943_647506101175149940_n.jpg?_nc_ht=scontent-sof1-1.cdninstagram.com" class="w-100"></div>
        <div class="col-4">
            <img src="https://scontent-sof1-1.cdninstagram.com/vp/9e8a2160cbd8be4b03e377da407565aa/5E3D58DD/t51.2885-15/e35/c96.0.557.557a/69461407_170809170634599_1337765637046294646_n.jpg?_nc_ht=scontent-sof1-1.cdninstagram.com" class="w-100"></div>
        <div class="col-4">
            <img src="https://scontent-sof1-1.cdninstagram.com/vp/08957ecf4e700cfdd0f53d92ad4fc317/5E2A7AF3/t51.2885-15/sh0.08/e35/c0.2.751.751a/s640x640/69095403_212234716426916_3447102072665452317_n.jpg?_nc_ht=scontent-sof1-1.cdninstagram.com" class="w-100"></div>

        </div>

    </div>
</div>
@endsection
