<?php
    #把警告訊息關閉
    error_reporting(0);

    #中文輸入法
    mysqli_set_charset($conn, "utf8");

    #1.建立帳戶連結資料庫 localhost=連結得資料庫 root=帳號 mydb=密碼
    $conn = mysqli_connect("localhost","root","", "mydb");

     #確認連結是對的 如果錯誤將執行下程式
    if (mysqli_connect_error($conn))
        die("資料庫連線錯誤");

    
    #2.找出資料庫中所需要的資料
    $result=mysqli_query($conn, "select * from user");

    #3.擷取每筆資料
    while ($row=mysqli_fetch_array($result)) { #每fetch一次抓一筆資料
        echo $row[id];
        echo " ";
        echo $row[pwd];
        echo "<br>";
    }
?>