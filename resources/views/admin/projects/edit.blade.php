@extends('layouts.admin')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row mt-5">
            <div class="col-6">
                <div>
                    <label for="title" class="form-label">title</label>
                    <input name="title" class=" form-control" type="text" placeholder="new title"
                        value="{{ $project->title }}">
                </div>

                <div>
                    <label for="project_link" class="form-label mt-2">project_link</label>
                    <input name="project_link" class=" form-control" type="text" placeholder="new project_link"
                        value="{{ $project->project_link }}">
                </div>

                <div>
                    <label for="github_link" class="form-label mt-2">github_link</label>
                    <input name="github_link" class=" form-control" type="text" placeholder="new github_link"
                        value="{{ $project->github_link }}">
                </div>

                <div>
                    <label for="thumb" class="form-label mt-2">thumb</label>
                    <input name="thumb" class=" form-control" type="file">
                </div>

                <div>
                    <label for="description" class="form-label mt-2">description</label>
                    <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{ $project->description }}</textarea>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>

            <div class="col-6">

                <h2>title: <a href="{{ $project->project_link }}">{{ $project->title }}</a> #{{ $project->id }}</h2>
                <h3>slug: {{ $project->slug }}</h3>
                <img class="img-fluid" src="{{ $project->thumb }}" alt="">
                <p>{{ $project->description }}</p>
            </div>
        </div>
    </form>
@endsection
