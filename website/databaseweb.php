<?php

include '../webconfig/opendb.php'; 

 
//run query
$query=mysql_query("SELECT * FROM mytodo WHERE todo_id > 0");


echo "<table border='1'>";
echo "<tr><th>Id</th><th>Todo</th><th>Is it starred</th></tr>";

while($result=mysql_fetch_assoc($query)) {
        $output[]=$result;
	echo "<tr><td>";
	echo $result['todo_id'];
	echo "</td><td>";
	echo $result['mytodo'];
	echo "</td><td>";
	echo $result['starred'];
	echo "</td></tr>"; 

}
echo "</table>"; 
 
mysql_close();
?>
