<?php #如果輸入帳號=john 密碼=john1234 會進入Welcome  如果錯誤則進入fail login
    if (($_GET[id] == "john") && ($_GET[pwd]=="john1234"))
        echo "Welcome";
    else
        echo "fail login";
?>