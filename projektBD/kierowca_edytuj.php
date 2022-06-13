<?php
include "open_db.php";
$conn = OpenCon();

$id_kierowcy = $_GET['id_kierowcy'];

$sql_statement = "SELECT * from kierowca WHERE id_kierowcy=$id_kierowcy";
$sql_statement2 = "SELECT * FROM samochod WHERE samochod.id_samochodu NOT IN (SELECT samochod_id FROM kierowca WHERE samochod_id IS NOT NULL)";
$sql_statement3 = "SELECT nazwa FROM kierowca JOIN samochod ON samochod_id=id_samochodu WHERE id_kierowcy=$id_kierowcy";
$sql_statement4 = "SELECT samochod_id, nazwa from kierowca JOIN samochod ON id_samochodu=samochod_id";

$result = $conn->query($sql_statement);
$result2 = $conn->query($sql_statement2);
$result3 = $conn->query($sql_statement3);
$result4 = $conn->query($sql_statement4);

$obj = $result->fetch_array();
$obj3 = $result3->fetch_array();
$obj4 = $result4->fetch_array();


echo "<h2>Edycja kierowcy " . $obj['imie'] . " " . $obj['nazwisko'] . "</h2>";
?>
<form id=edit_kierowca method='post' action='kierowca_action.php'>
<input name='id_kierowcy' type=hidden value='<?=htmlentities($obj['id_kierowcy'])?>'>

<h3> Nr identyfikacyjny </h3>
<input name='nr_identyfikacyjny' value='<?=htmlentities($obj['nr_identyfikacyjny'])?>' required>

<h3>Samochod</h3>
	<select form=edit_kierowca name='samochod_id'>

		<?php if(!empty($obj3[0])):;?>
        	<option value='<?=htmlentities($obj['samochod_id'])?>'><?=htmlentities($obj3[0])?></option>
		<?php endif;?>
		
        <?php while($row = $result2->fetch_array()):;?>

			<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>

		<?php endwhile;?>

		<option value=None>BRAK</option>

	</select>

<h3> Imię </h3>
<input name='imie' value='<?=htmlentities($obj['imie'])?>' required>

<h3> Nazwisko </h3>
<input name='nazwisko' value='<?=htmlentities($obj['nazwisko'])?>' required>

<h3> Telefon </h3>
<input name='telefon' value='<?=htmlentities($obj['telefon'])?>'>

</br>
</br>
</br>
</br>
<input type=submit name=zapisz value='Zapisz'>
<input type=submit name=usun value='Usun' onclick="return confirm('Czy na pewno chcesz usunąć kierowcę?')">
<input type=submit name=anuluj value='Anuluj'>

</form>






<?php
CloseCon($conn);
?>

