<style><?php include'style.css'; ?></style>
<?php
include 'open_db.php';

$conn = OpenCon();

$result = $conn->query("SELECT kurs.*, kierowca.imie, kierowca.nazwisko FROM kurs LEFT JOIN kierowca ON kurs.kierowca_id=kierowca.id_kierowcy");


echo "<h1> Tabela kursow </h1>
<h3> Aby edytować/usunąć dany kurs, kliknij na id_kursu</h3>
<table style='border=4px solid black'>
    <tr>
    <th>id_kursu</th>
    <th>kierowca</th>
    <th>ladunek_id</th>
    <th>data_kursu</th>
    <th>cena</th>
    <th>miasto_poczatkowe</th>
    <th>adres_poczatkowy</th>
    <th>miasto_docelowe</th>
    <th>adres_docelowy</th>
    </tr>
    ";

while($row = $result->fetch_row())
    echo "
    <tr>
        <td onclick=\"location='?id=kurs_edytuj&id_kursu=$row[0]'\"'>$row[0]</td>
        <td>$row[10] $row[9]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td>$row[4]</td>
        <td>$row[5]</td>
        <td>$row[6]</td>
        <td>$row[7]</td>
        <td>$row[8]</td>

    </tr>
    ";

echo "</table>
<button onclick=\"location='?id=kurs_dodaj'\">Dodaj nowy kurs</button>
";

$result->close();

CloseCon($conn);
?>