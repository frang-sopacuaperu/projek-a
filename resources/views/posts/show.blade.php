@extends('layouts.app')
@section('title', 'Projek-A')

@section('content')
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> {{ $post->title}} </h5>
                    <p>
                        {{ $post->body }}
                    </p>
                </div>
                <div class="card-footer mt-2">
                    Published on {{ $post->created_at->format('d M, Y') }}
                </div>
            </div>
        </div>
    </div>

</div>

@stop