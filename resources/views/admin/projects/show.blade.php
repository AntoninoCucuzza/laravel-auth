@extends('layouts.admin')

@section('content')
    <h1>ciao</h1>
    <h1>pagina del singolo progetto</h1>
    <h1>{{ $project->id }}</h1>
    <h1>{{ $project->title }}</h1>
@endsection
