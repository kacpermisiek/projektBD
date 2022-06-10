<?php
include "open_db.php";
$conn = OpenCon();

$id_ladunku = $_GET['id_ladunku'];

$sql_statement = "select * from ladunek where id_ladunku=$id_ladunku";

$result = $conn->query($sql_statement);

$obj = $result->fetch_array();

echo "<h2>Edycja ładunku " . $obj['zawartosc_ladunku'] . "</h2>";
?>
<form method='post' action='ladunek_action.php'>
<input name='id_ladunku' type=hidden value='<?=htmlentities($obj['id_ladunku'])?>'>

<h3> Id klienta </h3>
<input name='klient_id' type=Number value='<?=htmlentities($obj['klient_id'])?>' required>

<h3> Zawartość ładunku </h3>
<input name='zawartosc_ladunku' value='<?=htmlentities($obj['zawartosc_ladunku'])?>'>

<h3> Waga (tony)</h3>
<input name='waga' type=Number value='<?=htmlentities($obj['waga'])?>' required>

</br>
</br>
</br>
</br>
<input type=submit name=zapisz value='Zapisz'>
<input type=submit name=usun value='Usun' onclick="return confirm('Czy na pewno chcesz usunąć ładunek?')">
<input type=submit name=anuluj value='Anuluj'>

</form>






<?php
CloseCon($conn);
?>

