<?phprequire("public.php");//获取参数num$num=$_REQUEST["num"]or die('{"code":-2,"msg":"分类编号是必须的"}');//获取参数pageno当前页数@$pageno=$_REQUEST["pageno"] or die('{"code":-1,"msg":"页数是必须的"}');//计算将pageno数据库起始记录数offset$offset=($pageno-1)*15;//创建sql语句并发送 if($num==1){        $sql = "SELECT p.pic,p.pname,p.packet,p.price,p.copies,p.pid FROM packets p,classify c        WHERE p.cid=c.cid AND c.cname='潮流女装' LIMIT $offset,15";   }else if($num==2){        $sql = "SELECT p.pic,p.pname,p.packet,p.price,p.copies,p.pid FROM packets p,classify c           WHERE p.cid=c.cid AND c.cname='精品男装' LIMIT $offset,15";   }else if($num==3){        $sql = "SELECT p.pic,p.pname,p.packet,p.price,p.copies,p.pid FROM packets p,classify c              WHERE p.cid=c.cid AND c.cname='时尚配饰' LIMIT $offset,15";   }else if($num==4){        $sql = "SELECT p.pic,p.pname,p.packet,p.price,p.copies,p.pid FROM packets p,classify c               WHERE p.cid=c.cid AND c.cname='美食特产' LIMIT $offset,15";   }else if($num==5){            $sql = "SELECT p.pic,p.pname,p.packet,p.price,p.copies,p.pid FROM packets p,classify c                    WHERE p.cid=c.cid AND c.cname='数码家电' LIMIT $offset,15";   }else if($num==6){            $sql = "SELECT p.pic,p.pname,p.packet,p.price,p.copies,p.pid FROM packets p,classify c                    WHERE p.cid=c.cid AND c.cname='鞋子箱包' LIMIT $offset,15";   }else if($num==7){           $sql = "SELECT p.pic,p.pname,p.packet,p.price,p.copies,p.pid FROM packets p,classify c                   WHERE p.cid=c.cid AND c.cname='美容护肤' LIMIT $offset,15";   }else if($num==8){           $sql = "SELECT p.pic,p.pname,p.packet,p.price,p.copies,p.pid FROM packets p,classify c                   WHERE p.cid=c.cid AND c.cname='综合使用' LIMIT $offset,15";       }   $result = mysqli_query($conn,$sql); //抓取多行 $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);   //转换json发送   echo json_encode($rows);?>