<?php
include "open_db.php";
$conn = OpenCon();
$sql_statement = "select * from klient";

$result = $conn->query($sql_statement);


CloseCon($conn);
?>

<h2>Dodawanie ladunku</h2>
<div style='margin=auto'>
<form id="add_ladunek" method='post' action='ladunek_action.php'>
	<input name='id_ladunku' type=hidden></br>

	<h3>Nazwa klienta</h3>
	<select form=add_ladunek name='klient_id' required>

		<?php while($row = $result->fetch_array()):;?>

			<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>

		<?php endwhile;?>

	</select>
	
	<h3>Zawartość ładunku</h3>
	<input name='zawartosc_ladunku' placeholder='Zawartość ładunku'></br>

	<h3>Waga (tony)</h3>
	<input name='waga' type="Number" placeholder='Waga'></br>

</br></br>

	<input type=submit name=dodaj value=Dodaj>

	<?php while($row = $result->fetch_array()):;?>

			<?php echo $row[0]; ?>

	<?php endwhile;?>
	
</form>
</div>