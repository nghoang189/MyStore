<!doctype html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>Store - Products</title>
    <style>
        .nav-item {
            padding: 0.1em 0.5em;
            border: none;
            outline: none;
            color: rgb(255, 255, 255);
            background: whitesmoke;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .nav-item:before {
            content: "";
            background: linear-gradient(
                    45deg,
                    #ff0000,
                    #ff7300,
                    #fffb00,
                    #48ff00,
                    #00ffd5,
                    #002bff,
                    #7a00ff,
                    #ff00c8,
                    #ff0000
            );
            position: absolute;
            top: -2px;
            left: -2px;
            background-size: 200%;
            z-index: -1;
            filter: blur(5px);
            -webkit-filter: blur(5px);
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            animation: glowing-nav-item 20s linear infinite;
            transition: opacity 0.3s ease-in-out;
            border-radius: 10px;
        }

        @keyframes glowing-nav-item {
            0% {
                background-position: 0 0;
            }
            50% {
                background-position: 400% 0;
            }
            100% {
                background-position: 0 0;
            }
        }

        .nav-item:after {
            z-index: -1;
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: whitesmoke;
            left: 0;
            top: 0;
            border-radius: 10px;
        }
        .nav-item:hover {
            text-shadow:0px -40px 0px rgba(255, 255, 255, 0);
            transform:translateY(15%) translateZ(1px) scale(1.1);
            font-weight:450;
            transition:all 0.75s;
            transition-delay:all 0.5s;
        }
        .btn-danger{
            padding: 0.2em 0.8em;
            border: none;
            outline: none;
            color: rgb(255, 255, 255);
            background: red;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .btn-warning{
            padding: 0.2em 0.8em;
            border: none;
            outline: none;
            color: black;
            background: #FFCC00;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .btn-primary{
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
</head>
<body>
<div class="container-fluid">

    <a href="?route=dang-ky" style="margin: 20px 0" class="btn btn-primary">Add Product</a>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Preview</th>
            <th scope="col">Delete</th>
            <th scope="col">Update</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($productList as $phieu): ?>
        <tr>
            <th scope="row"><?=$phieu['MaSV']?></th>
            <td style="width:300px; padding-right: 30px;"><?= $phieu['HoTen'] ?></td>
            <td><?=$phieu['ChuyenNganh']?></td>
            <td style="width:500px; padding-right: 40px;" ><?=$phieu['CongTy']?></td>
        
            <td><img height="auto" width="150px" src="../app/images/<?=$phieu['Image']?>"></td>

            <td><a href="?route=delete&idPhieu=<?=$phieu['MaSV']?>" class="btn btn-danger">Delete</a></td>
            <td><a href="" th:href="@{/admin/products/update/{id}(id=${product.id})}" class="btn btn-warning">Update</a></td>

        </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>