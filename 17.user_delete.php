<?php
    error_reporting(0);#取消錯誤回報
    session_start();#储存的資料
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";#等待3秒傳送到指定連接
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb");#連結資料庫
        $sql="delete from user where id='{$_GET[id]}'";#刪除與資料庫USER檔案裡 名稱ID資料為$_GET[id]的檔案
        #echo $sql;
        if (!mysqli_query($conn,$sql)){   #(連接資料庫,接受的查詢)
            echo "使用者刪除錯誤";
        }else{
            echo "使用者刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=user.php'>";
    }
?>
