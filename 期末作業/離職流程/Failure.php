<?php
date_default_timezone_set("Asia/Taipei");
include("config.php");
$event_time = date('Y-m-d H:i:s');

if(isset($_GET['DocNo'])){
    $conn = new mysqli($host, $account, $password, $database);
    $result = $conn->query('INSERT INTO easyflow (DocNo,Status,event_time) Values ("'. $_GET['DocNo'] .'", 2 ,"'. $event_time .'")');
    echo "更新狀態：不予受理";
}
?>