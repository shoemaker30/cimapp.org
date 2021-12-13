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
        if ($row['RoleName'] == "administrator"){
            session_destroy();
            session_start();
            session_unset();
            $_SESSION["loggedAs"] = "administrator";
            header("Location:../supervisor-dashboard");
            die();
        }
        else if ($row['RoleName'] == "supervisor"){
            session_destroy();
            session_start();
            session_unset();
            $_SESSION["loggedAs"] = "supervisor";
            header("Location:../supervisor-dashboard");
            die();
        }
        else if ($row['RoleName'] == "reporter"){
            session_destroy();
            session_start();
            session_unset();
            $_SESSION["loggedAs"] = "reporter";
            header("Location:../reporter-dashboard");
            die();
        }
        else{  // if user not in database
            header("Location:./sign-in.php?invalid=true");
            die();
        }
    }
?>