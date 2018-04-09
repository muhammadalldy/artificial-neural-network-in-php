<?php

$filename = 'iris.txt';
$fp = @fopen($filename, 'r'); 
if ($fp) {
   $array = explode("\n", fread($fp, filesize($filename)));
}
$ndata = count($array);
$datas = [];

for ($i=0; $i < $ndata; $i++) { 
	$str = $array[$i];
	$dt = (explode(',',$str));
	$nline = count($dt);
	for ($j=0; $j < $nline; $j++) { 
		// echo $dt[$j];
		$datas[$i][$j] = $dt[$j];
		// echo "<br/>";

	}
}

// $str = $array[0];

// $z = (explode(',',$str));
// print_r($z[4]);

?>