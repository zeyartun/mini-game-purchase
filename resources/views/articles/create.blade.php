@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card mb-3 p-3">
                    @if(session('createMessage'))
                    <span class="alert alert-success">{{ session('createMessage')}}</span>
                    @endif
                    <div class="card-body">
                       <form action="{{ route('articles.store') }}" method="POST">
                            @csrf
                           <div class="form-group">
                               <label for="name">Title</label>
                               <input type="text" name="name" class="form-control">
                           </div>

                           <div class="form-group">
                                <label for="name">Description</label>
                                <input type="text" name="description" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Create">
                            </div>
                       </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
