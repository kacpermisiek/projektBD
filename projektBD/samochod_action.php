<?php
include_once 'open_db.php';

$conn = OpenCon();

if(isset($_POST['dodaj']))
{    
     $id_samochodu = $_POST['id_samochodu'];
     $nazwa = $_POST['nazwa'];
     $rejestracja = $_POST['rejestracja'];
     $przebieg = $_POST['przebieg'];

    $sql_statement = "INSERT INTO samochod (nazwa, rejestracja, przebieg) 
    VALUES ('$nazwa', '$rejestracja', '$przebieg')";

    $result = $conn->query($sql_statement);
}

else if(isset($_POST['zapisz'])){
    $id_samochodu = $_POST['id_samochodu'];
    $nazwa = $_POST['nazwa'];
    $rejestracja = $_POST['rejestracja'];
    $przebieg = $_POST['przebieg'];

    $sql_statement = "UPDATE samochod 
        set nazwa='$nazwa', 
        rejestracja='$rejestracja',  
        przebieg='$przebieg'
    where id_samochodu='$id_samochodu'";

    $result = $conn->query($sql_statement);
}

else if(isset($_POST['usun'])){
    $id_samochodu = $_POST['id_samochodu'];
    $sql_statement = "DELETE FROM samochod where id_samochodu='$id_samochodu'";

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