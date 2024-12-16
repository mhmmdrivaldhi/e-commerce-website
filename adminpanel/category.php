<?php

    include '../conn.php';
    include 'navbar.php';

    $queryCategory = mysqli_query($conn, "SELECT * FROM kategori");
    $countCategory = mysqli_num_rows($queryCategory);


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

    <title>Category - Toko Online</title>
</head>
<body>
    
    <div class="container mb-5">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active fw-bold" aria-current="page"><i class="fa-solid fa-home me-1"></i><a href="index.php" class="text-secondary text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active fw-bold" aria-current="page"><i class="fa fa-layer-group me-1"></i>Category</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container mt-3">
        <h3 class="fw-bold text-secondary">Category</h3>
        
        <div class="btn-add mt-4">
            <a href="create-category.php" class="btn btn-outline-info btn-sm fw-bold"><i class="fa-solid fa-plus-circle me-1"></i>Add Category</a>
        </div>
        <div class="table mt-2">
            <table class="table table-striped">
                <thead class="bg-dark text-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>   
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        while($data = mysqli_fetch_array($queryCategory)){
                            if( $countCategory == 0) {
                    ?>
                        <tr>
                            <td>Category Not Found</td>
                        </tr>
                    <?php
                            } else {
                    ?>  
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['name']; ?></td>
                            <td>
                                <a href="edit-category.php?id= <?php echo $data['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="delete-category.php?=id <?php echo $data['id']; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php

                            }
                        }
                    
                    ?>

                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>