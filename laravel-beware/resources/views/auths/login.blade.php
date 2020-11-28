<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Beware Games</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body class="bg-black">
        <nav class="navbar navbar-expand-sm navbar-dark bg-black full-width">
            <img src="{{ asset('images/Logo1.png') }}" alt="bewarelogo" id="navbarLogo">
            <a href="#" class="navbar-brand">Beware Games</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/game" class="nav-link">Games</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="bg-login">
            <br><br>
            <h1 class="text-center text-light">Login</h1>
            <p class="text-center text-light">Be part of Beware family!</p>
            <div class="container middle bg-black btn-round">
                <br><br>
                <form class="form-auth-small" action="/postlogin" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="text-light">Email address</label>
                        <input name="email" type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="text-light">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label text-light" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <button type="button" class="btn btn-secondary btn-round float-right btn-full" onclick="location.href='/register'">Register</button>
                        </div>
                        <div class="col-sm">
                            <button type="submit" class="btn btn-danger btn-round float-left btn-full">Log in</button>
                        </div>
                    </div>
                    <br>
                </form>
                <br><br>
            </div>
            <br><br><br><br>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>



