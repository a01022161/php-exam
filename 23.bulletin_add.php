<?php
    error_reporting(0);#取消錯誤回報
    session_start();#储存的資料
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else{
        $conn=mysqli_connect("localhost","root","", "mydb");
        $sql="insert into bulletin(title, content, type, time)  #插入進bulletin的(選擇行列名稱) (各行列名稱的值) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";
        if (!mysqli_query($conn, $sql)){
            echo "新增命令錯誤";
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
        }
    }
?>
