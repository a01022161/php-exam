
<?php
    session_start(); #储存於伺服器端的資料
    if (!isset($_SESSION["counter"])) # $_SESSION["counter"] 不存在或null為true
        $_SESSION["counter"]=1; # $_SESSION["counter"] 資料為1
    else
        $_SESSION["counter"]++; # $_SESSION["counter"] 資料為加1

    echo "counter=".$_SESSION["counter"]; # 輸出 $_SESSION["counter"] 的資料
    echo "<br><a href=reset_counter.php>重置counter</a>"; #顯示為重製 的連接
?>
