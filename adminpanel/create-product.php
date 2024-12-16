<?php

include '../conn.php';
include 'navbar.php';


    $queryCategory = mysqli_query($conn, "SELECT * FROM kategori");
    $countCategory = mysqli_num_rows($queryCategory);

    $queryProduct = mysqli_query($conn, "SELECT * FROM produk");
    $countProduct = mysqli_num_rows($queryProduct);

    function generateRandomString($length = 10) {
        $char = '0123456789abcdefghijklmnopqrstuvwxyz';
        $charLength = strlen($char);
        $randString = '';
        for ($i = 0; $i < $length; $i++) {
            $randString .= $char[rand(0, $charLength - 1)];
        }
        return $randString;
    }

if (isset($_POST['btn-product-create'])) {
    $category = $_POST['category'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $foto = $_FILES['pictureUpload'];
    $detail = $_POST['description'];
    $stock = $_POST['stock'];

    $target_dir = "../img/foto-product/";
    $target_file = $target_dir . basename($_FILES['pictureUpload']['name']);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $file_size = $_FILES['pictureUpload']['size'];
    $randName = generateRandomString(15);
    $new_randName = $randName . "." . $imageFileType;

    // echo $target_dir . "<br>";
    // echo $target_file . "<br>";
    // echo $imageFileType . "<br>";
    // echo $file_size;

    if ($category = '' && $name = '' && $price = '' ) {
        echo "<div class='alert alert-danger text-center' role='alert'>
                     <strong>Failed!</strong>
                     Data Gagal Ditambahkan
              </div>";
    } else {
        if ($target_file != '') {
            if ($file_size > 500000) {
                echo "<div class='alert alert-danger text-center' role='alert'>
                     <strong>Failed!</strong>
                     Size Foto Terlalu Besar!
                     </div>";
            } else {
                if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg') {
                    echo "<div class='alert alert-danger text-center' role='alert'>
                            <strong>Failed!</strong>
                            Format Foto Tidak Sesuai!
                          </div>";
                } else {
                    move_uploaded_file($_FILES['pictureUpload']['tmp_name'], $target_dir . $new_randName );
                }
            }   
        } 
            $create_product = mysqli_query($conn, "INSERT INTO `produk` (`kategori_id`, `name`, `harga`, `foto`, `detail`, `ketersediaan`) VALUES($category, '$name', '$price', '$new_randName', '$detail', '$stock')");

            if ($create_product) {
                "<div class='alert alert-success text-center' role='alert'>
                    <strong>Success!</strong>
                    Data Berhasil Ditambahkan

                    <meta http-equiv='refresh' content='2; url=category.php'/>
                </div>";
            } else {
                echo mysqli_error($conn);
            }
        }
    }
    

    // if ($category && $name && $price && $foto && $detail && $stock  == true) {
    //     $sql = "INSERT INTO kategori (kategori_id, name, harga, foto, detail, ketersediaan ) VALUES ($category, $name, $price, $foto, $detail, $stock)";
    //     $result = mysqli_query($conn, $sql);

    //     if ($result) {
    //         echo "<div class='alert alert-success text-center' role='alert'>
    //                 <strong>Success!</strong>
    //                 Data Berhasil Ditambahkan
    //               </div>";
    //         $name = "";
    //     } else {
    //         echo "<div class='alert alert-danger text-center' role='alert'>
    //                 <strong>Failed!</strong>
    //                 Data Gagal Ditambahkan
    //               </div>";
    //     }
    // }

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
                    <li class="breadcrumb-item active fw-bold" aria-current="page"><i
                            class="fa-solid fa-home me-1"></i><a href="index.php"
                            class="text-secondary text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active fw-bold" aria-current="page"><i
                            class="fa-solid fa-cart-shopping me-1"></i>Product</li>
                    <li class="breadcrumb-item active fw-bold" aria-current="page"><i
                            class="fa-solid fa-cart-shopping me-1"></i>Product Create</li>
                </ol>
            </nav>
        </div>

        <h3 class="fw-bold text-secondary mt-5">Category Create</h3>

        <form action="" method="POST" enctype="multipart/form-data">

            <div class="mb-3 mt-4">
                <label for="category" class="fw-bold mb-2">Category Name</label>
                <select class="form-select" name="category" required>
                    <option value="">Choose Category</option>
                    <?php  
                        while($data = mysqli_fetch_array($queryCategory)){
                    ?>
                    <option value="<?php echo $data['id'];?>"><?php echo $data['name']; ?></option>
                    <?php
                        }   
                    ?>
                </select>
            </div>
            <div class="mb-3 mt-4">
                <label for="name" class="form-label fw-bold">Product Name</label>
                <input type="text" class="form-control" name="name" id="product-name" placeholder="Enter Product Name . . ." required>
            </div>
            <div class="mb-3 mt-4">
                <label for="price" class="form-label fw-bold">Price</label>
                <input type="number" class="form-control" name="price" id="price" placeholder="Enter Price . . ." required>
            </div>
            <div class="mb-3 mt-4">
                <label for="pictureUpload" class="form-label fw-bold">Picture</label>
                <input type="file" class="form-control" name="pictureUpload" id="pictureUpload">
            </div>
            <div class="mb-3 mt-4">
                <label for="detail" class="form-label fw-bold">Description</label>
                <textarea type="text" class="form-control" name="description" id="picture"></textarea>
            </div>
            <div class="mb-3 mt-4">
                <label for="stock" class="fw-bold mb-2">Stock Available</label>
                <select class="form-select" name="stock" required>
                <?php  
                        while($data = mysqli_fetch_array($queryProduct)){
                    ?>
                    <option value="<?php echo $data['ketersediaan'];?>">Tersedia</option>
                    <option value="<?php echo $data['ketersediaan'];?>">Tidak Tersedia</option>
                    <?php
                        }   
                    ?>
                </select>
            </div>
            <button type="submit" name="btn-product-create" class="btn btn-outline-info fw-bold">Submit</button>
        </form>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>