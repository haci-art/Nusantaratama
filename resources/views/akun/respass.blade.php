<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
    <!-- Bootstrap core CSS-->
    <link href="bahan/css/bootstrap.min.css" rel="stylesheet">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="bahan/img/favcion.png" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 text-center mt-5 mx-auto p-4">
                <h1 class="h2">Reset Password</h1>
            </div>
        </div>
        <div class="row" method="post" action="laterespas">
            <div class="col-12 col-md-5 mx-auto mt-5">
                <form class="user" method="post" action="latereset">
                    @csrf
                    <div class="form-group">
                        <label for="username"> Please input your username.</label>
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>