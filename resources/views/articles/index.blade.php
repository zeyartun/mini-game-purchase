@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-md-6">
                @foreach($articles as $article)
                <div class="card mb-3">
                    <div class="card-body">
                        <h3>{{ $article->name }}</h3>
                        <p>
                            {{ $article->description }}
                        </p>
                        <div>
                            <a href="{{ route('articles.show', $article->id)}}" class="badge badge-primary">View</a>
                            <a href="{{ route('articles.edit', $article->id)}}" class="badge badge-warning">Edit</a>
                            <form action="{{ route('articles.destroy', $article->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="badge badge-danger border-0">Delete</a>
                            </form>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
