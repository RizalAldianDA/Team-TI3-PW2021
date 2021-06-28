<?php
	 include "koneksi.php";
	 include "create_message.php";
	 $sql = "DELETE from menu where menu_id=".$_GET['menu_id'];
	 if ($conn->query($sql) === TRUE) {
		 $conn->close();
		 create_message("Hapus Data Berhasil","success","check");
		 header("location:admin.php");
		 exit();
	 } else {
		 $conn->close();
		 create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
		 header("location:admin.php");
		 exit();
	 }
?>