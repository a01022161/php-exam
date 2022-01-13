<html>
    <head><title>新增使用者</title></head>
    <body>
<?php        
    error_reporting(0); #取消錯誤回報
    session_start(); #储存的資料
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";#等待3秒傳送到指定連接
    }
    else{    
        echo "
            <form action=user_add.php method=post>#使用$POST[]將資料傳到user_add.php 
                帳號：<input type=text name=id><br>#類型text 使用名稱id
                密碼：<input type=text name=pwd><p></p>#類型text 使用名稱pwd
                <input type=submit value=新增> <input type=reset value=清除>#類型發送 類型重設
            </form>
        ";
    }
?>
    </body>
</html>

