<?php


$db=mysql_connect("localhost", "root", "") or die('Could not connect');
mysql_select_db("online_es") or die('');

$result = mysql_query("SELECT * from admin") or die('Could not query');

if(mysql_num_rows($result)){
    echo '{"testData":[';

    $first = true;
    $row=mysql_fetch_assoc($result);
    while($row=mysql_fetch_row($result)){
        

        if($first) {
            $first = false;
        } else {
            echo ',';
        }
        echo json_encode($row);
    }
    echo ']}';
} else {
    echo '[]';
}

mysql_close($db);