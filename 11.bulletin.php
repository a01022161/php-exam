<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) { #如果$_SESSION["id"] 不存在或null 則為true
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";#等待3秒傳送到指定連接
    }
    else{
        echo "Welcome, ".$_SESSION["id"]."[<a href=logout.php>logout</a>]<br>";#輸出$_SESSION["id"] 以及logout連接
        $conn=mysqli_connect("localhost","root","", "mydb"); # $conn 等於 mysqli_連結 主機 帳號 密碼 資料庫名稱
        $result=mysqli_query($conn, "select * from bulletin");# 從資料庫查詢  選擇來自user的檔案
        echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        while ($row=mysqli_fetch_array($result)){# 從查詢出來的資料一筆一筆抓出來
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
        echo "</table>";
    
    }

?>
