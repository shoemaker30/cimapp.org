<?php
    session_start();
    $rightNav = '<a class="nav-link" id="sign-in" href="/account/sign-in.php"><i data-feather="user"></i>  Sign In  </a>';
    if (isset($_SESSION["CurrentUser_Role"])){
        $rightNav = '<a class="nav-link" id="sign-in" href="/account/sign-in.php"><i data-feather="user"></i>  '.$_SESSION["CurrentUser_Username"].'</a>';
    }
?>
<head>
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
    <script src="https://kit.fontawesome.com/d81ae76bde.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">C.I.M.A.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" id="about" href="/index.php"> About </a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" id="dashboard" href="/dashboard"> Dashboard </a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" id="contact" href="/contact"> Contact </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <?php echo $rightNav;?>
                    </li>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script>
        // Function to set the selected page in the navbar. This function should be called by every page that includes this navbar. 
        function setActivePage(activePageName){
            document.getElementById(activePageName).className += " active";
        }
    </script>
</body>
</html>