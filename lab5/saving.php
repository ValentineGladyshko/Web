<?php    
    $mysql = mysql_connect ("localhost","root","");
    mysql_select_db ("labs", $mysql);

    if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} } 
    if (isset($_POST['phoneNum'])) { $phoneNum=$_POST['phoneNum']; if ($phoneNum =='') { unset($phoneNum);} }
    if (isset($_POST['Email'])) { $Email = $_POST['Email']; if ($Email == '') { unset($Email);} }
    if (isset($_POST['time'])) { $time=$_POST['time']; if ($time =='') { unset($time);} }
    
    $first = mb_substr($name,0,1,'UTF-8');
    if(ctype_upper($first)){
        if(ctype_digit($phoneNum))
        {
            $query = mysql_query("INSERT INTO Users (Name, Telephone, Email, OrderTime) VALUES('$name','$phoneNum','$Email','$time')");
        }
    }
    
?>