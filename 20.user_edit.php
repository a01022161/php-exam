<?php

    error_reporting(0);#取消錯誤回報
    session_start();#储存的資料
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";#等待3秒傳送到指定連接
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb");
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){#查詢user id為post[id]並更改他的pwd 如果沒有查到澤回傳null
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=user.php'>";
        }else{
            echo "修改成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=user.php'>";
        }
    }

?>
