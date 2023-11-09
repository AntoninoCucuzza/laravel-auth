@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="mt-3 mb-0">New project</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mt-3 row">
                <div class="col-6 mt-4">
                    <label for="title" class="form-label">title</label>
                    <input class="form-control" name="title" type="text" placeholder="inserisci il nome del progetto">

                </div>

                <div class="col-6 mt-4">
                    <label for="project_link" class="form-label">project_link</label>
                    <input class="form-control" name="project_link" type="text"
                        placeholder="inserisci il link del progetto">

                </div>

                <div class="col-12 mt-4">
                    <label for="thumb" class="form-label">thumb</label>
                    <input class="form-control" name="thumb" type="file">

                </div>

                <div class="col-12 mt-4">
                    <label for="description" class="form-label">description</label>
                    <textarea class="form-control" name="description" name="descrizione" id="descrizione" cols="30" rows="10"></textarea>

                </div>


            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </div>
@endsection
