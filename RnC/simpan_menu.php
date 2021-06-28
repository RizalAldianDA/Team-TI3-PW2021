<?php
    include "koneksi.php";
    include "create_message.php";
    $fileName = $_FILES['gambar']['name'];


    if(isset($_POST['menu_id'])){
        //Kondisi Update
        $sql = "UPDATE menu SET nama = '".$_POST['nama']."',keterangan = '".$_POST['keterangan']."',bahan_utama = '".$_POST['bahan_utama']."',bumbu = '".$_POST['bumbu']."',langkah = '".$_POST['langkah']."',recipes_id = '".$_POST['recipes_id']."',foto = '$fileName' WHERE (`menu_id` = '".$_POST['menu_id']."');";
        move_uploaded_file($_FILES['gambar']['tmp_name'], "uploads/".$_FILES['gambar']['name']);
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            create_message("Ubah Data Berhasil","success","check");
            header("location: admin.php");
            exit();
        } else {
            $conn->close();
            create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
            header("location: admin.php");
            exit();
        } 
    } else{
        //Kondisi Insert
        $fileName = $_FILES['gambar']['name'];
        $sql = "INSERT INTO menu (nama , keterangan , bahan_utama , bumbu , langkah , recipes_id , foto)
        VALUES ('".$_POST['nama']."','".$_POST['keterangan']."', '".$_POST['bahan_utama']."', '".$_POST['bumbu']."', '".$_POST['langkah']."', ".$_POST['recipes_id'].",'$fileName')";
        move_uploaded_file($_FILES['gambar']['tmp_name'], "uploads/".$_FILES['gambar']['name']);
        if ($conn->query($sql) === TRUE) {
            $conn->close(); 
            create_message("Simpan Data Berhasil","success","check");
            header("location:admin.php");
            exit();
        } else {
            $conn->close();
            create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
            header("location:admin.php");
            exit();
        }
    }
?>