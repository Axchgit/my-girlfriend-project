<meta charset="utf-8" />
<link href="css/style.css" type="text/css" rel="stylesheet" />
<body style="background:url(img/beijin.jpg); background-repeat:no-repeat; text-align:center; background-size: 100%;">
<h1 class="div0">学生登录</h1>
	<p><span class="sp1">学号：</span><span class="sp2"><input name="a_name" type="text"  size="50"></span></p>
	<p><span class="sp1">密码：</span><span class="sp2"><input name="pw" type="password" size="50"></span></p>
	<p><span class="sp3"><input name="dl" class="bt1" type="submit" value="登录"></span></p>
</form>

<?php
	session_start();
	
if(isset($_POST['dl'])){

	include 'conn/conn.php';
	$u=$_POST['a_name'];
	$p=$_POST['pw'];
		$_SESSION['usname']=$u;
    $sql="select a_name,pw from admin where a_name='{$u}' and pw='{$p}'";
    $result=$link->query($sql);
		
	if($result->rowCount()>0){
	header("location:index.html");
		echo "<script>alert('登录成功');document.location.href='index.html';</script>";
	}else{
		
		echo "<script>alert('登录不成功');</script>";
	}
	
	
}

?>