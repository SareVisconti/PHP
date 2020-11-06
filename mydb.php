<?php
    error_reporting(0); #把警告訊息刪掉

    #php要怎麼跟mysql資料庫進行連結 有三步驟
    #1. mysql_connect("localhost","host","","mydb")
    # 帳號 密碼 以及連結的資料庫(MYDB)
    
    $conn = mysqli_connect("localhost","root","", "mydb");
    #2.mysqli_query從表格user找出資料
    $result = mysqli_query($conn,"select * from user");

    #3.mysql_fetch_array從$result擷取每筆資料
    $row=mysqli_fetch_array($result);
    echo $row[id]." ".$row[pwd]; #每fetch一次抓一筆資料

    echo "<br>";
    $row=mysqli_fetch_array($result);
    echo $row[id]." ".$row[pwd]; #每fetch一次抓一筆資料

    
?>