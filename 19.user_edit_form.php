<html>
    <head><title>修改使用者</title></head>
    <body>
    <?php
    error_reporting(0);#取消錯誤回報
    session_start();#储存的資料
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";#等待3秒傳送到指定連接
    }
    else{   
        $conn=mysqli_connect("localhost", "root","","mydb");#連結資料庫
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");
        $row=mysqli_fetch_array($result);# 從查詢出來的資料一筆一筆抓出來
        echo "
        <form method=post action=user_edit.php> #使用$POST[]將資料傳到user_edit.php 
            <input type=hidden name=id value={$row['id']}> #使用$POST[]將資料傳到user_edit.php 並隱藏內容,當按下submit時會送出
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>
        ";
    }
    ?>
    </body>
</html>
