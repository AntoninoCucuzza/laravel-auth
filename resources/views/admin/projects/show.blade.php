@extends('layouts.admin')

@section('content')
    <div class="row mt-5">
        <div class="col-6">
            <img class="img-fluid" src="{{ $project->thumb }}" alt="">
        </div>
        <div class="col-6">
            <h1>{{ $project->title }}</h1>
            <p>{{ $project->description }}</p>

        </div>
    </div>
@endsection
