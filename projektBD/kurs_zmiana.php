<?php

if($_POST)
{
	$id_kursu = $_POST[id_kursu];
    $id_kursu = $_POST[id_kursu];
    $id_kursu = $_POST[id_kursu];
    $id_kursu = $_POST[id_kursu];
    $id_kursu = $_POST[id_kursu];
    $id_kursu = $_POST[id_kursu];
    $id_kursu = $_POST[id_kursu];
    $id_kursu = $_POST[id_kursu];
    $id_kursu = $_POST[id_kursu];
    
	switch($_POST['co'])
	{
		case 'Usun':   
			$baza->query("delete from kurs where id_kursu='$r[id_kursu]'");
			break;
		case 'Zapisz': 
			$baza->query("UPDATE kurs 
						SET kierowca_id='$r[kierowca_id]', 
						ladunek_id='$r[ladunek_id]', 
						data_kursu='$r[data_kursu]', 
						cena='$r[cena]'
                        miasto_poczatkowe='$r[miasto_poczatkowe]'
                        adres_poczatkowy='$r[adres_poczatkowy]'
                        miasto_docelowe='$r[miasto_docelowe]'
                        adres_docelowy='$r[adres_docelowy]'
						WHERE id_kursu='$r[id_kursu]'");
		break;
		case 'Dodaj': 
			$baza->query("INSERT INTO kurs (
            kierowca_id,
            ladunek_id,
            data_kursu, 
            cena,
            miasto_poczatkowe,
            adres_poczatkowy,
            miasto_docelowe,
            adres_docelowy)
                          values('$r[kierowca_id]',
                           '$r[ladunek_id]', 
                           '$r[data_kursu]', 
                           '$r[cena]', 
                           '$r[miasto_poczatkowe]', 
                           '$r[adres_poczatkowy], 
                           '$r[miasto_docelowe]', 
                           '$r[adres_docelowy]')
						 ");
			break;
									 
	}
//	echo $baza->lastErrorMsg();
}
	header("location:.");
