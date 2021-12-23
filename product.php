<!DOCTYPE html>
<html lang="en">
<head>
    <title>小藍網購</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Latest compiled JavaScript -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script> -->

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <!-- bootstrap js -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- style -->
    <style>
        body, p{
            margin: 0;
        }
        body{
            background: #FFE5B5;
        }

        form{
            margin: 40px;
            border: 5px solid #8F5D00;
            border-radius: 15px;
            padding: 30px;
            background: #FFF7E8;
        }
        .create-product{
            margin-bottom: 20px;
        }
        table{
            width: 100%;
        }
        td{
            height: 50px;
            text-align: center;
        }
        .input{
            width: 80%;
        }

        .display-group{
            padding: 10px 30px;
            display: flex;
            align-items: center;
        }
        .display-group img{
            width: 200px;
            height: fit-content;

         }
        .display-item{
            padding: 10px 20px;
            display: flex;
            flex-direction: column;
            font-size: 20px;
        }
        .display-group:nth-child(odd){
            background: #E8E8E8;
        }
    </style>

</head>

<body>
    <form method="post">
        <div class="create-product">
            <table>
                <tr>
                    <td>產品名稱</td>
                    <td>產品描述</td>
                    <td>產品類型</td>
                    <td>售價</td>
                    <td>數量</td>
                    <td>產品圖片</td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="text" class="input" name="name"></td>
                    <td><input type="text" class="input" name="description"></td>
                    <td><input type="text" class="input" name="category"></td>
                    <td><input type="text" class="input" name="price"></td>
                    <td><input type="text" class="input" name="quantity"></td>
                    <td><input type="text" class="input" name="image"></td>
                    <td><input type="submit" name="add" value="新增產品"></td>
                </tr>
            </table>
            <?php
                include "test.php";

                $Product_CRUD = new test();
                $Product_CRUD->Product("add", $_POST['name'], $_POST['description'], $_POST['image'], $_POST['category'], $_POST['price'], $_POST['quantity']);
            ?>
        </div>
    </form>

</body>