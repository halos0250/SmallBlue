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
        footer{
            margin-top: 50px;
        }
        
        .carousel-item{
            height: 300px;
        }
        .carousel-item > img {
            height: 100%;
            margin: auto;
        }
        
        #btn{
            margin-top: 50px;
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
        #category{
            text-align: center;
        }
        
    </style>

</head>
<body>
<header>
    <!-- 導覽 -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="javascript:void(0)">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- 輪播 -->
    <div id="advertisement" class="carousel slide container" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#advertisement" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#advertisement" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#advertisement" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item bg-secondary active">
                <img class="d-block" src="images/test1.jfif">
            </div>
            <div class="carousel-item bg-secondary">
                <img class="d-block" src="images/test2.jfif">
            </div>
            <div class="carousel-item bg-secondary">
                <img class="d-block" src="images/test3.jfif">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#advertisement" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#advertisement" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

</header>

<main class="container">
    <!-- 工具欄 -->
    <article>
        <!-- 常用連結 -->
        <section class="row">
            <div id="btn" class="col-lg-2 d-block">
                <img class="d-block" src="images/shopping%20cart.png">
                <p>已完成訂單</p>
            </div>
            <div id="btn" class="col-lg-2 d-block">
                <img class="d-block" src="images/shopping%20cart.png">
                <p>待出貨</p>
            </div>
            <div id="btn" class="col-lg-2 d-block">
                <img class="d-block" src="images/shopping%20cart.png">
                <p>待取貨</p>
            </div>
            <div id="btn" class="col-lg-2 d-block">
                <img class="d-block" src="images/shopping%20cart.png">
                <p>退貨</p>
            </div>
            <div id="btn" class="col-lg-2 d-block">
                <img class="d-block" src="images/shopping%20cart.png">
                <p>取消訂單</p>
            </div>
            <div id="btn" class="col-lg-2 d-block">
                <img class="d-block" src="images/shopping%20cart.png">
                <p>優惠券</p>
            </div>
        </section>

    </article>

    <!-- 推薦商品(個人化) -->
    <article>
        <h2 class="my-4">推薦商品</h2>
        <section class="row">
            <div class="col-lg-2">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="images/顧客關係.jfif" alt="">
                    <div class="card-body">
                        <p class="card-text">【現貨】顧客關係管理：觀念、策略與工具 Kumar/黃明蕙 雙葉</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="images/顧客關係.jfif" alt="">
                    <div class="card-body">
                        <p class="card-text">【現貨】顧客關係管理：觀念、策略與工具 Kumar/黃明蕙 雙葉</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="images/顧客關係.jfif" alt="">
                    <div class="card-body">
                        <p class="card-text">【現貨】顧客關係管理：觀念、策略與工具 Kumar/黃明蕙 雙葉</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="images/顧客關係.jfif" alt="">
                    <div class="card-body">
                        <p class="card-text">【現貨】顧客關係管理：觀念、策略與工具 Kumar/黃明蕙 雙葉</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="images/顧客關係.jfif" alt="">
                    <div class="card-body">
                        <p class="card-text">【現貨】顧客關係管理：觀念、策略與工具 Kumar/黃明蕙 雙葉</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="images/顧客關係.jfif" alt="">
                    <div class="card-body">
                        <p class="card-text">【現貨】顧客關係管理：觀念、策略與工具 Kumar/黃明蕙 雙葉</p>
                    </div>
                </div>
            </div>
        </section>
    </article>

    <!-- 分類 -->
    <article>
        <h3 id="category" class="my-4">分類</h3>
        <section class="row">
            <div id="btn" class="col-lg-2 d-block">
                <img class="d-block" src="images/shopping%20cart.png">
                <p>生活</p>
            </div>
            <div id="btn" class="col-lg-2 d-block">
                <img class="d-block" src="images/shopping%20cart.png">
                <p>服飾</p>
            </div>
            <div id="btn" class="col-lg-2 d-block">
                <img class="d-block" src="images/shopping%20cart.png">
                <p>娛樂</p>
            </div>
            <div id="btn" class="col-lg-2 d-block">
                <img class="d-block" src="images/shopping%20cart.png">
                <p>3C</p>
            </div>
            <div id="btn" class="col-lg-2 d-block">
                <img class="d-block" src="images/shopping%20cart.png">
                <p>遊戲</p>
            </div>
            <div id="btn" class="col-lg-2 d-block">
                <img class="d-block" src="images/shopping%20cart.png">
                <p>家電</p>
            </div>
        </section>

    </article>

    <!-- 暢銷/最新商品 -->
    <article>
        <h2 class="my-4">暢銷商品</h2>
        <section class="row">
            <div class="col-lg-2">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="images/顧客關係.jfif" alt="">
                    <div class="card-body">
                        <p class="card-text">【現貨】顧客關係管理：觀念、策略與工具 Kumar/黃明蕙 雙葉</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="images/顧客關係.jfif" alt="">
                    <div class="card-body">
                        <p class="card-text">【現貨】顧客關係管理：觀念、策略與工具 Kumar/黃明蕙 雙葉</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="images/顧客關係.jfif" alt="">
                    <div class="card-body">
                        <p class="card-text">【現貨】顧客關係管理：觀念、策略與工具 Kumar/黃明蕙 雙葉</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="images/顧客關係.jfif" alt="">
                    <div class="card-body">
                        <p class="card-text">【現貨】顧客關係管理：觀念、策略與工具 Kumar/黃明蕙 雙葉</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="images/顧客關係.jfif" alt="">
                    <div class="card-body">
                        <p class="card-text">【現貨】顧客關係管理：觀念、策略與工具 Kumar/黃明蕙 雙葉</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="images/顧客關係.jfif" alt="">
                    <div class="card-body">
                        <p class="card-text">【現貨】顧客關係管理：觀念、策略與工具 Kumar/黃明蕙 雙葉</p>
                    </div>
                </div>
            </div>
        </section>

        <h2 class="my-4">最新商品</h2>
        <section class="row">
            <div class="col-lg-2">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="images/顧客關係.jfif" alt="">
                    <div class="card-body">
                        <p class="card-text">【現貨】顧客關係管理：觀念、策略與工具 Kumar/黃明蕙 雙葉</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="images/顧客關係.jfif" alt="">
                    <div class="card-body">
                        <p class="card-text">【現貨】顧客關係管理：觀念、策略與工具 Kumar/黃明蕙 雙葉</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="images/顧客關係.jfif" alt="">
                    <div class="card-body">
                        <p class="card-text">【現貨】顧客關係管理：觀念、策略與工具 Kumar/黃明蕙 雙葉</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="images/顧客關係.jfif" alt="">
                    <div class="card-body">
                        <p class="card-text">【現貨】顧客關係管理：觀念、策略與工具 Kumar/黃明蕙 雙葉</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="images/顧客關係.jfif" alt="">
                    <div class="card-body">
                        <p class="card-text">【現貨】顧客關係管理：觀念、策略與工具 Kumar/黃明蕙 雙葉</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="images/顧客關係.jfif" alt="">
                    <div class="card-body">
                        <p class="card-text">【現貨】顧客關係管理：觀念、策略與工具 Kumar/黃明蕙 雙葉</p>
                    </div>
                </div>
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