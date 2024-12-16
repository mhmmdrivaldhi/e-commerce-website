<?php 

    require "../conn.php";
    session_start();

    if (isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }

    if (isset($_POST['register-btn'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = hash('sha256', $_POST['password']); // Hash the input password using SHA-256
        $cpassword = hash('sha256', $_POST['cpassword']); // Hash the input confirm password using SHA-256
     
        if ($password == $cpassword) {
            $sql = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            if (!$result->num_rows > 0) {
                $sql = "INSERT INTO users (username, password, email)
                        VALUES ('$username', '$password', '$email')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<div class='alert alert-success text-center' role='alert'>
                            <strong>Success! Data Berhasil Disimpan</strong>
                          </div>";
                    $username = "";
                    $email = "";
                    $_POST['password'] = "";
                    $_POST['cpassword'] = "";
                } else {
                    echo "<div class='alert alert-danger text-center' role='alert'>
                            <strong>Maaf! Terjadi Kesalahan</strong>
                          </div>";
                }
            } else {
                echo "<div class='alert alert-danger text-center' role='alert'>
                        <strong>Ups! Email Address Sudah Digunakan</strong>
                      </div>";
            }
        } else {
            echo "<div class='alert alert-warning text-center' role='alert'>
                    <strong>Password Tidak Sesuai!</strong>
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

    <title>Registration - Toko Online</title>
</head>
<body>
<div class="wrapper">
        <div class="logo">
            <img src="../img/logo-olshop.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            REGISTRATION
        </div>
        <form action="" method="POST" class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="username" id="name" placeholder="Username . . ." required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-envelope"></span>
                <input type="email" name="email" id="email" placeholder="Email address . . ." required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Password . . ." required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password . . ." required>
            </div>
            <button name="register-btn" type="submit" class="btn mt-3 fw-bold">Registration</button>
        </form>
        <div class="text-center fs-10">
             <p>Have an Account ?<a href="login.php" class="fw-bold fs-6"> Login</a></p>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>