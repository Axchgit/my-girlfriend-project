<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<body style="background:url(img/beijin.jpg); background-repeat:no-repeat; text-align:center; background-size: 100%;">
<h1 class="div0">管理员密码修改</h1>
<hr>
<form name="addly" method="post">
	<body style="background:url(img/login_bg.jpg); background-repeat:no-repeat; text-align:center; background-size: 100%;">
	<!--<span class="sp1">用户名:</span>
	<span class="sp2"><input type="text" name="a_name"  required size="50"> </span></br>-->
	<span class="sp1">密码:</span>
	<span class="sp2"><input type="password" name="pw"  required size="50> </span></br>
	<p  align="center"><span style="width: 500px; text-align: center;"></br><input class="bt1" name="add" type="submit" value="提交"></span></p>
	
</form>
	
	
<?php
include 'conn/conn.php';
include 'conn/verify_admin.php';

if(isset($_POST['add'])){
//	$t=$_POST['a_name'];
	$c=$_POST['pw'];
	$id=$_SESSION['admin'];

		
$sql1="update admin set pw='$c' where a_name='$id'";

//	$sql2="select sno from student_message group by sno having count(*)>1";
//	$link->beginTransaction();
	$ps = $link->query($sql1);
//	$ps->bindParam("a",$n);
//	$ps->bindParam("b",$sn);
//	$ps->bindParam("c",$se);
//	$ps->bindParam("d",$filename);
//	$ps->bindParam("e",$t);
//	$ps->bindParam("f",$te);
//	$ps->bindParam("g",$c);
//	$ps->bindParam("h",$wo);
//	$ps->bindParam("i",$pr);
//	$ps->bindParam("j",$time);

	if($ps->rowCount()>0){
	echo  "<script>alert('修改成功');document.location.href='admin_logout.php';</script>";
	}else{
		echo  "<script>alert('修改失败');document.location.href='index.php';</script>";
	} 
}
?>