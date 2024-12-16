<?php 
  
include '../conn.php';


if (isset($_GET['id'])){
    $query = mysqli_query($conn, "DELETE FROM kategori WHERE id = '$id' ");
    $countCategory = mysqli_fetch_object($query);
    
    if($countCategory == true) {
        echo"<div class='alert alert-success text-center' role='alert'>
            <strong>Success!</strong>
            Data Berhasil Dihapus
             </div>";
    } else {
        "<div class='alert alert-danger text-center' role='alert'>
            <strong>Failed!</strong>
            Data Gagal Dihapus
         </div>";
    }
}





?>