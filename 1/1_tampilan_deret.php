<?php 
	$baris_prima = $baris_genap = $baris_fibbonaci = array();
	if ($_POST != null){
		$counter = $_POST['counter'];
	}

	$baris_fibbonaci = get_n_fibbonaci(5);
	print_r($baris_fibbonaci);


	function get_n_fibbonaci($n)
	{
		$hasil = array();
		$hasil[0] = 0;
		$hasil[1] = 1;
		$iter = count($hasil)-1;
		while ($iter < $n){
			$hasil[] = $hasil[$iter] + $hasil[$iter-1];
			$iter = count($hasil)-1;
		}
		return $hasil;
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

 ?>