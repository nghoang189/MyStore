<!doctype html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Store - Admin Page</title>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../app/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../app/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../app/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../app/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../app/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../app/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../app/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../app/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../app/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../app/css/util.css">
    <link rel="stylesheet" type="text/css" href="../app/css/main.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="../app/css/btn.css">
</head>
<style>
    .display-4 {
        color: #5a5bd8;

    }

    .btn-primary {
        border: none;
        outline: none;
        color: black;
        cursor: pointer;
        position: relative;
        color: rgb(255, 255, 255);
        z-index: 0;
        border-radius: 10px;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }
</style>

<body>

    <div class="jumbotron text-center">
        <h1 class="display-4">Welcome back, Admin</h1>
        <p>Easily manage your data from this <mark>Admin Page</mark></p>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 pt-3">
                <div class="card" style="background-color:white;">
                    <div class="card-body">
                        <h4 class="card-title">Account</h4>
                        <p class="card-text">Manage all accounts section here.</p>
                        <a href="?route=manage-user" class="card-link btn btn-primary">Manage</a>

                    </div>
                </div>
            </div>

            <div class="col-sm-3 pt-3">
                <div class="card" style="background-color:white;">
                    <div class="card-body">
                        <h4 class="card-title">Products</h4>
                        <p class="card-text">Manage all products here.</p>
                        <a href="?route=manage-prd" class="card-link btn btn-primary">Manage</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 pt-3">
                <div class="card" style="background-color:white;">
                    <div class="card-body">
                        <h4 class="card-title">Orders</h4>
                        <p class="card-text">Manage all orders from customers here.</p>
                        <a href="?route=manage-order" class="card-link btn btn-primary">Manage</a>

                    </div>
                </div>
            </div>

        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>