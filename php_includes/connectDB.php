
<?php

    $DB['db_host'] = "localhost";
    $DB['db_user'] = "root";
    $DB['db_pass'] = "";
    $DB['db_name'] = "troyblog";
    
    // $DB['db_host'] = "localhost";
    // $DB['db_user'] = "hongbowu_troy";
    // $DB['db_pass'] = "TROY8258";
    // $DB['db_name'] = "hongbowu_troyblog";
    foreach($DB as $key => $value){
        define(strtoupper($key), $value);
    }
    
    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    
    $query = "SET NAMES utf8";
    mysqli_query($con, $query);
    

?>