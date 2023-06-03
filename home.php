<HTML>
    <HEAD>
<link href="https://www.ukodowani.pl/favicon.ico" rel="icon" type="image/x-icon">
<audio src="https://vgmsite.com/soundtracks/minecraft/npdaqyidiz/Volume%20Beta%2004.%20Blind%20Spots.mp3" autoplay></audio>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>	

	<script>
  $( function() {
	var availableNames = [
		"Alexandrowicz Monika",
        "Antonkiewicz Nina",
        "Bartoszek Krzysztof",
        "Bechler Paweł",
        "Białoszewska Renata",
        "Białoszewski Paweł",
        "Bogdanowicz Joanna",
        "Brzostek Aldona",
        "Buratyński Wiktor",
        "Chludzińska Beata",
        "Chrząstowski – Wachtel Piotr",
        "Cieślak Piotr",
        "Czekaj Milena",
        "Danielak Beata",
        "Domaradzki Kamil",
        "Drabot Katarzyna",
        "Drąg Gabriel",
        "Dzwonowska Urszula",
        "Farbiś Karol",
        "Gawrzak Małgorzata",
        "Gładczuk Jolanta",
        "Gładczuk Leszek",
        "Golańska Marta",
        "Górecka Edyta",
        "Heropolitańska - Janik Joanna",
        "Jacher-Cebula Anna",
        "Jędral Jarosław",
        "Jędrasik Maciej",
        "Jungrav Wiera",
        "Juszczak Ewa",
        "Kaczyński Arkadiusz",
        "Kajkowska Joanna",
        "Kamiński Łukasz",
        "Kardaś Michał",
        "Karpiński Szymon",
        "Kierzkowski Karol",
        "Kimizuka Wiesława",
        "Kołakowska-Przybyłek Zuzanna",
        "Konarski Jerzy",
        "Korzan Kamil",
        "Koza Joanna",
        "ks. Ośko Marcin",
        "Kułagowska Anna",
        "Kuś Agnieszka",
        "Lann vel Lace Małgorzata",
        "Lenkiewicz Martyna",
        "Lewkowicz Regina",
        "Lorek Krzysztof",
        "Marciniuk Katarzyna",
        "Markiewicz Natalia",
        "Markowska Agata",
        "Martys Wojciech",
        "Mazurek Monika",
        "Michalska Katarzyna",
        "Mikos Anna",
        "Moryc-Stańczyk Magdalena",
        "Myziak Michał",
        "Nosowska Dorota",
        "Nowak Andrzej",
        "Nowak Jakub",
        "Okulska-Chmielewska Ewa",
        "Pachulski Jan",
        "Pawlikowski Jakub",
        "Pawłowski Marek",
        "Pluta Małgorzata",
        "Pompe Waldemar",
        "Potocka Agnieszka",
        "Potocki Janusz",
        "Regiec Dominika",
        "Rong Joanna",
        "Rotkiewicz Mikołaj",
        "Rutkowska Anna",
        "Sadowska Monika",
        "Samulak Anna",
        "Sidz Leszek",
        "Socha Katarzyna",
        "Staniewicz Paweł",
        "Szydłowski Andrzej",
        "Szypuła Katarzyna",
        "Śmigielska Joanna",
        "Świtalska Agnieszka",
        "Tokarska -Serwa Agnieszka",
        "Tsangaras Maria",
        "Wanago-Wojtczak Beata",
        "Ważna Maria",
        "Winter Tomasz",
        "Wiśniewska Magdalena",
        "Wiśniewska Zofia",
        "Witecki Arkadiusz",
        "Wolsan Jadwiga",
        "Zarzycki Sławomir",
        "Zielicz Włodzimierz",
        "Zieliński Maciej",
        "Zieliński Przemysław",
        "Ziemiańska Olga",
        "Zimnoch Jolanta",
		"Zmysłowski Adam"
	];
	$( "#tags" ).autocomplete({
		source: availableNames		
	});
  } );
  </script>

    </HEAD>

<BODY>
<?php
	session_start();
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		header("Location: index.php");
		exit();
	}	
	echo "jestes zalogowany jako " . $_SESSION["username"];
?>

<form action="dajglos.php" method="post">
<h2 style="font-family: Arial">Zaglosuj na najlepszego nauczyciela!</h2>
<?php if (isset($_GET['error'])) { ?>
	<p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>
<input type="text" id="tags" name="nazwa" placeholder="Nazwa"><br>
<button type="submit">wyslij</button>
</form>


</BODY>
</HTML>
