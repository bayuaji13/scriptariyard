<form action="" method="post">
	N : <input type="text" name="input"> 
	 <input type="submit" name="submit" value="run">
</form>
<?php 
	if ($_POST != null){
		$input = $_POST['input'];
		for ($i=1; $i <= $input; $i++) { 
			echo deret_dan_jumlah_rekursif(1,$i)."<br/>";
		}
	}

	function deret_rekursif($start,$end)
	{
		if ($start >= $end){
			echo $end;
		}else{
			echo $start." + ";
			deret_rekursif($start+1,$end);
		}
		
	}

	function jumlah_rekursif($start,$end)
	{
		if ($start >= $end){
			return $end;
		}else{
			return $start + jumlah_rekursif($start+1,$end);
		}
		
	}

	function deret_dan_jumlah_rekursif($start,$end)
	{
		if ($start == $end) {
			echo $end;
		}else{
			echo deret_rekursif($start,$end)." = ".jumlah_rekursif($start,$end);
		}
	}
 ?>