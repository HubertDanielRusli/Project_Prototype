<?php
	session_start(); // Aktifkan $_SESSION
	$host = "";
	$rootDirectory = "";

	// function setURL_"Namafile"
	// {
	// 	$host = "http://localhost/Chatroom";
	// 	$rootDirectory = "C:/xampp/htdocs/Chatroom";
	// }

	function setURL_Default()
	{
		$host = 'http://localhost/Project_masuk_keluar_product';
		$rootDirectory = 'D:\XAMMP\htdocs\Project_masuk_keluar_product\Layout\Framework_Halaman_Index_Utama.php';
	}

	/**
	 * Aktifkan lokasi Host dan RootDirectory
	 * Sesuai dengan alamat URL yang sudah ada
	 */
	//setURL_"Namafile";
	setURL_Default();

	date_default_timezone_set('Asia/Jakarta');
	$emailAdmin = '';

	// Konfigurasi atribut penting dalam database PHPMyAdmin
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'Project masuk-keluar product';

	// Menggunakan PDO sebagai database
	// $pdo = new PDO('mysql:dbname='.$dbname, $dbuser, $dbpass);
	// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

	$controllerDirectory = $host . '/web/';
	$layoutDirectory = $rootDirectory . '/layout/';
	$assetDirectory = $host . '/assets/';
	$uploadDirectory = $rootDirectory . '/uploads/';
?>
 