<!DOCTYPE HTML>
<head>
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <!-- bootstrap js -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  <style>

  </style>
</head>
<body>

<form method='POST'>
    <div class="container mt-3">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" name="search">
            <button class="btn btn-success" type="submit">Go</button>
        </div>
        <?php
        include "test.php";

        $SearchResults = new test;
        $SearchResults -> SearchResults($_POST);
        ?>
    </div>
</form>


</body>




