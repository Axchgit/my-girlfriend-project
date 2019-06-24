<link href="css/style.css" rel="stylesheet" type="text/css">
	
<html>
	<head>
		<meta charset="utf-8" />
		<title>管理员页面</title>
		<link href="css/navigation.css" rel="stylesheet" type="text/css">
	</head>
	<body >
<!--<?php include('css/header_admin.php') ?>-->
			
	    <div class="nav">
		<a class="left" href="admin_add.php"  >管理员注册</a>
		
	
		<!--<a class="left " href="user_add.php">用户注册</a>-->
		<a class="left" href="user_message.php">用户列表</a>
		<a class="left current" href="user_message.php">蔬菜列表</a>
		
		<a class="left " href="select_user.php">查找用户</a>
		<a class="left " href="select_vege.php">查找蔬菜</a>
		<a href="user_login.php"></a>
		<a class="right" href="admin_logout.php">退出登录</a>
		<div style="clear: both;"></div>
		</div>
		
		<!-- <a href='delete_vege.php?id=27} onClick='return confirm('真的要删除吗？')'><button class='bt3' >删除</button></a>-->
	</body>
</html>
<?php
include 'conn/conn.php';
//include 'conn/verify_admin.php';

$sql1="select count(*) from student_message";
$ps=$link->query($sql1);

$rows=$ps->fetchColumn(0);//获取总行数
//$rows=$ps->rowCount(); 
$pageSize=6; //每一页大小
$pageCount=(int)ceil($rows/$pageSize);
if(isset($_GET['p'])){
		$currentPage=$_GET['p'];
	}else{
		$currentPage=1;
	}
//$currentPage=1;
$first=($currentPage-1)*$pageSize;

$sql2="select * from student_message order by id limit $first,$pageSize";

$ps2=$link->query($sql2);



//$result=$ps->fetchAll(pdo::fetch_num);

echo '<table class="ah" border=2><br><br></caption><tr><th>序号</th><th>头像</th><th>姓名</th><th>学号</th><th>性别</th><th>班级</th><th>联系方式</th><th>密码</th><th>工作岗位</th><th>工资</th><th>入岗时间</th><th>操作</th></tr>';
foreach($ps2 as $arr){
	echo "<tr>
		<td align='center'>{$arr['id']}</td>
		<td align='center' >
		<img align='center' width='100px'height='80px'   src='$arr[picture]' /></td>
		<td align='center'>{$arr['name']}</td>
		<td align='center'>{$arr['sno']}</td>
		<td align='center'>{$arr['sex']}</td>
		<td align='center'>{$arr['class']}</td>
		<td align='center'>{$arr['tel']}</td>
		<td align='center'>{$arr['password']}</td>
		<td align='center'>{$arr['work']}</td>
		<td align='center'>{$arr['price']}</td>
		<td align='center'>{$arr['date_time']}</td>
		<td align='center'><a href='amend_xs.php?id={$arr['id']}'><button class='bt3' >修改</button></a> | <a href='delete_xs.php?id={$arr['id']} '><button class='bt3' >删除</button></a></td></tr>";
	
}
echo '</table>';

//分页
$pageUp=$currentPage-1;
$pageDn=$currentPage+1;
echo '<div class="ah">';
ECHO "<a style='width: 90%; background-color: beige;margin: 5px auto 5px auto;'>总记录数：{$rows}&nbsp;&nbsp;&nbsp;&nbsp;页码：{$currentPage}/{$pageCount}&nbsp;&nbsp;&nbsp;&nbsp;</a>";	
if($currentPage==1){
	echo "<button class='bt4' >首页</button> | <button class='bt4' >上一页</button> |"; 
}else{
    echo "<a href=test.php?p=1><button class='bt3' >首页</button></a> | <a href=test.php?p={$pageUp}><button class='bt3' >上一页</button></a> |";
	}
	
if($currentPage==$pageCount){	
	echo " <button class='bt4' >下一页</button> | <button class='bt4' >尾页</button>"; 
}else{
    echo " <a href=test.php?p={$pageDn}><button class='bt3' >下一页</button></a> | <a href=test.php?p={$pageCount}><button class='bt3' >尾页</button></a>";
	}
	
	echo '</div>'
?>
<br />

<div style="text-align: center;">
<!--<a href="admin_index.php"><button  class="bt2">返回页面</button></a>-->

<a href="add_xs.php"><button style="width: 100px; height: 40px;" class="bt3">添加学生信息</button></a>

</div>