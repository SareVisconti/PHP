﻿<?php
    error_reporting(0);
    session_start();
if (!isset($_SESSION['id'])){   
    echo "請登入系統";
    echo "<meta http-equiv='refresh' content='3;url=index.html''>"; 
}else{
    $conn = mysqli_connect("localhost", "root", "", "mydb");
    $sql = "update bulletin set title='{$_POST['title']}', content='{$_POST['content']}'
        , type={$_POST['type']}, time='{$_POST['time']}' where bid={$_POST['bid']}"; 
    //echo $sql;
    if (!mysqli_query($conn, $sql)){
        echo "修改佈告錯誤";
    }
    else  
        echo "修改佈告成功";
    echo "<meta http-equiv='refresh' content='3;url=bulletin.php''>"; 
}
?>
