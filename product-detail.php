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

        body{
            background: #FFF7E8;
        }
        main{
            margin: 30px 0;
        }

        .navbar{
            padding: 15px 0;
        }
        /* 修改bootstrap的導覽列 */
        .navbar-expand-sm .navbar-collapse{
            justify-content: space-between;
        }

        .input-group{
            border: 4px solid white;
            width: 600px;
        }

        /* 修改bootstrap的form格式 */
        .form-control{
            border-radius: 0;
        }
        .carousel-item > img {
            height: 100%;
            margin: auto;
        }
        #btn > img{
            height: 50px;
            max-width: 100%;
            margin: auto;
        }
        #btn > p{
            margin-top: 5px;
            text-align: center;
            /*font-family: 微軟正黑體;*/
            font-size: large;
        }
        footer{
            margin-top: 50px;
        }

        main{
            display: flex;
        }
        article{
            width: 85%;
        }
        .product{
            display: flex;
        }
        .product-pic{
            width: 300px;
        }
        .product-pic img{
            width: 300px;
            height: auto;
        }
        .product-detail{
            width: 100%;
        }
        .product-detail h1{
            padding: 10px 50px 10px 30px;
            font-size: 23px;
            display: block;
        }
        .prise h2{
            font-size: 25px;
            font-weight: bold;
            color: crimson;
            display: inline-block;
        }
        .prise span{
            padding-right: 8px;
            color: gray;
            text-decoration: line-through;
            display: inline-block;
        }
        .prise{
            margin-left: 30px;
            padding: 20px 50px 20px 20px;
            background: #EDEDED;
        }
        .product-detail p{
            margin: 10px 50px;
            font-size: 16px;
            display: block;
        }
        .product-category a{
            margin: 10px 0;
            text-decoration: none;
            border-bottom: 1px solid black;
            font-size: 20px;
            color: black;
            text-align: center;
            display: block;
        }
        .product-category a:hover{
            margin: 10px 0;
            text-decoration: none;
            border-bottom: 1px solid black;
            font-size: 20px;
            color: white;
            background: black;
            text-align: center;
            display: block;
        }
        .product-detail table{
            display: block;
            padding-left: 45px;
        }
        .product-detail td{
            padding: 10px 5px;
        }
        .product-detail .cart{
            margin: 10px 50px;
            padding: 8px;
            display: block;
        }
        .product-detail div a{
            padding: 8px;
            background: black;
            text-decoration: none;
            color: white;
        }
        article section{
            background: white;
            margin-bottom: 20px;
            padding: 20px;
            width: 100%;
        }
        aside{
            width: 15%;
            margin-right: 20px;
            display: flex;
            flex-direction: column;
            font-size: 20px;
        }
        .product-category{
            padding: 15px;
            background: white;
        }

    </style>

</head>
<body>
<header>
    <!-- 導覽 -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="javascript:void(0)">小藍網購</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">通知</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">賣場</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">賣家中心</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class='nav-item'>
                        <form method='POST'>
                            <div class='input-group'>
                                <input type='text' class='form-control' placeholder='搜尋' name='search'>
                                <button class='btn btn-dark' type='submit'>Go</button>
                            </div>
                        </form>
                    </li>
                    <?php
                    //跳轉搜尋
                    if($_POST['search'] != null)
                        header("Location: search.php?search=".$_POST['search']);
                    ?>
                </ul>
                <ul class="navbar-nav">
                    <?php
                    //顯示會員
                    echo "<li class='nav-item'><a class='nav-link' href='login.php'>";
                    session_start();
                    if($_SESSION['name'] == null)
                        echo "會員登入</li></a>";
                    else
                    {
                        echo "歡迎".$_SESSION['name']."</li></a>";
                        //跳destroy.php執行session destroy
                        echo "<li class='nav-item'><a class='nav-link' href='destroy.php'>登出</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

</header>

<main class="container">

    <!-- -->
    <aside>
        <section class="product-category">
            <div>
                <a href="category.php?category=生活">生活</a>
            </div>
            <div>
                <a href="category.php?category=服飾">服飾</a>
            </div>
            <div>
                <a href="category.php?category=娛樂">娛樂</a>
            </div>
            <div>
                <a href="category.php?category=3C">3C</a>
            </div>
            <div>
                <a href="category.php?category=家電">家電</a>
            </div>
            <div>
                <a href="category.php?category=其他">其他</a>
            </div>
            <div>
                <a href="category.php?category=零食">零食</a>
            </div>
            <div>
                <a href="category.php?category=書">書</a>
            </div>
        </section>
    </aside>

    <article>
        <?php
        include"test.php";

        $ProductDetail=new test();
        $ProductDetail->ProductDetail($_GET['p_id']);
        ?>

        <section>
            <p>商品評價：</p>
            <!--star-->
            <div>
                <span>user</span>
                <pre>very good!</pre>
            </div>
        </section>
    </article>

</main>

<footer class="py-5 bg-dark">
    <div class="container">

    </div>
</footer>

</body>

</html>