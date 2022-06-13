<?php
include "open_db.php";
$conn = OpenCon();

$id_kursu = $_GET['id_kursu'];

$sql_statement = "select * from kurs where id_kursu=$id_kursu";
$sql_statement2 = "SELECT * from kierowca";
$sql_statement3 = "SELECT * from ladunek JOIN kurs ON id_ladunku=ladunek_id WHERE id_kursu=$id_kursu";
$sql_statement4 = "SELECT * FROM ladunek  WHERE id_ladunku NOT IN (SELECT ladunek_id from kurs)";

$result = $conn->query($sql_statement);
$result2 = $conn->query($sql_statement2);
$result3 = $conn->query($sql_statement3);
$result4 = $conn->query($sql_statement4);


$obj = $result->fetch_array();

echo "<h2>Edycja kursu " . $obj['miasto_poczatkowe'] . " -> " . $obj['miasto_docelowe'] . "</h2>";
?>
<form id="edit_kurs" method='post' action='kurs_action.php'>
<input name='id_kursu' type=hidden value='<?=htmlentities($obj['id_kursu'])?>'>

<h3>Kierowca</h3>
	<select form=edit_kurs name='kierowca_id' required>

		<?php while($row = $result2->fetch_array()):;?>

			<option value="<?php echo $row[0];?>"><?php echo $row[3] . " " . $row[4];?></option>

		<?php endwhile;?>
        

	</select>

<h3>Ładunek</h3>
<select form=edit_kurs name='ladunek_id' required>

    <?php while($row = $result3->fetch_array()):;?>

        <option value="<?php echo $row[0];?>"><?php echo $row[0] . " - " . $row[2];?></option>

    <?php endwhile;?>

    <?php while($row = $result4->fetch_array()):;?>

        <option value="<?php echo $row[0];?>"><?php echo $row[0] . " - " . $row[2];?></option>

    <?php endwhile;?>

</select>

<h3> Data kursu </h3>
<input name='data_kursu' type=date value='<?=htmlentities($obj['data_kursu'])?>' required>

<h3> Cena </h3>
<input name='cena' value='<?=htmlentities($obj['cena'])?>' required>

<h3> Miasto poczatkowe </h3>
<input name='miasto_poczatkowe' value='<?=htmlentities($obj['miasto_poczatkowe'])?>'>

<h3> Adres poczatkowy </h3>
<input name='adres_poczatkowy' value='<?=htmlentities($obj['adres_poczatkowy'])?>'>

<h3> Miasto docelowe </h3>
<input name='miasto_docelowe' value='<?=htmlentities($obj['miasto_docelowe'])?>'>

<h3> Adres docelowy </h3>
<input name='adres_docelowy' value='<?=htmlentities($obj['adres_docelowy'])?>'>

</br>
</br>
</br>
</br>
<input type=submit name=zapisz value='Zapisz'>
<input type=submit name=usun value='Usun' onclick="return confirm('Czy na pewno chcesz usunąć kurs?')">
<input type=submit name=anuluj value='Anuluj'>

</form>






<?php
CloseCon($conn);
?>

