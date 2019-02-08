@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row justify-content-around">
                        <button class="btn btn-primary"><a href="/films" class="text-white">All Films</a></button>
                        <button class="btn btn-success"><a href="/addFilm" class="text-white">Add Film</a></button>
                        <button class="btn btn-danger"> Delete Film</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
