<?php 
    if (($_POST[id] == "john") && ($_POST[pwd]=="john1234"))  #如果 $_POST[id] 的值等於john and  $_POST[pwd]的值等於john1234 則為true
        echo "Welcome";   #輸出 Welcome
    else #否則
        echo "fail login"; #輸出 fail login
?>
