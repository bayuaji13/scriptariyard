<form action="" method="post">
	string : <input type="text" name="input"> 
	<label>
		<input type="radio" name="tipe" value="enkripsi"> Enkripsi
	</label>
	<label>
		<input type="radio" name="tipe" value="dekripsi"> Dekripsi
	</label>
	<input type="submit" name="submit" value="run">
</form>
<?php 
	if ($_POST != null){
		$input = $_POST['input'];
		$tipe = $_POST['tipe'];
		$n_vokal = n_vokal($input);
		$baris_prima = get_n_prima($n_vokal);
		$vokal = "aiueo";
		$vokal_ke = 1;

		if ($tipe == "enkripsi"){
			for ($i=0; $i < strlen($input); $i++) { 
				if (strpos($vokal, $input[$i]) !== false){
					$input[$i] = $vokal[(strpos($vokal, $input[$i]) + $baris_prima[$vokal_ke-1]) % 5];
					$vokal_ke++;
				}
			}
		}
		elseif ($tipe == "dekripsi"){
			for ($i=0; $i < strlen($input); $i++) { 
				if (strpos($vokal, $input[$i]) !== false){
					$input[$i] = $vokal[(strpos($vokal, $input[$i]) + 5*$n_vokal - $baris_prima[$vokal_ke-1]) % 5];
					$vokal_ke++;
				}
			}
		}

		echo $input;

	}


	function is_prima($value)
	{
		// bilangan dianggap prima ketika faktornya hanya 1 dan bilangan itu sendiri, atau dalam kata lain hanya punya 2 faktor
		if ($value > 1) {
			$count_faktor = 1; // angka itu sendiri adalah faktor untuk diri sendiri
			for ($i=1; $i <= $value/2; $i++) { 
				if ($value % $i == 0){
					$count_faktor++;
				}
			}
			if ($count_faktor == 2){
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	function n_vokal($value)
	{
		$vokal = "aiueo";
		$n_vokal = 0;
		for ($i=0; $i < strlen($value); $i++) { 
			if (stripos($vokal, $value[$i]) !== false){
				$n_vokal++;
			}
		}
		return $n_vokal;
	}


	function get_n_prima($n)
	{
		$hasil = array();
		$iter = count($hasil);
		$i = 1;
		while ($iter < $n) {
			if (is_prima($i)){
				$hasil[] = $i;
			}
			$iter = count($hasil);
			$i++;
		}
		return $hasil;
	}

	function get_n_ganjil($n)
	{
		$hasil = array();
		$i = 1;
		while (count($hasil) < $n) {
			if ($i % 2 == 1){
				$hasil[] = $i;
			}
			$i++;
		}
		return $hasil;
	}
 ?>