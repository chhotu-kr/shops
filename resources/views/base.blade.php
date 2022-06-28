<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>shop @section('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#4b4b4b">
        <div class="container">
            <a href="" class="navbar-brand">Shop</a>
            <form action="" class="d-flex mx-auto">
                <input type="text" class="form-control" size="60">
                <input type="submit" class="btn btn-danger">
            </form>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link text-white fw-bold">Home</a></li>
                <li class="nav-item"><a href="{{route('product.create')}}" class="nav-link text-white fw-bold">Insert</a></li>
                <li class="nav-item"><a href="" class="nav-link text-white fw-bold">AboutUs</a></li>
            </ul>
        </div>
    </nav>
    @section('content')
    @show
        
    
    
</body>
</html>