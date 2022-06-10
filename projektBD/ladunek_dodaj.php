<h2>Dodawanie ladunku</h2>
<div style='margin=auto'>
<form method='post' action='ladunek_action.php'>
	<input name='id_ladunku' type=hidden></br>

	<h3>Id klienta</h3>
	<input name='klient_id' type="Number" placeholder='Klient Id'></br>
	
	<h3>Zawartość ładunku</h3>
	<input name='zawartosc_ladunku' placeholder='Zawartość ładunku'></br>

	<h3>Waga (tony)</h3>
	<input name='waga' type="Number" placeholder='Waga'></br>

</br></br>

	<input type=submit name=dodaj value=Dodaj>
	
</form>
</div>