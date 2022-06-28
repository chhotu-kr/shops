@extends('base')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-3">
            @include('side')
        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-9">
                    <h5 class="fw-bold" style="color: #bdc3c7">Manage Products</h5>
                </div>
                <div class="col">
                    <a href="{{ route('product.create') }}" class="btn btn- float-end text-white" style="background-color: #2ecc71">Insert Product</a>
                </div>
            </div>
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>brand</th>
                    <th>price</th>
                    <th>qty</th>
                    <th>image</th>
                    <th>action</th>
                </tr>
                @foreach ($products as $pro)
                <tr>
                    <td>{{$pro->id}}</td>
                    <td>{{$pro->title}}</td>
                    <td>{{$pro->brand}}</td>
                    <td>{{$pro->price}}</td>
                    <td>{{$pro->qty}}</td>
                    <td>
                        <img src="{{asset("product_image/".$pro->image)}}" width="40" height="40" alt="">
                    </td>
                    <td>
                        <a href="{{route('product.delete',["id"=>$pro->id])}}" class="bt btn-danger">X</a>
                        <a href="submit" class="bt btn-info">edit</a>
                        <a href="submit" class="bt btn-primary">view</a>

                    </td>
                
                </tr>
                    
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection