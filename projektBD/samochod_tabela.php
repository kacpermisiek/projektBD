<style><?php include'style.css'; ?></style>
<?php
include 'open_db.php';

$conn = OpenCon();

$result = $conn->query("SELECT * FROM samochod");


echo "<h1> Tabela samochodów </h1>
<h3> Aby edytować/usunąć dany samochód, kliknij na id_samochodu</h3>
<table style='border=4px solid black'>
    <tr>
    <th>id_samochodu</th>
    <th>nazwa</th>
    <th>rejestracja</th>
    <th>przebieg</th>
    </tr>
    ";

while($row = $result->fetch_row())
    echo "
    <tr>
        <td onclick=\"location='?id=samochod_edytuj&id_samochodu=$row[0]'\"'>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
    </tr>
    ";

echo "</table>
<button onclick=\"location='?id=samochod_dodaj'\">Dodaj nowy samochód</button>
";

$result->close();

CloseCon($conn);
?>