<?php
    require 'koneksi.php'; // 1

    $id = $_GET['id']??''; // 2

    if($id === '' || !ctype_digit($id)) {
        echo '<p style="color:red;"> !! ID Tidak VALID !!</p>'; // 3
    } else {
        $query = 'delete from film where id = ?';
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id); //4
        mysqli_stmt_execute($stmt);
    } 
    
    if(mysqli_stmt_affected_rows($stmt) === 1) {
        echo '<p>Data Berhasil Dihapus .</p>'; //5
    } else {
        echo '<p>Data Tidak Ditemukan.</p>' ;
    }


    echo '<a href="index.php">Kembali</a>'; // 6

    