<?php
include "open_db.php";
$conn = OpenCon();

$id_kierowcy = $_GET['id_kierowcy'];

$sql_statement = "select * from kierowca where id_kierowcy=$id_kierowcy";

$result = $conn->query($sql_statement);

$obj = $result->fetch_array();

echo "<h2>Edycja kierowcy " . $obj['imie'] . " " . $obj['nazwisko'] . "</h2>";
?>
<form method='post' action='kierowca_action.php'>
<input name='id_kierowcy' type=hidden value='<?=htmlentities($obj['id_kierowcy'])?>'>

<h3> Nr identyfikacyjny </h3>
<input name='nr_identyfikacyjny' value='<?=htmlentities($obj['nr_identyfikacyjny'])?>' required>

<h3> Id samochodu </h3>
<input name='samochod_id' type=Number value='<?=htmlentities($obj['samochod_id'])?>'>

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

