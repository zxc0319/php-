<?php
    error_reporting(0);#把警告訊息關閉
    
    $conn = mysqli_connect("localhost","root","", "mydb");#1.建立帳戶連結資料庫 localhost=連結得資料庫 root=帳號 mydb=密碼
    if (mysqli_connect_error($conn))
        die("資料庫連線錯誤");

    mysqli_set_charset($conn, "utf8");
    $result=mysqli_query($conn, "select * from user");#2.找出資料庫中所需要的資料
    
    $login=FALSE;
    while ($row=mysqli_fetch_array($result)) { #讀取資料庫內的資料
        if ($_POST["id"] == $row["id"] && $_POST["pwd"]==$row["pwd"]) 
        $login=TRUE;
    }
    
    if  (!$_POST["id"] || !$_POST["pwd"])
           echo "請輸入帳號/密碼"; 
           echo "<meta http-equiv='refresh' content='3;url=login.html''>";              
    }
    elseif ($login==TRUE){  #帳密無誤
      echo "歡迎登入";    
    }
    else{                   #帳密錯誤
      echo "帳號密碼錯誤";
      echo "<meta http-equiv='refresh' content='3;url=login.html''>";          
    }
?>