<form action="" method="post">
	N : <input type="text" name="input"> 
	 <input type="submit" name="submit" value="run">
</form>
<?php 
	if ($_POST != null){
		$input = $_POST['input'];
		for ($i=1; $i <= $input; $i++) { 
			deret_rekursif(1,$i);
			echo "<br/>";
		}
	}


	function deret_rekursif($start,$end)
	{
		if ($start >= $end){
			echo $end;
		}else{
			echo $start." ";
			deret_rekursif($start+1,$end);
		}
		
	}
 ?>