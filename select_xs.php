<meta charset="utf-8" />
<link href="css/style.css" type="text/css" rel="stylesheet" />
<body style="background:url(img/beijin.jpg); background-repeat:no-repeat;  background-size: 100%;">
<h1 class="div0">学生信息 </h1>
<form name="add" method="post" enctype="multipart/form-data">
	

	</body>
</form>
<link href="css/style.css" rel="stylesheet" type="text/css">
	
<html>
	<head>
		<meta charset="utf-8" />
		<title>管理员页面</title>
		<link href="css/navigation.css" rel="stylesheet" type="text/css">
	</head>
	<body >
<!--<?php include('css/header_admin.php') ?>-->
			<hr>
<!--	   
		<a class="left" href="admin_add.php"  >管理员注册</a>
		-->
	
		<!--<a class="left " href="user_add.php">用户注册</a>-->
		<!--<a class="left" href="user_message.php">用户列表</a>
		<a class="left current" href="user_message.php">蔬菜列表</a>
		
		<a class="left " href="select_user.php">查找用户</a>
		<a class="left " href="select_vege.php">查找蔬菜</a>
		<a href="user_login.php"></a>
		<a class="right" href="admin_logout.php">退出登录</a>
		
		-->
		<!-- <a href='delete_vege.php?id=27} onClick='return confirm('真的要删除吗？')'><button class='bt3' >删除</button></a>-->
	</body>
</html>
<form name="admin_add" method="post">
	
	<div class="ah1">
		<!--<h1 >	<span  style="color: rgb(69,137,148);text-align: center;">查找蔬菜</span></h1>
	<hr color="#008B8B">-->
	<p><span class="sp1">根据学号查询：</span><span class="sp2"><input name="sno" type="text"  size="30"></span></p>
	
	<p><span class="sp3"><input name="sel" class="bt1" type="submit" value="查询"></span></p>
	
	<p><span class="sp1">根据姓名查询：</span><span class="sp2"><input name="name" type="text"  size="30"></span></p>
    
	<p><span class="sp3"><input name="s" class="bt1" type="submit" value="查询"></span></p>
	</div>
	
	
</form>
	
<?php
	include 'conn/conn.php';
//	include 'conn/verify_admin.php';
	if(isset($_POST['sel'])){
		$s=$_POST['sno']; 
		
		$sql="select * from student_message where sno=$s";
		
		$r=$link->query($sql);
		
		echo '<table class="ah" border=2><br><br></caption><tr><th>序号</th><th>头像</th><th>名字</th><th>学号</th><th>性别</th><th>班级</th><th>联系电话</th><th>密码</th><th>工作岗位</th><th>工资</th><th>添加时间</th><th>操作</th></tr>';
		foreach($r as $arr){
	echo "<tr >
		<td align='center'>{$arr['id']}</td>
		<td align='center' ><div style='text-align: center;' >
		<img width='100px'height='80px'   src='$arr[picture]' /></div></td>
		<td align='center'>{$arr['name']}</td>
		<td align='center'>{$arr['sno']}</td>
		<td align='center'>{$arr['sex']}</td>
		<td align='center'>{$arr['class']}</td>
		<td align='center'>{$arr['tel']}</td>
		<td align='center'>{$arr['password']}</td>
		<td align='center'>{$arr['work']}</td>
		<td align='center'>{$arr['price']}</td>
		<td align='center'>{$arr['date_time']}</td>
		<td align='center'><a href='amend_xs.php?id={$arr['id']}'><button class='bt3' >修改</button></a> | <a href='select_xs.php?id={$arr['id']}'><button class='bt3' >删除</button></a></td>
		</tr>";
	
}
		
		
	}
	
	if(isset($_POST['s'])){
		$n=$_POST['name'];
	
		
		$sql="select * from student_message where name='$n'";
		//加上单引号来根据字符串查询数据；
		
		
		$r=$link->query($sql);
		
		 echo '<table class="ah" border=2><br><br></caption><tr><th>序号</th><th>头像</th><th>名字</th><th>学号</th><th>性别</th><th>班级</th><th>联系电话</th><th>密码</th><th>工作岗位</th><th>工资</th><th>添加时间</th><th>操作</th></tr>';
		foreach($r as $arr){
	echo "<tr >
		<td align='center'>{$arr['id']}</td>
		<td align='center' ><div style='text-align: center;' >
		<img width='100px'height='80px'   src='$arr[picture]' /></div></td>
		<td align='center'>{$arr['name']}</td>
		<td align='center'>{$arr['sno']}</td>
		<td align='center'>{$arr['sex']}</td>
		<td align='center'>{$arr['class']}</td>
		<td align='center'>{$arr['tel']}</td>
		<td align='center'>{$arr['password']}</td>
		<td align='center'>{$arr['work']}</td>
		<td align='center'>{$arr['price']}</td>
		<td align='center'>{$arr['date_time']}</td>
		<td align='center'><a href='amend_xs.php?id={$arr['id']}'><button class='bt3' >修改</button></a> | <a href='select_xs.php?id={$arr['id']}'><button class='bt3' >删除</button></a></td></tr>";
	
}
		
		
	}

	
		
	
		
	

?>