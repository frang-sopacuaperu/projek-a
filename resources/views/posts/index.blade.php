@extends('layouts.app')
@section('title', 'Projek-A')

@section('content')
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Posts</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                
                            <tr>
                                <td> {{ $post->title }} </td>
                                <td> {{ Str::limit($post->body, 100, '') }} </td>
                                <td> {{ $post->created_at }} </td>
                                <td> {{ $post->updated_at }} </td>
                                <td>
                                    <div><a href="/posts/{{ $post->slug }}" class="btn btn-primary mb-2"> <i class="fas fa-eye"> See</a></i></div>
                                    <div><a href="" class="btn btn-success mb-2"> <i class="fas fa-edit"> Edit</a></i></div>
                                    <div><a href="" class="btn btn-danger mb-2"><i class="fas fa-trash"> Delete</a></i></div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop