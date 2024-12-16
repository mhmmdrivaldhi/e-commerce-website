<?php 

    include "../conn.php";
    session_start();

    if (isset($_SESSION['username'])) {
        header("location: index.php");
        exit();
    }

    if (isset($_POST['loginbtn'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = hash('sha256', $_POST['password']); // Hash the input password using SHA-256
     
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);
     
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("location: index.php");
            exit();
        } else {
            echo "<div class='alert alert-danger text-center' role='alert'>
                    <strong>Maaf,</strong> Email Address atau Password Salah!
                  </div>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <title>Login - Toko Online</title>
</head>
<body>
<div class="wrapper">
        <div class="logo">
            <img src="../img/logo-olshop.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            LOGIN
        </div>
        <form action="" method="POST" class="p-3 mt-3">

            <div class="form-field d-flex align-items-center">
                <span class="far fa-envelope"></span>
                <input type="email" name="email" id="email" placeholder="Email Address" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Password . . ." required>
            </div>
            <button class="btn mt-3 fw-bold" name="loginbtn" type="submit">Login</button>
        </form>
        <div class="text-center fs-10">
             <p>Don't Have an Account ?<a href="register.php" class="fw-bold fs-6"> Register</a></p>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>