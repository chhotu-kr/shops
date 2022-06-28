@extends('base')

@section('title','index')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-3">
            @include('side')
        </div>
        <div class="col-9">
    <div class="row">
   
            
    
        <div class="col-4">
            <div class="card" style="background-color: #ff4d4d">
                <div class="card-body">
                    <form action="/insert" method="POST">
                        @csrf
                        <h2 class="fw-bold" style="color: #f1f2f6">Insert here</h2>
                        <div class="mb-3">
                            <label>title</label>
                            <input type="text" name="cat_title" class="form-control">
                            @error('cat_title')
                                <p class="text-danger small">{{$message}}</p>
                                
                            @enderror 
                        </div>
                        <div class="mb-3">
                            <label>description</label>
                            <textarea name="cat_description" class="form-control"  rows="5"></textarea> 
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn rounded-pill float-end text-black" style="background-color: #d2dae2">
                        </div>
                    </form>
                </div>
            </div>
        
            
        </div>
        <div class="col-8">
            <table class="table" style="background-color: #cd84f1">
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>description</th>
                    <th>action</th>
                </tr>
                @foreach ($category as $cat)
                <tr>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->cat_title}}</td>
                    <td>{{$cat->cat_description}}</td>

                    <td>
                        <a href="{{Route('category.update',['id'=>$cat->id])}}" class="btn btn-secondary">Edit</a>
                        <a href="{{Route('category.delete',['id'=>$cat->id])}}" class="btn btn-info">Delete</a>
                    </td>
                
                </tr>
                    
                @endforeach
            </table>
        </div>
        
    
    </div>
    
</div>
    </div>
</div>
    
@endsection