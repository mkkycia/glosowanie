<html>
<head>
<audio src="https://vgmsite.com/soundtracks/minecraft/esiyjzozpe/Volume%20Alpha%2008.%20Minecraft.mp3" autoplay></audio>
<link href="https://www.ukodowani.pl/favicon.ico" rel="icon" type="image/x-icon">

<title> Rejestracja </title>
</head>
<link rel="stylesheet" type="text/css" href="style2.css">
<body>
 <form action="verify.php" method="post">
<h2 style="font-family: Arial">REJESTRACJA</h2>
 <?php if (isset($_GET['error'])) { ?>
  <p class="error"><?php echo $_GET['error']; ?></p>
 <?php } ?>
<label style="font-family: Arial">Nazwa Uzytkownika</label>
<input type="text" name="uname" placeholder="User Name"label style="font-family: Arial"><br>
<label style="font-family: Arial">Haslo</label>
<input type="password" name="password" placeholder="Password"label style="font-family: Arial"><br>
<button type="submit"label style="font-family: Arial">REGISTER</button>
<a href="index.php" style="font-family: Arial">powrot to logowania</a>
</form>

</body>
</html>
