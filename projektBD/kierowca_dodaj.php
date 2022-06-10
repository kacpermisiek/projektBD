<h2>Dodawanie kierowcy</h2>
<div style='margin=auto'>
<form method='post' action='kierowca_action.php'>
	<input name='id_kierowcy' type=hidden></br>

	<h3>Nr identyfikacyjny</h3>
	<input name='nr_identyfikacyjny' placeholder='Nr identyfikacyjny'></br>

	<h3>Id samochodu</h3>
	<input name='samochod_id' type="Number" placeholder='Id samochodu'></br>
	
	<h3>Imię</h3>
	<input name='imie' placeholder='Imię'></br>

	<h3>Nazwisko</h3>
	<input name='nazwisko' placeholder='Nazwisko'></br>

</br></br>

	<input type=submit name=dodaj value=Dodaj>
	<input type=submit name=anuluj value=Anuluj>
	
</form>
</div>