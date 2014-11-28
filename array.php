<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
//single array
$single = array("wert1", "wert2", "wert3");
echo "$single[0] and $single[1] and also $single[2]";
echo "<br />";

//associative array
$more = array('Wert1' => "alf",'wert2' => "Robert",'wert3' => "Karl");
echo "$more[Wert1] and $more[wert2] and also $more[wert3]";
echo "<br />";

//loop throught array
foreach ($more as $key => $value) {
	echo "Key= $key, Wert= $value";
	echo "<br />";
}

//multidimensional array
$multi = array
	(
	array(1,"task1",1),
	array(2,"task2",3),
	array(5,"task3",2),
	array(4,"task4",4)
	);

//array dynamisch ausgeben
$i = 0;
$dyn = $multi[$i][0];
echo $dyn;
echo "<br />";

//Array durchgehen
$coun = count($multi);
$ran = rand(1, $coun);
$random = $ran -1;
$task = $multi[$random][1];
echo "$task";
echo "<br />";
?>
</body>
</html>
