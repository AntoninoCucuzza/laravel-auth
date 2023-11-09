@extends('layouts.admin')

@section('content')
    <div class="row mt-5">
        <div class="col-6">
            <input type="text" placeholder="title">
            <input type="text" placeholder="descriprion">
            <input type="file">

        </div>

        <div class="col-6">
            <h1>right now is</h1>
            <h2>{{ $project->title }}</h2>
            <img src="{{ $project->thumb }}" alt="">
        </div>
    </div>
@endsection
