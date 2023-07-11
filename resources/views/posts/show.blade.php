@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" alt="selected uploaded image" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3" style="margin:1rem;">
                        <img src="/storage/{{ $post->user->profile->image }}" alt="profile picture of selected user's image" class="rounded-circle w-100" style="max-width: 50px;">
                    </div>
                    <div>
                        <div class="font-weight-bold" style="font-weight: bold;">
                            <a href="/profile/{{ $post->user->id }}" style="text-decoration: none;">
                                <span class="text-dark">
                                    {{ $post->user->username }}
                                </span>
                            </a>
                            <a href="#" style="text-decoration: none;">Follow</a>
                        </div>
                    </div>
                </div>

                <hr>

                <p>
                    <span class="font-weight-bold" style="font-weight: bold;">
                        <a href="/profile/{{ $post->user->id }}" style="text-decoration: none;">
                            <span class="text-dark">
                                {{ $post->user->username }}
                            </span>
                        </a>
                    </span> {{ $post->caption }}
                </p>
            
            </div>
        </div>

    </div>
</div>
@endsection
