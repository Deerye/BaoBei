<?php
require("public.php");
//获取参数pageno当前页数
@$pageno=$_REQUEST["pageno"] or die('{"code":-1,"msg":"页数是必须的"}');
//计算将pageno数据库起始记录数offset
$offset=($pageno-1)*16;
//创建sql语句并发送
 $sql = "SELECT * FROM makemoney LIMIT $offset,16";
 $result = mysqli_query($conn,$sql);
 //抓取多行
 $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
   //转换json发送
   echo json_encode($rows);
?>