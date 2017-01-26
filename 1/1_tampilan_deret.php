<?php 
	$baris_prima = $baris_genap = $baris_fibbonaci = $counter = '';
	if ($_POST != null){
		$counter = $_POST['counter'];
		$baris_fibbonaci = implode(',',get_n_fibbonaci($counter));
		$baris_genap = implode(',',get_n_genap($counter));
		$baris_prima = implode(',',get_n_prima($counter));
	}

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
		unset($hasil[0]);
		return $hasil;
	}

	function get_n_genap($n)
	{
		$hasil = array();
		$iter = count($hasil);
		$i = 1;
		while ($iter < $n) {
			if ($i % 2 == 0){
				$hasil[] = $i;
			}
			$iter = count($hasil);
			$i++;
		}
		return $hasil;
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

 <form action="#" method="post">
 	counter : <input type="number" name="counter" value="<?php echo $counter ?>"> <input type="submit" name="submit" value="Tampilkan Deret"> <br>
	Deret genap : <input type="text" value="<?php echo $baris_genap ?>"><br>
	Deret prima : <input type="text" value="<?php echo $baris_prima ?>"><br>
	Deret fibbonaci : <input type="text" value="<?php echo $baris_fibbonaci ?>"><br>
 </form>