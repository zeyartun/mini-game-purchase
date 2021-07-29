@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card mb-3 p-3">
                    @if(session('updateMessage'))
                    <span class="alert alert-success">{{ session('updateMessage')}}</span>
                    @endif
                    <div class="card-body">
                       <form action="{{ route('articles.update', $article->id) }}" method="POST">
                            @csrf
                            @method('put')
                           <div class="form-group">
                               <label for="name">Title</label>
                               <input type="text" name="name" class="form-control" value="{{ old('name', $article->name) }}">
                           </div>

                           <div class="form-group">
                                <label for="name">Description</label>
                                <input type="text" name="description" class="form-control"  value="{{ old('description', $article->description) }}">
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Update">
                            </div>
                       </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
