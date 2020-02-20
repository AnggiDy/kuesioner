<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
  </script>
  <script type="text/javascript">
        function Click(input){
          var chk = document.querySelectorAll(".check:checked");
          var total = 0;
          if(chk.length < 9){
            alert( "You didn't select an answer for all questions")
          }
          else{
            chk.forEach(function(el){
               total += parseInt(el.getAttribute('value'));
            });
            var i,
            ranges = [];

            for (i = 0; i <= 9; i++) ranges[i] = "depresi ringan";
            for (i = 10; i <= 14; i++) ranges[i] = "depresi sedang";
            for (i = 15; i <= 19; i++) ranges[i] = "depresi berat";
            for (i = 20; i <= 27; i++) ranges[i] = "depresi sangat berat";

            //alert(ranges[total]);
            var PHQvar = ranges[total];
            alert("Kategori depresimu adalah: "+ ranges[total]);
            window.location.href = "phq.php?depresi="+ PHQvar; 
          } 
        };
  </script>

</head>

<body>


<?php 
	session_start();
	include 'koneksi.php';
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}

    if(isset($_GET['kategori'])){
        $filename = $_GET['kategori'];
    }

    if(isset($filename)){ 
        echo $_SESSION['username'] . ", your score GAD Anxiety Severity is " . $filename;
    $query="UPDATE mahasiswa SET jenis_gad='$filename' where username='".$_SESSION['username']."'";
	mysqli_query($koneksi, $query);
   	//header("location:index.php");
   }
?>

	<h5> Kuesioner kesehatan pasien-9 (PHQ-9)</h5>

	<br/>
	<p> selama 2 minggu terakhir, seberapa sering Anda terganggu oleh masalah-masalah berikut?</p>
	<br/>

	<form>
    <p>1. Kurangtertarik atau bergairah dalam melakukan apapun</p>
        <input type="radio" class ="check" name="choose" value=0>Tidak pernah
        <input type="radio" class ="check" name="choose" value=1>Beberapa Hari 
        <input type="radio" class ="check" name="choose" value=2>Lebihdari separuh waktu yang dimaksud
        <input type="radio" class ="check" name="choose" value=3>Hampir setiap hari
        <br>
    </form>
    <form>
       <p>2. Merasa murung, muram dan putus asa</p>
        <input type="radio" class ="check" name="choose" value=0>Tidak pernah
        <input type="radio" class ="check" name="choose" value=1>Beberapa Hari 
        <input type="radio" class ="check" name="choose" value=2>Lebihdari separuh waktu yang dimaksud
        <input type="radio" class ="check" name="choose" value=3>Hampir setiap hari
        <br>
      </form>
      <form>
         <p>3. Sulit tidur atau mudah terbangun atau terlalu banyak tidur</p>
        <input type="radio" class ="check" name="choose" value=0>Tidak pernah
        <input type="radio" class ="check" name="choose" value=1>Beberapa Hari 
        <input type="radio" class ="check" name="choose" value=2>Lebihdari separuh waktu yang dimaksud
        <input type="radio" class ="check" name="choose" value=3>Hampir setiap hari
        <br>
      </form>
      <form>
         <p>4. Merasa lelah atau kurang bertenaga</p>
        <input type="radio" class ="check" name="choose" value=0>Tidak pernah
        <input type="radio" class ="check" name="choose" value=1>Beberapa Hari 
        <input type="radio" class ="check" name="choose" value=2>Lebihdari separuh waktu yang dimaksud
        <input type="radio" class ="check" name="choose" value=3>Hampir setiap hari
        <br>
      </form>

      <form>

         <p>5. Kurang nafsu makan atau terlalu banyak makan</p>
        <input type="radio" class ="check" name="choose" value=0>Tidak pernah
        <input type="radio" class ="check" name="choose" value=1>Beberapa Hari 
        <input type="radio" class ="check" name="choose" value=2>Lebihdari separuh waktu yang dimaksud
        <input type="radio" class ="check" name="choose" value=3>Hampir setiap hari
        <br>

      </form>
      <form>
         <p>6. Kurang percaya diri - atau merasa bahwa Anda adalah orang yang gagal atau telah mengecewakan diri sendiri atau keluarga</p>
        <input type="radio" class ="check" name="choose" value=0>Tidak pernah
        <input type="radio" class ="check" name="choose" value=1>Beberapa Hari 
        <input type="radio" class ="check" name="choose" value=2>Lebihdari separuh waktu yang dimaksud
        <input type="radio" class ="check" name="choose" value=3>Hampir setiap hari
        <br>
      </form>
      <form>

         <p>7. Sulit berkonsentrasi pada sesuatu, misalnya membaca koran atau menonton televisi</p>
        <input type="radio" class ="check" name="choose" value=0>Tidak pernah
        <input type="radio" class ="check" name="choose" value=1>Beberapa Hari 
        <input type="radio" class ="check" name="choose" value=2>Lebihdari separuh waktu yang dimaksud
        <input type="radio" class ="check" name="choose" value=3>Hampir setiap hari
        <br>
      </form>
      <form>

         <p>8. Bergerak atau berbicara sangat lambat sehingga orang lain memperhatikannya. Atau sebaliknya - merasa resah atau gelisah sehingga Anda lebih sering bergerak dari biasanya</p>
        <input type="radio" class ="check" name="choose" value=0>Tidak pernah
        <input type="radio" class ="check" name="choose" value=1>Beberapa Hari 
        <input type="radio" class ="check" name="choose" value=2>Lebihdari separuh waktu yang dimaksud
        <input type="radio" class ="check" name="choose" value=3>Hampir setiap hari
        <br>
      </form>
      <form>

         <p>9. Merasa lebih baik mati atau ingin melukai diri sendiri dengan cara apapun</p>
        <input type="radio" class ="check" name="choose" value=0>Tidak pernah
        <input type="radio" class ="check" name="choose" value=1>Beberapa Hari 
        <input type="radio" class ="check" name="choose" value=2>Lebihdari separuh waktu yang dimaksud
        <input type="radio" class ="check" name="choose" value=3>Hampir setiap hari
        <br>
      </form>
  	<br>

    <input type ="button" name="resultButton" id = "totalSum" onclick = "Click();" value = "Get Result" >
    <br>
    <br>

	<a href="#">LOGOUT</a>

</body>
</html>