<?php
    error_reporting(0);#取消錯誤回報
    session_start();#储存的資料
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb");
        $sql="delete from bulletin where bid='{$_GET[bid]}'";#刪除$_GET[bid]的列,當有接收到$_GET[bid]時
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "佈告刪除錯誤";
        }else{
            echo "佈告刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";#等待3秒傳送到指定連接
    }
?>
