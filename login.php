<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">

</head>

<body class="">


    <!-- navbar -->

    <nav class="navbar navbar-light bg-dark py-4">
        <div class="container">
            <div class="container-fluid">
                <a class="navbar-brand fw-bolder text-light" href="#">login</a>
            </div>
        </div>
    </nav>

    <!--     end -->

    <div class="container ">
        <!--   form container -->
        <div class="widths">

            <div class="container container1">
                <h1>Login</h1>
                <form id="loginForm" method="post" action="./handlers/auth-handler.php">
                    <label for="email" class="">Email:</label>
                    <input type="email" id="email" class="form-control" name="email" required>

                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>

                    <button type="submit" name="login">Login</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <a href="changepassword.html"></a>
    </div>




    <html>





    <script src="../js/main.js"></script>


    </html>

    <!-- ! ignore this script link  ! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>