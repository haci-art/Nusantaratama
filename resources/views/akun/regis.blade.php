<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>

    <!-- Bootstrap core CSS-->
    <link href="bahan/css/bootstrap.min.css" rel="stylesheet">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="bahan/img/favcion.png" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 text-center mt-5 mx-auto p-4">
                <h1 class="h2">Registration</h1>
                <p class="lead">Selamat datang!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-5 mx-auto mt-5">
                <form class="user" method="post" action="">
                    @csrf
                    <div class="form-group" method="post" action="">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between">
                            <a href="login" style="float:left;"> already have an account? </a>
                            {{-- <a href="resetpass" style="float:right;"> Lupa Password? </a> --}}
                        </div>
                        <div class=" form-group">
                            <button type="submit" class="btn btn-primary w-100"> Create new account </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>