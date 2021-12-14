<?php
?>
<html lang="en">

<head>
    <title>Create Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="./account.css" rel="stylesheet">
</head>
<body>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row g-lg-5 py-5">
            <div class="col-lg-6 text-center text-lg-start create-account-header">
                <h1 class="display-4 fw-bold lh-1 mb-3">Create an Account with C.I.M.A.</h1>
                <hr class="my-4">
                <p class="col-lg-10 fs-4">With an account, you will be able to access a personalized dashboard
                    to create and view infrastructure damage reports with various tools.</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-6">
                <form class="p-4 p-md-5 border rounded-3 bg-light" action="create-account.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                            name="new_email" maxlength="100" required>
                        <label for="floatingInput">Email Address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Password"
                            name="new_username" maxlength="50" required>
                        <label for="floatingPassword">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                            name="new_password" maxlength="50" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                            name="new_repeatpassword" maxlength="50" required>
                        <label for="floatingPassword">Repeat Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
                    <hr class="my-4">
                    <small class="text-muted">By clicking Sign up, you agree to the <a href="./terms-of-use.html">Terms of Use.</a></small>
                </form>
            </div>
        </div>
</body>

</html>