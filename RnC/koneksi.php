<?php
	/*koneksi lokal
	 $servername = "localhost";
	 $username = "root";
	 $password = "";
	 $dbname = "db_rnc";
	 */

	 /*koneksi subdomain 2
	 $servername = "localhost";
	 $username = "kelasti2_18102119";
	 $password = "Dwikybp1423@";
	 $dbname = "kelasti2_db_rnc"; 
	 */

	 //koneksi subdomain1
	 $servername = "localhost";
	 $username = "kelasti2_prak9";
	 $password = "pusingsekali";
	 $dbname = "kelasti2_db_rnc";

	 // Create connection
	 $conn = new mysqli($servername, $username, $password, $dbname);

	 // Check connection
	 if ($conn->connect_error) {
	 	die("Connection failed: " . $conn->connect_error);
	 }
?>