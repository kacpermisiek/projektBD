<?php
include "open_db.php";
$conn = OpenCon();
$sql_statement = "SELECT id_kierowcy, imie, nazwisko from kierowca";
$sql_statement2 = "SELECT id_ladunku, zawartosc_ladunku from ladunek WHERE id_ladunku NOT IN (select ladunek_id from kurs)";

$result = $conn->query($sql_statement);
$result2 = $conn->query($sql_statement2);

CloseCon($conn);
?>

<h2>Dodawanie kursu</h2>
<div style='margin=auto'>
<form id=add_kurs method='post' action='kurs_action.php'>
	<input name='id_kursu' type=hidden></br>

	<h3>Kierowca</h3>
	<select form=add_kurs name='kierowca_id' required>

		<?php while($row = $result->fetch_array()):;?>

			<option value="<?php echo $row[0];?>"><?php echo $row[1] . " " . $row[2];?></option>

		<?php endwhile;?>

	</select>

	<h3>Ładunek</h3>
	<select form=add_kurs name='ladunek_id' required>

		<?php while($row = $result2->fetch_array()):;?>

			<option value="<?php echo $row[0];?>"><?php echo $row[0] . " - " . $row[1];?></option>

		<?php endwhile;?>

	</select>


	<h3>Data kursu</h3>
	<input name='data_kursu' type="date" placeholder='Data kursu' required></br>
	
	<h3>Cena</h3>
	<input name='cena' type="number" placeholder='Cena'></br>

	<h3>Miasto początkowe</h3>
	<input name='miasto_poczatkowe' placeholder='Miasto początkowe' required></br>

	<h3>Adres początkowy</h3>
	<input name='adres_poczatkowy' placeholder='Adres początkowy' required></br>

	<h3>Miasto docelowe</h3>
	<input name='miasto_docelowe' placeholder='Miasto docelowe' required></br>

	<h3>Adres docelowy</h3>
	<input name='adres_docelowy' placeholder='Adres docelowy' required></br>
	</br></br>

	<input type=submit name=dodaj value="Dodaj">

	
</form>

<button id="myBtn">Anuluj</button>
</div> 

<script>

	var btn = document.getElementById('myBtn');
	btn.addEventListener('click', function() {
	document.location.href = 'http://localhost/projektBD/?id=kurs_tabela';
	});

</script>