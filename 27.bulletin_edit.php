<?php

    error_reporting(0);#取消錯誤回報
    session_start();#储存的資料
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";#等待3秒傳送到指定連接
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb");
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){
          #當bid=$_POST['bid']更新bulletin的 title content time type 為post[]的值
          echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
        }else{
            echo "修改成功，三秒鐘後回到佈告欄列表";
            echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
        }
    }

?>
