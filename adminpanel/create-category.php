<?php

include '../conn.php';
include 'navbar.php';


if (isset($_POST['saveCategory'])) {
    $name = $_POST['categoryName'];

    if ($name == true) {
        $sql = "INSERT INTO kategori (name) VALUES ('$name')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<div class='alert alert-success text-center' role='alert'>
                    <strong>Success!</strong>
                    Data Berhasil Ditambahkan
                  </div>";
            $name = "";
        } else {
            echo "<div class='alert alert-danger text-center' role='alert'>
                    <strong>Failed!</strong>
                    Data Gagal Ditambahkan
                  </div>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.1/css/all.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Category Create - Toko Online</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active fw-bold" aria-current="page"><i class="fa-solid fa-home me-1"></i><a href="index.php" class="text-secondary text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active fw-bold" aria-current="page"><i class="fa fa-layer-group me-1"></i>Category</li>
                    <li class="breadcrumb-item active fw-bold" aria-current="page"><i class="fa fa-layer-group me-1"></i>Category Create</li>
                </ol>
            </nav>
        </div>

        <h3 class="fw-bold text-secondary mt-5">Category Create</h3>

        <form action="" method="POST">
            <div class="mb-3 mt-4">
                <label for="categoryName" class="form-label fw-bold">Category Name</label>
                <input type="text" class="form-control" name="categoryName" id="categoryName" placeholder="Enter Category Name . . .">
            </div>
            <button type="submit" name="saveCategory" class="btn btn-outline-info fw-bold">Submit</button>
        </form>
        
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>