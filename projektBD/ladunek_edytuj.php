<?php
include "open_db.php";
$conn = OpenCon();

$id_ladunku = $_GET['id_ladunku'];

$sql_statement1 = "SELECT * from ladunek where id_ladunku=$id_ladunku";
$sql_statement2 = "SELECT id_klienta, nazwa from klient";
$sql_statement3 = "SELECT id_klienta, nazwa from klient JOIN ladunek ON id_klienta=klient_id WHERE id_ladunku=$id_ladunku";

$result1 = $conn->query($sql_statement1);
$result2 = $conn->query($sql_statement2);
$result3 = $conn->query($sql_statement3);

$obj = $result1->fetch_array();
$obj3 = $result3->fetch_array();

echo "<h2>Edycja ładunku " . $obj['zawartosc_ladunku'] . "</h2>";
?>
<form id="edit_ladunek" method='post' action='ladunek_action.php'>
<input name='id_ladunku' type=hidden value='<?=htmlentities($obj['id_ladunku'])?>'>

<h3>Nazwa klienta</h3>
    
    <select form=edit_ladunek name='klient_id' required>

    <?php if(!empty($obj3)):;?>
        <option value="<?php echo $obj3['id_klienta'];?>"><?php echo $obj3['nazwa'];?></option>
    <?php endif;?>
    

		<?php while($row = $result2->fetch_array()):;?>

			<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>

		<?php endwhile;?>

	</select>

<h3> Zawartość ładunku </h3>
<input name='zawartosc_ladunku' value='<?=htmlentities($obj['zawartosc_ladunku'])?>'>

<h3> Waga (tony)</h3>
<input name='waga' type=Number value='<?=htmlentities($obj['waga'])?>'>

</br>
</br>
</br>
</br>
<input type=submit name=zapisz value='Zapisz'>
<input type=submit name=usun value='Usun' onclick="return confirm('Czy na pewno chcesz usunąć ładunek?')">

</form>

<button id="myBtn">Anuluj</button>

<script>

	var btn = document.getElementById('myBtn');
	btn.addEventListener('click', function() {
	document.location.href = 'http://localhost/projektBD/?id=ladunek_tabela';
	});

</script>




<?php
CloseCon($conn);
?>

