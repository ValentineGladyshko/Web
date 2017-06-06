<?php
    $mysql = mysql_connect ("localhost","root","");
    mysql_select_db ("labs", $mysql);
    $query = mysql_query("TRUNCATE TABLE Users");   
    echo "<p>Дані успішно видалено!!!</p>";
?>