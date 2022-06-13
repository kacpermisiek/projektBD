<?php
include_once 'open_db.php';

$conn = OpenCon();

if(isset($_POST['dodaj']))
{    

    $id_kursu = $_POST['id_kursu'];
    $kierowca_id = intval($_POST['kierowca_id']);
    $ladunek_id = intval($_POST['ladunek_id']);
    $data_kursu = $_POST['data_kursu'];
    $cena = $_POST['cena'];
    $miasto_poczatkowe = $_POST['miasto_poczatkowe'];
    $adres_poczatkowy = $_POST['adres_poczatkowy'];
    $miasto_docelowe = $_POST['miasto_docelowe'];
    $adres_docelowy = $_POST['adres_docelowy'];

    $sql_statement = "INSERT INTO kurs (kierowca_id, ladunek_id,
     data_kursu, cena, miasto_poczatkowe, adres_poczatkowy,
     miasto_docelowe, adres_docelowy) 
     VALUES ('$kierowca_id', '$ladunek_id', '$data_kursu', '$cena',
     '$miasto_poczatkowe', '$adres_poczatkowy', '$miasto_docelowe', '$adres_docelowy')";

    $result = $conn->query($sql_statement);
}

else if(isset($_POST['zapisz'])){
    $id_kursu = $_POST['id_kursu'];
    $kierowca_id = $_POST['kierowca_id'];
    $ladunek_id = $_POST['ladunek_id'];
    $data_kursu = $_POST['data_kursu'];
    $cena = $_POST['cena'];
    $miasto_poczatkowe = $_POST['miasto_poczatkowe'];
    $adres_poczatkowy = $_POST['adres_poczatkowy'];
    $miasto_docelowe = $_POST['miasto_docelowe'];
    $adres_docelowy = $_POST['adres_docelowy'];

    $sql_statement = "UPDATE kurs 
        SET kierowca_id='$kierowca_id', 
            ladunek_id='$ladunek_id', 
            ladunek_id='$ladunek_id', 
            data_kursu='$data_kursu', 
            cena='$cena', 
            miasto_poczatkowe='$miasto_poczatkowe', 
            adres_poczatkowy='$adres_poczatkowy', 
            miasto_docelowe='$miasto_docelowe', 
            adres_docelowy='$adres_docelowy'
        WHERE id_kursu='$id_kursu'";

    $result = $conn->query($sql_statement);
}

else if(isset($_POST['usun'])){
    $id_kursu = $_POST['id_kursu'];
    $sql_statement = "DELETE FROM kurs where id_kursu='$id_kursu'";

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