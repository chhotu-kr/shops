@extends('base')
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-3">
            @include('side')
        </div>
        <div class="col-6 mx-auto">
            <div class="row">
                <div class="col">
                    <h5 class="fw-bold" style="color: #485460">insert product</h5>
                </div>
            </div>
            <div class="card" style="background-color: #c8d6e5">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>title</label>
                            <input type="text" name="title" class="form-control">
                            @error('title')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>brand</label>
                            <input type="text" name="brand" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label>price</label>
                            <input type="text" name="price" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>discount_price</label>
                            <input type="text" name="discount_price" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>category</label>
                            <select class="form-select" name="category_id">
                                <option value="">select category</option>
                                @foreach($category as $item)
                                <option value="{{$item->id}}">{{$item->cat_title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>qty</label>
                            <input type="text" name="qty" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>description</label>
                       <textarea name="description" class="form-control"  rows="5"></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-secondary float-end">
                        </div>
                       

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection