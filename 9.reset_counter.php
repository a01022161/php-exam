<?php
    session_start();
    unset($_SESSION["counter"]); #把 $_SESSION["counter"]的資料銷毀
    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=counter.php'>"; #等待2秒傳送到指定連接

?>
