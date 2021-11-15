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