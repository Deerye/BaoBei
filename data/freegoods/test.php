<?phprequire("public.php");//获取参数num$num=$_REQUEST["num"]or die('{"code":-2,"msg":"分类编号是必须的"}');//获取参数pageno当前页数@$pageno=$_REQUEST["pageno"] or die('{"code":-1,"msg":"页数是必须的"}');//计算将pageno数据库起始记录数offset$offset=($pageno-1)*16;//创建sql语句并发送if($num==1){        $sql = "SELECT * FROM freegoods  ORDER BY fid LIMIT $offset,16"; }else if($num==3){        $sql = "SELECT * FROM freegoods ORDER BY fouces LIMIT $offset,16"; }else if($num==4){        $sql = "SELECT * FROM freegoods ORDER BY copies LIMIT $offset,16"; }   $result = mysqli_query($conn,$sql); //抓取多行 $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);   //转换json发送   echo json_encode($rows);?>