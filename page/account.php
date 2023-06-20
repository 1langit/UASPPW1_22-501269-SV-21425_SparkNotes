<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/gif" href="../img/sparkles.svg">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Log in to SparkNotes</title>
</head>
<body>
    <!-- Alert -->
    <?php
        if (isset($_GET['sign'])) {
            echo '
                <div class="container-fluid position-absolute alert alert-success text-center" role="alert">
                    Signup successful! Please login with your credentials.
                </div>
            ';
        }
    ?>

    <!-- Wrapper -->
    <div class="container vh-100 d-flex justify-content-center align-items-center wrapper">
        <div class="row align-items-center wrapper">

            <!-- Login -->
            <div class="col p-5 text-center login">
                <h3>Log in</h3>
                <br>
                <form id="loginForm" method="POST" action="../php/login.php">
                    <div class="form-floating">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input class="form-control border-secondary border-bottom pe-5" type="email" id="email" name="email" placeholder="email" required>
                        <label class="form-label" for="email">Email</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input class="form-control border-secondary border-bottom pe-5" type="password" id="password" name="password" placeholder="password" required>
                        <label class="form-label" for="password">Password</label>
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-primary w-100">Log in</button>
                    <br><br>
                    <p>Don't have an account? <a href="#" class="aSignup">Sign up</a></p>
                </form>
            </div>

            <!-- Signup -->
            <div class="col p-5 text-center signup">
                <h3>Sign up</h3>
                <br>
                <form id="signupForm" method="POST" action="../php/signup.php"">
                    <div class="form-floating">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <input class="form-control border-secondary border-bottom pe-5" type="username" id="username" name="username" placeholder="username" required>
                        <label class="form-label" for="username">Username</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input class="form-control border-secondary border-bottom pe-5" type="email" id="email" name="email" placeholder="email" required>
                        <label class="form-label" for="email">Email</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input class="form-control border-secondary border-bottom pe-5" type="password" id="password" name="password" placeholder="password" required>
                        <label class="form-label" for="password">Password</label>
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-primary w-100">Sign up</button>
                    <br><br>
                    <p>Already have an account? <a href="#" class="aLogin">Log in</a></p>
                </form>
            </div>
        </div>
    </div>



    <!-- Script -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/account.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>