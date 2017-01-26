<?php 
	if ($_POST != null){
		$is_palindrome = '';
		$input = str_replace(' ', '', $_POST['input']);
		$n_vokal = n_vokal($input);
		$n_konsonan = strlen($input) - $n_vokal;
		if (is_palindrome($_POST['input'])){
			$is_palindrome = "termasuk";
		}else{
			$is_palindrome = "tidak termasuk";
		}

		echo "Kalimat $_POST[input] $is_palindrome palindrome <br/>";
		echo "Jumlah konsonan : $n_konsonan <br/>";
		echo "Jumlah vokal : $n_vokal";
	}

	function is_palindrome($value)
	{
		return ($value == strrev($value));
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
 ?>

 <form action="" method="post">
 	masukkan kalimat : <input type="text" name="input"> <input type="submit" value="proses">
 </form>