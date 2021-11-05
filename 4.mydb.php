<?php
    #mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("localhost", "root", "", "mydb"); # $conn 等於 mysqli_連結 主機 帳號 密碼 資料庫名稱
    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user"); # 從資料庫查詢  選擇來自user的檔案
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $row=mysqli_fetch_array($result); # 從查詢出來的資料一筆一筆抓出來

    echo $row["id"] . " " . $row["pwd"]; #輸出user檔案裡 ID的值 PWD的值
    echo $row["id"] . " " . $row["pwd"]; #輸出user檔案裡 ID的值 PWD的值
    
?>
