<?php
$db = mysqli_connect("localhost", "root", "root", "sa");
if(!$db)
{
    exit("Es konnte keine Verindung mit der Datenbank hergestellt werden: ".mysqli_connect_error());
}
else
{
    echo"gonna have some fun :)";
}

$sql_task = mysqli_query($db, "SELECT sa_task_name, sa_task_id FROM sa_task WHERE sa_task_hardness <= $hardness");
$row = mysqli_fetch_array($sql_task);
foreach ($row as $key => $value) {
	echo "Key= $key, Wert= $value";
	echo "<br />";
}
$coun = count($row);
echo "$coun";
$ran = rand(1, $coun);
$random = $ran -1;
$task = $row[$random];
echo "$task";
echo "<br />";
?>
