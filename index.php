<?php
    include './components/navbar.inc.php'
?>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="./favicon.ico">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <script>
    setActivePage("home");
    </script>
</head>

<body>
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
</body>

</html>