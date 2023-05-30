<html>
<head>
<link href="https://www.ukodowani.pl/favicon.ico" rel="icon" type="image/x-icon">
<audio src="https://vgmsite.com/soundtracks/minecraft/mngbhcaiiu/Volume%20Alpha%2005.%20Living%20Mice.mp3" autoplay></audio>

<title>LOGOWANIE DO STR0NY</title>
<link rel="stylesheet" type="text/css" href="style.css">
<!--
<style>
      #element_z_tlem {
        border:3px solid #EEE;
        animation:ruch 300s linear infinite alternate;
        -webkit-animation:ruch 300s linear infinite alternate; /* dla Google Chrome, Safari, Opera 15+ */
        /*background-image:url('https://geeksfera.pl/generated-images/53502_43_48863_6_0.jpg');*/
      }

      #akapit {
        width:1200px;
        margin:384px auto;
        padding:10px;
        border:3px solid #EEE;
        background-color:rgba(255,255,255,0.7);
        font-size:24px;
      }

      /*------------------------ANIMACJA-RUCHOME-TŁO------------------------*/
      /*https://webkod.pl/kurs-css/lekcje/dzial-4/css3-ruchome-tlo-w-elemencie-html   <---- tutaj mam linka jakbym chciał dokończyć robić te ruchome coś w szkole podczas informatyki*/
      /* https://www.rapidtables.com/web/color/RGB_Color.html   <---- tu jest stronka która pozwala lepiej wybierać kolory tła (powinienem był zapisać to w style2.css ale tu niech będą wszystkie notatki GO*/
      @keyframes ruch
      {

        0% {background-position:0 0, 0 0, 0 0;}
        100% {background-position:10000px 0, 7500px 0, 5000px 0;}
      }

      /* dla Google Chrome, Safari, Opera 15+ */
      @-webkit-keyframes ruch
      {
        0% {background-position:0 0, 0 0, 0 0;}
        100% {background-position:10000px 0, 7500px 0, 5000px 0;}
      }
	</style>
-->
</head>
<body>
<!--
  <div id="element_z_tlem">
      <p id="akapit">
        to jeszcze nie jest tlo ale chce zeby bylo jakies w tym stylu
      <p>
	</div>
-->
  <form action="login.php" method="post">
<h2>LOGOWANIE</h2>
 <?php if (isset($_GET['error'])) { ?>
   <p class="error"><?php echo $_GET['error']; ?></p>
 <?php } ?>
 <?php if (isset($_GET['message'])) { ?>
   <p class="message"><?php echo $_GET['message']; ?></p>
 <?php } ?>
 
<label>Nazwa Uzytkownika</label>
<input type="text" name="uname" placeholder="User Name"><br>
<label>Haslo</label>
<input type="password" name="password" placeholder="Password"><br>
<button type="submit">Login</button>
<a href="rejestracja.php">Rejestracja</a>
</form>
</body>
</html>

