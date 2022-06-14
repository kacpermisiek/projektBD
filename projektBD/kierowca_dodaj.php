<?php
include "open_db.php";
$conn = OpenCon();
$sql_statement = "SELECT * FROM samochod WHERE samochod.id_samochodu NOT IN (SELECT samochod_id FROM kierowca)";

$result = $conn->query($sql_statement);

CloseCon($conn);
?>


<h2>Dodawanie kierowcy</h2>
<div style='margin=auto'>
<form id=add_kierowca method='post' action='kierowca_action.php'>
	<input name='id_kierowcy' type=hidden></br>

	<h3>Nr identyfikacyjny</h3>
	<input name='nr_identyfikacyjny' placeholder='Nr identyfikacyjny'></br>

	<h3>Samochod</h3>
	<select form=add_kierowca name='samochod_id' required>

		<?php while($row = $result->fetch_array()):;?>

			<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>

			<option value=None>BRAK</option>

		<?php endwhile;?>

	</select>
	
	<h3>Imię</h3>
	<input name='imie' placeholder='Imię'></br>

	<h3>Nazwisko</h3>
	<input name='nazwisko' placeholder='Nazwisko'></br>

	<h3>Telefon</h3>
	<input name='telefon' placeholder='Telefon'></br>

</br></br>

	<input type=submit name=dodaj value=Dodaj>


	
</form>
<button id="myBtn">Anuluj</button>
</div> 

<script>

	var btn = document.getElementById('myBtn');
	btn.addEventListener('click', function() {
	document.location.href = 'http://localhost/projektBD/?id=kierowca_tabela';
	});

</script>