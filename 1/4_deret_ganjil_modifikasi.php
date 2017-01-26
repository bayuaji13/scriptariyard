<form action="" method="post">
	N : <input type="text" name="input"> <input type="submit" name="submit" value="run">
</form>
<?php 
	if ($_POST != null){
		$input = $_POST['input'];
		$baris_ganjil = get_n_ganjil($input);
		echo "<pre>";
		foreach ($baris_ganjil as $row) {
			if (($row % 3 == 0) and (strpos($row,'3') !== false)){
				echo "KODING";
			}elseif (($row % 3 == 0) or (strpos($row,'3') !== false)) {
				echo "BELAJAR";
			}else{
				echo $row;
			}
			echo "\n";
		}
		echo "</pre>";
	}

	function get_n_ganjil($value)
	{
		$hasil = array();
		$i = 1;
		while (count($hasil) < $value) {
			if ($i % 2 == 1){
				$hasil[] = $i;
			}
			$i++;
		}
		return $hasil;
	}
 ?>