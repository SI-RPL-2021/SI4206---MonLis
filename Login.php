<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Welcome to MonLis</title>
    <style>
        body {
            background-color: white;
        }

        .login {
            position: absolute;
            width: 500px;
            height: 480px;
            left: 600px;
            top: 150px;

            background: #FFFFFF;
            box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.25);
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            font-size: 25px;
            font-style: normal;
            line-height: 29.3px;
            font-family: arial;
        }

        h2 {
            text-align: center;
            font-size: 17px;
            line-height: 20px;
            font-style: normal;
            font-family: arial;
            font-weight: normal;
        }

        .bt {
            background-color: deepskyblue;
            border-color: white;
            border-radius: 10px;
            color: white;
            position: absolute;
            width: 150px;
            height: 50px;
            left: 320px;
            top: 400px;

        }

        .btn {
            background-color: white;
            border-color: white;
            border-radius: 10px;
            color: orange;
            position: absolute;
            width: 150px;
            height: 50px;
            left: 10px;
            top: 400px;
        }

        p {
            text-align: left;
            font-size: 17px;
            line-height: 20px;
            font-style: normal;
            font-family: arial;
            font-weight: 400;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login">
            <br>
            <!--Logo-->
            <img src="image/logo.png" width="65px" height="40px" class="rounded mx-auto d-block">
            <br>

            <!--Login-->
            <h1>Login</h1>

            <!--text-->
            <h2>to continue to Monlis</h2>
            <br>

            <!--email-->
            <div class="container">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingInput" placeholder="password" name="password">
                    <label for="floatingInput">Password</label>
                </div>
                    <a href="#"><label>Forgot password?</label></a>
                <br>
                <!--button-->
                <div class="container">
                    <div class="row">
                        <!--button kiri-->
                        <div class="col-8">
                           <a href="regis.php"> <button class="btn" type="button" name="buttonCreate">Create account</button></a>
                        </div>
                        <!--button tengah-->
                        <div class="col-sm">
                        </div>
                        <!--button kanan-->
                        <div class="col-sm">
                            <button class="bt" type="button" name="login">Login</button>
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