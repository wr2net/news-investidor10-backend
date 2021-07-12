@extends('layouts.app')

@section('content')
    <div class="col-md">
        <div class="card">
            <div class="card-header">Users</div>

            <div class="card-body">
                <user-list-component></user-list-component>
            </div>
        </div>
    </div>
@endsection
