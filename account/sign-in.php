<?php
    session_start();

    if (isset($_POST['signin_username']) && isset($_POST['signin_password'])){

        include '../dbConfig.inc.php';

        $username = $_POST['signin_username'];
        $password = $_POST['signin_password'];

        //get the role of the user. If user is not in database, then the role is empty set
        $result = $conn->query("CALL CIMAdb_LogIn('$username','$username','$password');");
        $row = $result->fetch_assoc();

        // set session as user role and redirect
        if ($row['RoleName'] == "administrator" || $row['RoleName'] == "supervisor" || $row['RoleName'] == "reporter"){
            session_destroy();
            session_start();
            session_unset();
            $_SESSION["CurrentUser_Role"] = "administrator";
            $_SESSION["CurrentUser_Username"] = $row['Username'];
            header("Location:../dashboard/my-account.php");
            die();
        }
        else{  // if user not in database
            header("Location:./sign-in.php?invalid=true");
            die();
        }
    }
    // 'invalid' is added to the url when the user tries to log in with invalid credentials
    // the point of this variable is to change the styling to red and display an error
    $invalid = null;
    if (isset($_GET['invalid'])){
        $invalid = $_GET['invalid'];
    }
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="./account.css" rel="stylesheet">
</head>
<body class="text-center">
    <main class="form-signin">
        <form action="sign-in.php" method="post">
            <h1 class="h3 mb-3 fw-normal">Welcome back to CIMA!</h1>
            <h2 class="h4 mb-3 fw-normal">Sign-In below.</h2>
            <p>New User? Create an account <a href="./create-account.php">here</a>.</p>
            <?php
                if ($invalid != null){
                    echo('<label class="invalid">Credentials not found. Please Try Again. </label>');
                }
            ?>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="signin_username" maxlength="100" required>
                <label for="floatingInput">Username or Email</label>
            </div> 
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="signin_password" maxlength="50" required>
                <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
            <script>
            function displayError(){
                let text_inputs = document.getElementsByClassName("form-control");
                Array.prototype.map.call(text_inputs, t => {
                    t.className += " invalid";
                });
            }
            </script>
            <?php
                if($invalid != null){
                    echo('<script>displayError();</script>');
                }
            ?>
        </form>
    </main>
</body>
</html>