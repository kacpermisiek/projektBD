<h2>Dodawanie klienta</h2>
<div style='margin=auto'>
<form method='post' action='klient_action.php' >
	<input name='id_klienta' type=hidden></br>

	<h3>Nazwa</h3>
	<input name='nazwa' placeholder='Nazwa' required></br>

	<h3>Miasto</h3>
	<input name='miasto' placeholder='Miasto' required></br>
	
	<h3>Adres</h3>
	<input name='adres' placeholder='Adres' required></br>

	<h3>Telefon</h3>
	<input name='telefon' placeholder='Telefon'></br>

</br></br>

	<input type=submit name=dodaj value="Submit">
	<input type=submit name=anuluj value='Anuluj'>
	
</form>
</div>