
<?php
    session_start();#储存於伺服器端的資料
    unset($_SESSION["id"]);#消除$_SESSION["id"]的資料
    echo "登出成功....";
    echo "<meta http-equiv=REFRESH content='3; url=login.html'>";#等待3秒傳送到指定連接

?>
