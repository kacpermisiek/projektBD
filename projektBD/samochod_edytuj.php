<?php
include "open_db.php";
$conn = OpenCon();

$id_samochodu = $_GET['id_samochodu'];

$sql_statement = "select * from samochod where id_samochodu=$id_samochodu";

$result = $conn->query($sql_statement);

$obj = $result->fetch_array();

echo "<h2>Edycja samochodu " . $obj['nazwa'] . "</h2>";
?>
<form method='post' action='samochod_action.php'>
<input name='id_samochodu' type=hidden value='<?=htmlentities($obj['id_samochodu'])?>'>

<h3> Nazwa samochodu </h3>
<input name='nazwa' value='<?=htmlentities($obj['nazwa'])?>' required>

<h3> Rejestracja </h3>
<input name='rejestracja' value='<?=htmlentities($obj['rejestracja'])?>' required>

<h3> Przebieg </h3>
<input name='przebieg' value='<?=htmlentities($obj['przebieg'])?>'>

</br></br></br></br>
<input type=submit name=zapisz value='Zapisz'>
<input type=submit name=usun value='Usun' onclick="return confirm('Czy na pewno chcesz usunąć samochod?')">
<input type=submit name=anuluj value='Anuluj'>

</form>

<?php
CloseCon($conn);
?>

