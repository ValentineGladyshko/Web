<?php
    $mysql = mysql_connect ("localhost","root","");
    mysql_select_db ("labs", $mysql);
    $query = mysql_query("SELECT * FROM users"); 
    while($row = mysql_fetch_assoc($query))
    {
        echo "<p>$row[UserID], $row[Name], $row[Telephone], $row[Email], $row[OrderTime]</p>";
    }
?>