<?php
include "open_db.php";
$conn = OpenCon();

$id_klienta = $_GET['id_klienta'];

$sql_statement = "select * from klient where id_klienta=$id_klienta";

$result = $conn->query($sql_statement);

$obj = $result->fetch_array();

echo "<h2>Edycja klienta " . $obj['nazwa'] . "</h2>";
?>
<form method='post' action='klient_action.php'>
<input name='id_klienta' type=hidden value='<?=htmlentities($obj['id_klienta'])?>'>

<h3> Nazwa klienta </h3>
<input name='nazwa' value='<?=htmlentities($obj['nazwa'])?>' required>

<h3> Miasto </h3>
<input name='miasto' value='<?=htmlentities($obj['miasto'])?>' required>

<h3> Adres </h3>
<input name='adres' value='<?=htmlentities($obj['adres'])?>' required>

<h3> Telefon </h3>
<input name='telefon' value='<?=htmlentities($obj['telefon'])?>'>

</br>
</br>
</br>
</br>
<input type=submit name=zapisz value='Zapisz'>
<input type=submit name=usun value='Usun' onclick="return confirm('Czy na pewno chcesz usunąć klienta?')">

</form>

<button id="myBtn">Anuluj</button>
</div> 

<script>

	var btn = document.getElementById('myBtn');
	btn.addEventListener('click', function() {
	document.location.href = 'http://localhost/projektBD/?id=klient_tabela';
	});

</script>






<?php
CloseCon($conn);
?>

