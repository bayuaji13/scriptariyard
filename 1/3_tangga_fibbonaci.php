<form action="" method="post">
	fibbonaci : <input type="text" name="input"> <input type="submit" name="submit" value="run">
</form>
<?php 
	if ($_POST != null){
		$input = $_POST['input'];
		$baris_fibbonaci = get_n_fibbonaci(sum_one_to_n($input));
		$n_spacing = strlen($baris_fibbonaci[count($baris_fibbonaci)]) + 1;
		echo "<pre>";
		for ($i=1; $i<=$input ; $i++) { 
			$space = ($input-($i-1)/2)*$n_spacing;
			for ($j=0; $j < $space; $j++) { 
				echo " ";
			}
			for ($k=0; $k < $i; $k++) { 
				$echoed = array_shift($baris_fibbonaci);
				echo $echoed;
				for ($l=0; $l < ($n_spacing - strlen($echoed)); $l++) { 
					echo " ";
				}
			}
			echo "\n";
		}
		echo "</pre>";
	}

	

	function sum_one_to_n($value)
	{
		$sum = 0;
		for ($i=1; $i <= $value; $i++) { 
			$sum += $i;
		}
		return $sum;
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
 ?>