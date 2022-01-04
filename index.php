<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <!-- Bootstrap core CSS -->
    <link href="./bootstrap/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="./bootstrap/assets/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/main.css">
    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>
</head>
<body>
    <!-- navbar -->
    <?php include './components/navbar.inc.php';?>
    <script>setActivePage("about");</script>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">Voice Your Concerns</h1>
            <p class="lead fw-normal">CIMA makes it easier than ever for you to inform your 
                city about issues with public infrastructure. In less than a minute you can 
                report about any issue that needs addressed.</p>
            <a class="btn btn-outline-secondary" href="#">App Store</a>
            <a class="btn btn-outline-secondary" href="#">Google Play</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
    <!-- footer -->
    <?php include './components/footer.inc.php';?>
</body>

</html>
