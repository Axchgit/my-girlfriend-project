<?php
	
		header('Content_Type:text/html;charset=utf-8');
	include 'conn/conn.php';
	$dt=date("Y-m-d-His",time());
	$a='student_data/'.$dt.'.xls';
	
	$sql='select * from student_message';
	$re=$link->query($sql);
	foreach($re as $row){
		$date=[
		'id' =>$row['id'],
		'a' =>" ",
		'name' =>$row['name'],
		'b' => ' ',
		'sno' => $row['sno'],
		'c' => ' ',
		'sex' => $row['sex'],
		'd' => ' ',
		'class' => $row['class'],
		'e' => ' ',
		'tel' => $row['tel'],
		'f' => ' ',
		'work' => $row['work'],
		'g' => ' ',
		'price' => $row['price'],
		'h' => ' ',
		'date_time' => $row['date_time'],
		'i' => "\n"
		];
		file_put_contents("$a",$date,FILE_APPEND);
	}
//$fn = $_GET["filename"];
$fn = $a;
$filename = iconv("utf-8", "GBK", $fn);      // 转换文件名的字符编码
$path = "$filename";                   // 假设文件存放在files子文件夹下
$extname = getExtension($filename);          // 获得文件名的扩展名
$mime = getMime($extname);                   // 获得文件MIME类型

/* 设置响应域Content-Length、Content-Type和Content-Disposition */
header("Content-Length: ".filesize($path));
header("Content-Type: $mime");
header("Content-Disposition: attachment; filename=$filename");
readfile($path);                             // 将文件内容作为响应体

/* 根据文件名获取文件的扩展名 */
function getExtension($filename){
    return preg_replace('/.+\\./', '', $filename);
}
/* 根据扩展名获取文件的MIME类型 */
function getMime($extname) {
    $mime = array();
    $mime["html"] = "text/html";
    $mime["txt"] = "text/plain";
    $mime["jpg1"] = "image/jpeg";    
    $mime["doc"] = "application/msword";
    $mime["xls"] = "application/vnd.ms-excel";
    $mime["ppt"] = "application/vnd.ms-powerpoint";
    if(array_key_exists($extname, $mime)) {
        return $mime["$extname"];
    } else {
        return "application/octet-stream";
    }
    	

} 

// 	fopen($fn,'a+');
//	unlink($fn);
//	if(!(unlink($a))){
//		echo "shanchushibai";
//	}else{
//		echo "chenggong";
//	}
?>
   