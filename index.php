<!DOCTYPE html>
<?php
		include 'conn/verify_admin.php';

	
	?>
	
	
<html>
	<head>
		<meta charset="UTF-8"><link rel="stylesheet" href="css/style.css" /> 
		<title>勤工助学信息管理系统</title>
	</head>
	<body>	
    <body style="background:url(img/beijin.jpg); background-repeat:no-repeat; text-align:center; background-size: 100%;">
    <h1 class="div0">勤工助学信息管理系统</h1>
	<hr>
	<div class=""><a href="admin_message.php">管理员信息管理</a> 
		             <a href="add_xs.php">添加学生信息</a> 
	                 <!--<a href="amend_xs.php">修改学生信息</a>--> 
	                 <a href="xs_list.php">学生信息列表</a>
                     <a href="select_xs.php">查询学生信息</a> 
                      <a href="amend_adpw.php">修改密码</a>   
                     <a style="color: crimson;" href="admin_logout.php">退出登录</a></div>
	</body>
</html>
<?php

?>