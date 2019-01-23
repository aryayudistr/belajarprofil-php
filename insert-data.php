<?php 
    include "koneksi.php";

    $sql = "INSERT INTO user
    (
        id,
        nama,
        role,
        availability,
        age,
        location,
        years_experience,
        email
    ) VALUE (
        '1',
        'Arya Yudistira',
        'Student',
        'Full Time',
        '15',
        'Batu, Indonesia',
        '3',
        'ydstr37@gmail.com'
    )";

    if($koneksi->query($sql) == TRUE){
        echo "Insert data berhasil";
    }else{
        echo "Insert data gagal";
    }

?>

