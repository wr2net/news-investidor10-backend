@extends('layouts.app')

@section('content')
    <div class="col-md">
        <div class="card">
            <div class="card-header">Users / {{ $user->name }}</div>

            <div class="card-body">
                <user-component
                    :user="{{ $user }}">
                </user-component>
            </div>
        </div>
    </div>
@endsection
