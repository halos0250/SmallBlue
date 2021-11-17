<!DOCTYPE html>
<html lang="en">
<head>
    <title>小藍網購</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- style -->
    <style>
        .carousel-item{
            height: 300px;
        }
        .carousel-item > img {
            height: 100%;
            max-width: 100%;
            margin: auto;
        }
    </style>

</head>
<body>
<header>
    <!-- 導覽 -->


    <!-- 輪播 -->
    <div id="advertisement" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#advertisement" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#advertisement" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#advertisement" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item bg-secondary active">
                <img src="images/test1.jfif" class="d-block">
            </div>
            <div class="carousel-item bg-secondary">
                <img src="images/test2.jfif" class="d-block">
            </div>
            <div class="carousel-item bg-secondary">
                <img src="images/test3.jfif" class="d-block">
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

<main>
    <!-- 工具欄 -->
    <article>
        
    </article>

    <!-- 最新商品 -->
    <article>

    </article>

    <!-- 推薦商品(個人化) -->
    <article>

    </article>
</main>

</body>

</html>