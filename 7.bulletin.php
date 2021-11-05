<?php
    error_reporting(0);
    $conn=mysqli_connect("localhost","root","", "mydb");# $conn 等於 mysqli_連結 主機 帳號 密碼 資料庫名稱
    $result=mysqli_query($conn, "select * from bulletin"); # 從資料庫查詢  選擇來自bulletin的檔案
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";#<table border=2>增加邊框  tr換行 td分開文字
    while ($row=mysqli_fetch_array($result)){#依順序抓取bulletin裡 bid type title content time 的資料
        echo "<tr><td>";
        echo $row["bid"];
        echo "</td><td>";
        echo $row["type"];
        echo "</td><td>"; 
        echo $row["title"];
        echo "</td><td>";
        echo $row["content"]; 
        echo "</td><td>";
        echo $row["time"];
        echo "</td></tr>";
    }
    echo "</table>"
?>
