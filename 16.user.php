<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0);#取消錯誤回報
        session_start();#储存的資料
        if (!$_SESSION["id"]) {
            echo "請登入帳號";
            echo "<meta http-equiv=REFRESH content='3, url=login.html'>";#等待3秒傳送到指定連接
        }
        else{   
            echo "<h1>使用者管理</h1>
                [<a href=bulletin.php>回佈告欄列表</a>]<br>#連接bulletin.php 顯示:回佈告欄列表
                <table border=1>#邊界寬度1px
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            
            $conn=mysqli_connect("localhost","root","","mydb");#連結資料庫
            $result=mysqli_query($conn, "select * from user");#連結資料庫的 user檔案夾
            while ($row=mysqli_fetch_array($result)){
                echo "<tr><td><a href=user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";#向user_delete.php發送$row['id']的資料,收方式為GET
            }
            echo "</table>";
        }
    ?> 
    </body>
</html>
