<?php
include "open_db.php";
$conn = OpenCon();

$id_kursu = $_GET['id_kursu'];

$sql_statement = "select * from kurs where id_kursu=$id_kursu";

$result = $conn->query($sql_statement);

$obj = $result->fetch_array();

echo "<h2>Edycja kursu " . $obj['miasto_poczatkowe'] . " -> " . $obj['miasto_docelowe'] . "</h2>";
?>
<form method='post' action='kurs_action.php'>
<input name='id_kursu' type=hidden value='<?=htmlentities($obj['id_kursu'])?>'>

<h3> Id kierowcy </h3>
<input name='kierowca_id' value='<?=htmlentities($obj['kierowca_id'])?>' required>

<h3> Id Ładunku </h3>
<input name='ladunek_id' value='<?=htmlentities($obj['ladunek_id'])?>' required>

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

