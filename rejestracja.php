<html>
<head>
<audio src="https://vgmsite.com/soundtracks/minecraft/esiyjzozpe/Volume%20Alpha%2008.%20Minecraft.mp3" autoplay></audio>
<link href="https://www.ukodowani.pl/favicon.ico" rel="icon" type="image/x-icon">

<link rel="shortcut icon" src="http://potencjalkobiet.pl/img/rada/lewkowicz.jpg">
<title> Rejestracja </title>
</head>
<link rel="stylesheet" type="text/css" href="style2.css">
<body>
 <form action="verify.php" method="post">
<h2>REJESTRACJA</h2>
 <?php if (isset($_GET['error'])) { ?>
  <p class="error"><?php echo $_GET['error']; ?></p>
 <?php } ?>
<label>Nazwa Uzytkownika</label>
<input type="text" name="uname" placeholder="User Name"><br>
<label>Haslo</label>
<input type="password" name="password" placeholder="Password"><br>
<button type="submit">REGISTER</button>
<a href="index.php">powrot to logowania</a>
</form>

</body>
</html>
