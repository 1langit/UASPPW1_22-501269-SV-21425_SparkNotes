<?php
    session_start();
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        echo "Hello, ".$_SESSION['username']."!";
    } else {
        header("Location: ../page/account.php");
    }
    // echo "Hello, ".$username->fetch_assoc()["username"]."!";
?>