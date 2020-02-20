<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
	session_start();
	include 'koneksi.php';
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}

    if(isset($_GET['depresi'])){
        $filename = $_GET['depresi'];
    }

    if(isset($filename)){ 
        echo $_SESSION['username'] . ", Kategori depresimu adalah " . $filename;
    $query="UPDATE mahasiswa SET jenis_phq='$filename' where username='".$_SESSION['username']."'";
	mysqli_query($koneksi, $query);
   	//header("location:index.php");
   }
?>

</body>
</html>