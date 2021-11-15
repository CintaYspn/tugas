<!DOCTYPE html>
<html>
<head>
	<title>tugas hitung bintang</title>
</head>
<body>

<form method="post" action=""> 
<table border="0" cellpadding="0">
		<tr>
			<td> Jumlah Bintang </td>
			<td> = </td>
			<td> <input type="text" name="bintang"></br> </td>
		</tr>

		<tr>
			<td> <input type="submit" name="submit" value="kirim"> </td>
		</tr>
	</table>

</form>

<?php 
if (isset($_POST['submit'])) {
	$bintang= $_POST['bintang'];
	for ($i=1; $i <= $bintang ; $i++) { 
		for ($c=1; $c <= $i ; $c++) { 
			echo "*";
		}
		echo "<br>";
	}
}
?>

</body>
</html>

