@extends('layouts.admin')

@section('content')
    <div class="container ">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('User Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>

                <a class="btn btn-primary mt-5" href="{{ route('admin.projects.index') }}"> Table Project </a>
                <a class="btn btn-danger" href="{{ route('admin.projects.create') }}">+</a>

            </div>
        </div>
    </div>
@endsection
