@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card mb-3">
                    <div class="card-body">
                        <h3>{{ $article->name }}</h3>
                        <p>
                            {{ $article->description }}
                        </p>
                        <a href="{{ route('home')}}" class="btn btn-primary">Back</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
