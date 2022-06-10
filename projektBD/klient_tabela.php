<style><?php include'style.css'; ?></style>
<?php
include 'open_db.php';


$conn = OpenCon();

$result = $conn->query("SELECT * FROM klient");


echo "<h1> Tabela klientów </h1>
<h3> Aby edytować/usunąć danego klienta, kliknij na id_klienta</h3>
<table style='border=4px solid black'>
    <tr>
    <th>id_klienta</th>
    <th>nazwa</th>
    <th>miasto</th>
    <th>adres</th>
    <th>telefon</th>
    </tr>
    ";

while($row = $result->fetch_row())
    echo "
    <tr>
        <td onclick=\"location='?id=klient_edytuj&id_klienta=$row[0]'\"'>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td>$row[4]</td>
    </tr>
    ";

echo "</table>
<button onclick=\"location='?id=klient_dodaj'\">Dodaj nowego klienta</button>
";

$result->close();

CloseCon($conn);
?>