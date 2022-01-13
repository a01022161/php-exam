<?php
    error_reporting(0);#取消錯誤回報
    session_start();#储存的資料
    if (!$_SESSION["id"]) 
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else{
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=bulletin_add.php>
                    標    題：<input type=text name=title><br>
                    內    容：<br><textarea name=content rows=20 cols=20></textarea><br># 文字區域 20行 20列
                    佈告類型：<input type=radio name=type value=1>系上公告 # radio 按鈕選擇回傳1
                            <input type=radio name=type value=2>獲獎資訊# radio 按鈕選擇回傳2
                            <input type=radio name=type value=3>徵才資訊<br># radio 按鈕選擇回傳3
                    發布時間：<input type=date name=time><p></p># type日期  
                    <input type=submit value=新增佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";
    }
?>


