<h2>Dodawanie kursu</h2>
<div style='margin=auto'>
<form method='post' action='kurs_action.php'>
	<input name='id_kursu' type=hidden></br>

	<h3>Id kierowcy</h3>
	<input name='kierowca_id' type="number" placeholder='kierowca_id'></br>

	<h3>Id ładunku</h3>
	<input name='ladunek_id' type="number" placeholder='ladunek_id'></br>


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

	<input type=submit name=dodaj value="Submit">
	<input type=submit name=anuluj value='Anuluj'>
	
</form>
</div>