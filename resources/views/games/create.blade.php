@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-md-12">

                <div class="card mb-3 p-3">
                    @if(session('createMessage'))
                    <span class="alert alert-success">{{ session('createMessage')}}</span>
                    @endif

                    <div class="card-body">
                        <div class="row">
                            <div class="img-box col-md-6">
                                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt=""
                                width="100%">
                            </div>
                            <div class="create-form col-md-6">
                                <form action="{{ route('games.store') }}" method="POST">
                                    @csrf
                                   <div class="form-group">
                                       <label for="name">Title</label>
                                       <input type="text" name="name" class="form-control">
                                   </div>

                                   <div class="form-group">
                                        <label for="name">Category</label>
                                        <select name="category_id" id="category_id" class="custom-select">
                                            <option value="">Select Category</option>
                                            @foreach($category as $cat)
                                                <option value="{{ $cat->id }}">
                                                    {{ $cat->name }}
                                                    <div>
                                                        @foreach($cat->subcategory as $child)

                                                        <option value="{{ $child->id }}" style="font-size: 10px;
                                                        color: blue!important;
                                                        font-weight: bold;">{{$child->name}}</option>
                                                        @endforeach
                                                    </div>
                                                </option>


                                            @endforeach
                                        </select>
                                    </div>



                                    <div class="form-group">
                                        <a id="price-row" class="btn btn-primary">+</a>
                                    </div>

                                    <div class="price-container">
                                        <div class="row" class="price-query">
                                            <div class="col-md-4">
                                                <label for="">From</label>
                                                <input type="date" class="form-control" class="created_at">
                                            </div>

                                            <div class="col-md-4">
                                                <label for="">To</label>
                                                <input type="date" class="form-control" class="updated_at">
                                            </div>

                                            <div class="col-md-4">
                                                <label for="">Price</label>
                                                <input type="text" class="form-control" name="price" value="1000">
                                            </div>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-primary mt-4">Create</button>
                               </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection

@section('extra-js')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#price-row').click(function(){
                const priceRow = document.querySelector("#price-now");
                const priceQuery = document.querySelector("#price-query");
                const priceContainer = document.querySelector("#price-container");

            });
        })
    </script>
@endsection
