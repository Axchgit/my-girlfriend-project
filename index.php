<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"><link rel="stylesheet" href="css/style.css" /> 
		<title>勤工助学信息管理系统</title>
	</head>
	<body>	
    <body style="background:url(img/beijin.jpg); background-repeat:no-repeat; text-align:center; background-size: 100%;">
    <h1 class="div0">勤工助学信息管理系统</h1>
	<hr>
	<div class="nav"><a href="doadd.php">管理员信息管理</a> >
		             <a href="add_xx.php">添加学生岗位信息</a> 
	                 <a href="doadd.php">修改学生岗位信息</a> 
                     <a href="doadd.php">查询学生岗位信息</a>  
                     <a href="admin_logout.php">退出登录</a></div>
	</body>
</html>
<?php
	include 'conn/verify_admin.php';
?>