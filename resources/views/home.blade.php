@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/svg/smiley-alt-svgrepo-com.svg" alt="smiley face enclosed in square, enclosed in circle" style="height: 10rem;">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user -> username }}</h1></div>
            <div class="d-flex">
                <div class="pr-3" style="padding: 1rem"><strong>153</strong> posts</div>
                <div class="pr-3" style="padding: 1rem"><strong>23k</strong> followers</div>
                <div class="pr-3" style="padding: 1rem"><strong>212</strong> following</div>
            </div>
            <div>
                <div class="pt-4 font-weight-bold"> name </div>
                <div> biography info </div>
                <div><a href=""> website link </a></div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-4">
                <img class="w-100" src="/svg/smiley-alt-svgrepo-com.svg" alt="smiley face enclosed in square, enclosed in circle" style="height: 10rem;">
            </div>
            <div class="col-4">
                <img class="w-100" src="/svg/smiley-alt-svgrepo-com.svg" alt="smiley face enclosed in square, enclosed in circle" style="height: 10rem;">
            </div>
            <div class="col-4">
                <img class="w-100" src="/svg/smiley-alt-svgrepo-com.svg" alt="smiley face enclosed in square, enclosed in circle" style="height: 10rem;">
            </div>
        </div>
    </div>
</div>
@endsection
