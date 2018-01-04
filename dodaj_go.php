    <?php 
    If (isset($_POST['marka'])){
            require ('connect.php'); // wstawiamy dane configuracyjne do polaczenia z baza 
     
    	// tworzymy krotkie nazwy zmiennych otrzymanych z formularza
    	$marka=$_POST['marka'];
    	$model=$_POST['model'];
    	$kolor=$_POST['kolor'];
    	$pojemnosc=$_POST['pojemnosc'];
    	$paliwo=$_POST['paliwo'];
     
    	// przekazujemy wartosci zmiennych do odpowiednich pol w bazie danych
    	// WSTAW DO tabeli test (kolumny w bazie) WARTOSCI (wartosci zmiennych)
    	$zapytanie = "INSERT INTO test (marka, model, kolor, pojemnosc, paliwo) VALUES ('$marka','$model','$kolor','$pojemnosc','$paliwo')" or die(mysql_error());
    	// wykonaj zapytanie
    	$wynik = mysql_query($zapytanie);
    	// komunikat potwierdzający poprawne zapisanie danych w bazie
    	if ($wynik) {
    		echo 'Prawidłowo dodano do bazy danych';	
    	}
     
    	mysql_close($db);	
    }	
    ?>
     
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
    <html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Untitled Document</title>
    </head>
     
    <body>
    <h3>DODAJ NOWY SAMOCHÓD DO BAZY</h3>
     
    <!-- FORMULARZ HTML WPROWADZANIA DANYCH -->
    <form name="form1" method="post" action="samochody-dodaj.php">
      marka: <input name="marka" type="text" size="20">
      model: <input type="text" name="model" size="20">
      kolor: <input type="text" name="kolor" size="20">
      pojemność: <input type="text" name="pojemnosc" size="20">
      paliwo: <input type="text" name="paliwo" size="20">
      <input value="dodaj samochód" type="submit">
    </form>
    <!-- KONIEC FORMULARZA -->
     
    </br>
    <a href="samochody.php">ť lista samochodów</a>
    </body>
    </html>