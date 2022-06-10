<?php
include_once 'open_db.php';

$conn = OpenCon();

if(isset($_POST['dodaj']))
{    
     $id_kierowcy = $_POST['id_kierowcy'];
     $nr_identyfikacyjny = $_POST['nr_identyfikacyjny'];
     $samochod_id = $_POST['samochod_id'];
     $imie = $_POST['imie'];
     $nazwisko = $_POST['nazwisko'];
     $telefon = $_POST['telefon'];


    $sql_statement = "INSERT INTO kierowca (nr_identyfikacyjny, samochod_id, imie, nazwisko, telefon) 
    VALUES ('$nr_identyfikacyjny', '$samochod_id', '$imie', '$nazwisko',  '$telefon')";

    $result = $conn->query($sql_statement);
}

else if(isset($_POST['zapisz'])){
    $id_kierowcy = $_POST['id_kierowcy'];
    $nr_identyfikacyjny = $_POST['nr_identyfikacyjny'];
    $samochod_id = $_POST['samochod_id'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $telefon = $_POST['telefon'];

    $sql_statement = "UPDATE kierowca 
        set nr_identyfikacyjny='$nr_identyfikacyjny', 
        samochod_id='$samochod_id', 
        imie='$imie', 
        nazwisko='$nazwisko', 
        telefon='$telefon'
    where id_kierowcy='$id_kierowcy'";

    $result = $conn->query($sql_statement);
}

else if(isset($_POST['usun'])){
    $id_kierowcy = $_POST['id_kierowcy'];
    $sql_statement = "DELETE FROM kierowca where id_kierowcy='$id_kierowcy'";

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