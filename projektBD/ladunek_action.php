<?php
include_once 'open_db.php';

$conn = OpenCon();

if(isset($_POST['dodaj']))
{    
     $id_ladunku = $_POST['id_ladunku'];
     $klient_id = $_POST['klient_id'];
     $zawartosc_ladunku = $_POST['zawartosc_ladunku'];
     $waga = $_POST['waga'];

    $sql_statement = "INSERT INTO ladunek (klient_id, zawartosc_ladunku, waga) 
    VALUES ('$klient_id', '$zawartosc_ladunku', '$zawartosc_ladunku')";

    $result = $conn->query($sql_statement);
}

else if(isset($_POST['zapisz'])){
    $id_ladunku = $_POST['id_ladunku'];
    $klient_id = $_POST['klient_id'];
    $zawartosc_ladunku = $_POST['zawartosc_ladunku'];
    $waga = $_POST['waga'];

    $sql_statement = "UPDATE ladunek 
        set klient_id='$klient_id', 
        zawartosc_ladunku='$zawartosc_ladunku',  
        waga='$waga'
    where id_ladunku='$id_ladunku'";

    $result = $conn->query($sql_statement);
}

else if(isset($_POST['usun'])){
    $id_ladunku = $_POST['id_ladunku'];
    $sql_statement = "DELETE FROM ladunek where id_ladunku='$id_ladunku'";

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