<?php

include '../webconfig/opendb.php'; 

//run query
$query=mysql_query("SELECT * FROM mytodo WHERE todo_id > 0");
while($result=mysql_fetch_assoc($query))
        $output[]=$result;
 
print(json_encode($output));
 
mysql_close();
?>
