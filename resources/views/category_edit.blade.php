@extends('base')

@section('title','index')

@section('content')
<div class="container mt-5">
    <div class="row">
    
        <div class="col-3 mx-auto">
            <div class="card" style="background-color: #ff4d4d">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <h2 class="fw-bold" style="color: #f1f2f6">Insert here</h2>
                        <div class="mb-3">
                            <label>title</label>
                            <input type="text" name="cat_title" value="{{$category->cat_title}}" class="form-control">
                            @error('cat_title')
                                <p class="text-danger small">{{$message}}</p>
                                
                            @enderror 
                        </div>
                        <div class="mb-3">
                            <label>description</label>
                            <input type="text" name="cat_description" value="{{$category->cat_description}}" class="form-control"> 
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn rounded-pill float-end text-black" style="background-color: #d2dae2">
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
    
@endsection