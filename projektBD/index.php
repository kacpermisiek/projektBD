<html>
<head>
<title>Spedycja</title>
<style type="text/css">
<?php include'style.css'; ?>
</style>
</head>
<body>


<?php

echo "<button onclick=\"location='?id=klient_tabela'\">Pokaż klientów</button>";
echo "<button onclick=\"location='?id=kurs_tabela'\">Pokaż kursy</button>";
echo "<button onclick=\"location='?id=ladunek_tabela'\">Pokaż ładunki</button>";
echo "<button onclick=\"location='?id=kierowca_tabela'\">Pokaż kierowców</button>";
echo "<button onclick=\"location='?id=samochod_tabela'\">Pokaż samochody</button>";


if($_GET) {
    if($_GET['id']=='kurs_dodaj')
		  include "kurs_dodaj.php";

    else if($_GET['id']=='kurs_tabela')
      include "kurs_tabela.php";

    else if($_GET['id']=='kurs_edytuj')
      include "kurs_edytuj.php";
    
    else if($_GET['id']=='klient_tabela')
    include "klient_tabela.php";
  
    else if($_GET['id']=='klient_dodaj')
      include "klient_dodaj.php";

    else if($_GET['id']=='klient_edytuj')
      include "klient_edytuj.php";

    else if($_GET['id']=='ladunek_tabela')
    include "ladunek_tabela.php";
  
    else if($_GET['id']=='ladunek_dodaj')
      include "ladunek_dodaj.php";

    else if($_GET['id']=='ladunek_edytuj')
      include "ladunek_edytuj.php";

    else if($_GET['id']=='kierowca_tabela')
      include "kierowca_tabela.php";
  
    else if($_GET['id']=='kierowca_dodaj')
      include "kierowca_dodaj.php";

    else if($_GET['id']=='kierowca_edytuj')
      include "kierowca_edytuj.php";

    else if($_GET['id']=='samochod_tabela')
      include "samochod_tabela.php";
  
    else if($_GET['id']=='samochod_dodaj')
      include "samochod_dodaj.php";

    else if($_GET['id']=='samochod_edytuj')
      include "samochod_edytuj.php";


    else 
	    include "kurs_tabela.php";
}
else
    include "kurs_tabela.php";
?>
</body>
</html>