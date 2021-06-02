<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login User</title>
        <!-- Bootstrap core CSS-->
        <link href="bahan/css/bootstrap.min.css" rel="stylesheet">
        <!-- favicon -->
        <link rel="icon" type="image/png" href="bahan/img/favcion.png" />
    </head>
    
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 text-center mt-5 mx-auto p-4">
                    <h1 class="h2">Login User</h1>
                    <p class="lead">Silahkan Login!</p>
                </div>
            </div>
            <div class="col-12 col-md-5 mx-auto mt-5">
                <form class="user" method="post" action="">
                    @csrf
                    <div class="card-body">
                        @if (session('errors'))
                            <div class="alert alert-danger alert dismissible fade show" role="alert">Something is wrong</div>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">X</span>
                                </button>
                       
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>   
                            </div>
                        @endif
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-danger">
                                {{Session::get('error')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="username">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{old('nama')}}" >
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between">
                            <a href="regis" style="float:left;"> Don't have an account? </a>
                            <a href="respas" style="float:right;"> Forget password? </a>
                        </div>
                        <div class=" form-group">
                            <button type="submit" class="btn btn-primary w-100"> Login </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>