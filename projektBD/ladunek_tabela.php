<style><?php include'style.css'; ?></style>
<?php
include 'open_db.php';

$conn = OpenCon();

$result = $conn->query("SELECT ladunek.*, klient.nazwa FROM ladunek LEFT JOIN klient ON klient_id=id_klienta");


echo "<h1> Tabela ładunków </h1>
<h3> Aby edytować/usunąć dany ładunek, kliknij na id_ladunku</h3>
<table style='border=4px solid black'>
    <tr>
    <th>id_ladunku</th>
    <th>Nazwa klienta</th>
    <th>zawartosc_ladunku</th>
    <th>waga (tony)</th>
    </tr>
    ";

while($row = $result->fetch_row())
    echo "
    <tr>
        <td onclick=\"location='?id=ladunek_edytuj&id_ladunku=$row[0]'\"'>$row[0]</td>
        <td>$row[4]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
    </tr>
    ";

echo "</table>
<button onclick=\"location='?id=ladunek_dodaj'\">Dodaj nowy ladunek</button>
";

$result->close();

CloseCon($conn);
?>