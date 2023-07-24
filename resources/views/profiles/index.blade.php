@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" alt="user uploaded profile picture" class="rounded-circle" style="height: 10rem;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center">
                    <div class="h4">{{ $user -> username }}</div>

                    <follow-button></follow-button>
                </div>

                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan

            </div>
            
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-3" style="padding: 1rem"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-3" style="padding: 1rem"><strong>23k</strong> followers</div>
                <div class="pr-3" style="padding: 1rem"><strong>212</strong> following</div>
            </div>
            <div>
                <div class="pt-4 font-weight-bold"> {{ $user->profile->title }} </div>
                <div> {{ $user->profile->description }}</div>
                <div><a href=""> {{ $user->profile->url ?? 'N/A' }} </a></div>
            </div>
        </div>
        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{ $post->id }}">
                        <img class="w-100" src="/storage/{{ $post->image }}" alt="uploaded pictures">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
