<?php
include_once 'open_db.php';

$conn = OpenCon();

if(isset($_POST['dodaj']))
{    
     $id_klienta = $_POST['id_klienta'];
     $nazwa = $_POST['nazwa'];
     $miasto = $_POST['miasto'];
     $adres = $_POST['adres'];
     $telefon = $_POST['telefon'];


    $sql_statement = "INSERT INTO klient (nazwa, miasto, adres, telefon) VALUES ('$nazwa', '$miasto', '$adres', '$telefon')";

    $result = $conn->query($sql_statement);
}

else if(isset($_POST['zapisz'])){
    $id_klienta = $_POST['id_klienta'];
    $nazwa = $_POST['nazwa'];
    $miasto = $_POST['miasto'];
    $adres = $_POST['adres'];
    $telefon = $_POST['telefon'];

    $sql_statement = "UPDATE klient 
        set nazwa='$nazwa', 
        miasto='$miasto', 
        adres='$adres', 
        telefon='$telefon'
    where id_klienta='$id_klienta'";

    $result = $conn->query($sql_statement);
}

else if(isset($_POST['usun'])){
    $id_klienta = $_POST['id_klienta'];
    $sql_statement = "DELETE FROM klient where id_klienta='$id_klienta'";

    $result = $conn->query($sql_statement);
}

else if(isset($_POST['anuluj'])){
}

else{
    echo "UPS!  Coś poszło nie tak z formularzem :/";
    sleep(5);
}

# echo "<button onclick=\"location='?id='\">Powrót do klientów</button>";

CloseCon($conn);
header("location:.");
?>