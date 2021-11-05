
<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("localhost","root","","mydb");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) { #依順序抓取user裡的資料
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {#如果輸入的資料== user的資料則$login為true
       $login=TRUE;
     }
   } 
   if ($login==TRUE)
     echo "welcome!!";
  else
     echo "id/pwd wrong!!";
?>
