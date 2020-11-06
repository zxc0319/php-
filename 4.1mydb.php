<?php
    #1.建立帳戶連結資料庫 localhost=連結得資料庫 root=帳號 mydb=密碼
    $conn = mysqli_connect("localhost", "root", "", "mydb");
    
    #2.找出資料庫中所需要的資料
    $result=mysqli_query($conn, "select * from user");

    #3.擷取每筆資料
    $row=mysqli_fetch_array($result);   #每fetch一次抓一筆資料

    echo $row[id] + " " + $row[pwd]; 
?>