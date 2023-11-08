    @extends('layouts.admin')

    @section('content')
        <div class="table-responsive-sm mt-5">
            <table class="table table-light table-hover">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Thumb</th>
                        <th scope="col">actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr class="text-center table-dark">
                            <td>{{ $project->id }}</td>
                            <td><a href="{{ $project->project_link }}">{{ $project->title }}</a></td>
                            <td><img width="150" src="{{ $project->thumb }}" alt=""></td>
                            <td>
                                <a class="btn btn-success" href="{{ route('admin.projects.show', $project->id) }}">More</a>
                                <a class="btn btn-warning "
                                    href=" {{ route('admin.projects.edit', $project->id) }}">Edit</a>

                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#modalId-{{ $project->id }}">
                                    Delete
                                </button>
                            </td>

                        </tr>
                    @empty
                        <h1> no projects? very very...</h1>
                    @endforelse
                </tbody>
        </div>
    @endsection
