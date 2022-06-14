<h2>Dodawanie samochodu</h2>
<div style='margin=auto'>
<form method='post' action='samochod_action.php'>
	<input name='id_samochodu' type=hidden></br>

	<h3>Nazwa</h3>
	<input name='nazwa' placeholder='Nazwa'></br>

	<h3>Rejestracja</h3>
	<input name='rejestracja' placeholder='Rejestracja'></br>

	<h3>Przebieg</h3>
	<input name='przebieg' type="Number" placeholder='Przebieg'></br>

</br></br>

	<input type=submit name=dodaj value=Dodaj>
	
</form>
<button id="myBtn">Anuluj</button>
</div> 

<script>

	var btn = document.getElementById('myBtn');
	btn.addEventListener('click', function() {
	document.location.href = 'http://localhost/projektBD/?id=samochod_tabela';
	});

</script>