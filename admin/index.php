<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
  </script>
  <script type="text/javascript">
        function handleClick(input){
          var chk = document.querySelectorAll(".check:checked");
          var total = 0;
          if(chk.length < 7){
            alert( "You didn't select an answer for all questions")
          }
          else{
            chk.forEach(function(el){
               total += parseInt(el.getAttribute('value'));
            });
            var i,
            ranges = [];

            for (i = 0; i <= 4; i++) ranges[i] = "minimal anxiety";
            for (i = 5; i <= 9; i++) ranges[i] = "mild anxiety";
            for (i = 10; i <= 14; i++) ranges[i] = "moderate anxiety";
            for (i = 15; i <= 21; i++) ranges[i] = "severe anxiety";

            //alert(ranges[total]);
            var JSvar = ranges[total];
            alert("Your anxiety kategori is: "+ ranges[total]);
            window.location.href = "gad.php?kategori="+ JSvar; 
          } 
        };
  </script>
</head>
<body>
	<h2>Halaman Admin</h2>
	
	<br/>
	
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
  <h5> Kuesioner GAD- 7 Anxiety</h5>

	<br/>
  <p>Over the last two weeks, how often have you been bothered by the following problems?</p>
	<br/>

	<form>
    <p>1. Feeling nervous, anxious, or on edge</p>
        <input type="radio" class ="check" name="choose" value=0>Not at all 
        <input type="radio" class ="check" name="choose" value=1>Several days 
        <input type="radio" class ="check" name="choose" value=2>More than half the days
        <input type="radio" class ="check" name="choose" value=3>Nearly every day
        <br>
    </form>
    <form>
       <p>2. Not being able to stop or control worrying</p>
        <input type="radio" class ="check" name="choose" value=0>Not at all 
        <input type="radio" class ="check" name="choose" value=1>Several days 
        <input type="radio" class ="check" name="choose" value=2>More than half the days
        <input type="radio" class ="check" name="choose" value=3>Nearly every day
        <br>
      </form>
      <form>
         <p>3. Worrying too much about different things</p>
        <input type="radio" class ="check" name="choose" value=0>Not at all 
        <input type="radio" class ="check" name="choose" value=1>Several days 
        <input type="radio" class ="check" name="choose" value=2>More than half the days
        <input type="radio" class ="check" name="choose" value=3>Nearly every day
        <br>
      </form>
      <form>
         <p>4. Trouble relaxing</p>
        <input type="radio" class ="check" name="choose" value=0>Not at all 
        <input type="radio" class ="check" name="choose" value=1>Several days 
        <input type="radio" class ="check" name="choose" value=2>More than half the days
        <input type="radio" class ="check" name="choose" value=3>Nearly every day
        <br>
      </form>

      <form>

         <p>5. Being so restless that it is hard to sit still</p>
        <input type="radio" class ="check" name="choose" value=0>Not at all 
        <input type="radio" class ="check" name="choose" value=1>Several days 
        <input type="radio" class ="check" name="choose" value=2>More than half the days
        <input type="radio" class ="check" name="choose" value=3>Nearly every day
        <br>

      </form>
      <form>
         <p>6. Becoming easily annoyed or irritable</p>
        <input type="radio" class ="check" name="choose" value=0>Not at all 
        <input type="radio" class ="check" name="choose" value=1>Several days 
        <input type="radio" class ="check" name="choose" value=2>More than half the days
        <input type="radio" class ="check" name="choose" value=3>Nearly every day
        <br>
      </form>
      <form>

         <p>7. Feeling afraid, as if something awful might happen</p>
        <input type="radio" class ="check" name="choose" value=0>Not at all 
        <input type="radio" class ="check" name="choose" value=1>Several days 
        <input type="radio" class ="check" name="choose" value=2>More than half the days
        <input type="radio" class ="check" name="choose" value=3>Nearly every day
        <br>
      </form>
  	<br>

    <input type ="button" name="resultButton" id = "totalSum" onclick = "handleClick();" value = "Get Result" >
    <br>
    <br>

	<a href="#">LOGOUT</a>


</body>
</html>