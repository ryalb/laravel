@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Poker Session Name
        </div>
        <div class=" m-b-md">
            {{ $session->name }}
        </div>

        <div class="links">
            <div class="form-group">
                <form action="/poker/session/create">
                    <input type="text" class="form-control" name="name">
                    <br>
                    <button class="btn btn-primary btn-large" type="submit">Create</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection