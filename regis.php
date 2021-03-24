<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Register</title>
    <style>
        body {
            background-color: white;
        }

        .regis {
            position: absolute;
            width: 500px;
            height: 600px;
            left: 850px;
            top: 150px;

            background: #FFFFFF;
            box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.25);
            border-radius: 10px;
        }

        .regis1 {
            position: absolute;
            width: 500px;
            height: 600px;
            left: 300px;
            top: 200px;

            background: #FFFFFF;
        }

        h1 {
            text-align: left;
            font-size: 25px;
            font-style: normal;
            line-height: 29.3px;
            font-family: arial;
        }

        p {
            text-align: left;
            font-size: 17px;
            line-height: 20px;
            font-style: normal;
            font-family: arial;
            font-weight: 400;
            color: grey;
        }

        .bt {

            background-color: deepskyblue;
            border-color: white;
            border-radius: 10px;
            color: white;
            position: absolute;
            width: 157px;
            height: 41px;
            left: 320px;
        }

        .btn {
            background-color: deepskyblue;
            border-color: white;
            border-radius: 10px;
            color: white;
            position: absolute;
            width: 100px;
            height: 40px;
            left: 1580px;
            top: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <img src="image/logo.png" alt="" width="70px" height="40px" class="d-inline-block align-top">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a href="Login.php"> <button class="btn" type="button" name="login">Login</button></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="regis1">
                    <img src="image/tirex.png" width="500px" height="380px" class="rounded mx-auto d-block">
                    <br>
                    <h1>Create your Monlis Account</h1>
                    <p>One stop solution to help you to monitoring you electric consumption</p>
                </div>
            </div>
            <div class="col">
                <div class="regis">
                    <br>
                    <!--email-->
                    <div class="container">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1" name="password1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1" name="password2">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Mobille Phone</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="phone">
                        </div>
                        <br>
                        <!--button-->
                        <div class="container">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="bt" type="button">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>