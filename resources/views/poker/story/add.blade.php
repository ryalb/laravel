@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Poker
        </div>
        <div class=" m-b-md">
            Session Name: <strong>{{ $session->name }}</strong>
        </div>
        <div class=" m-b-md">
            Story Name:
        </div>

        <div class="links">
            <div class="form-group">
                <form action="/poker/session/{{ $session->id }}/story/create">
                    <input type="hidden" class="form-control" name="sessionId" value="{{ $session->id }}">
                    <input type="text" class="form-control" name="name">
                    <br>
                    <button class="btn btn-primary btn-large" type="submit">Create</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
