@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Poker
        </div>

        <div class="links">
            <a href="/poker/session/list">List Sessions</a>
            <a href="/poker/session/add">Create New Session</a>
            <!--<a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>-->
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>

        <div class="title m-b-md">
            Retrospective
        </div>

        <div class="links">
            <a href="/retro/list">List Sessions</a>
            <a href="/retro/add">Create New Session</a>
            <!--<a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>-->
        </div>

    </div>
</div>
@endsection
