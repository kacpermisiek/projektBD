<style><?php include'style.css'; ?></style>
<?php
include 'open_db.php';

$conn = OpenCon();

$result = $conn->query("SELECT * FROM kierowca");


echo "<h1> Tabela kierowców </h1>
<h3> Aby edytować/usunąć danego kierowcę, kliknij na id_kierowcy</h3>
<table style='border=4px solid black'>
    <tr>
    <th>id_kierowcy</th>
    <th>nr_identyfikacyjny</th>
    <th>samochod_id</th>
    <th>imie</th>
    <th>nazwisko</th>
    <th>telefon</th>
    </tr>
    ";

while($row = $result->fetch_row())
    echo "
    <tr>
        <td onclick=\"location='?id=kierowca_edytuj&id_kierowcy=$row[0]'\"'>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td>$row[4]</td>
        <td>$row[5]</td>
    </tr>
    ";

echo "</table>
<button onclick=\"location='?id=kierowca_dodaj'\">Dodaj nowego kierowcę</button>
";

$result->close();

CloseCon($conn);
?>