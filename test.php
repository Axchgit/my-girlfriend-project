<?php
		include 'conn/conn.php';
	$dt=date("Y-m-d-His",time());
	$a='student_data/'.$dt.'.xls';
	
	$sql='select * from student_message';
	$re=$link->query($sql);
	
function createtable($re,$a){  
    header("Content-type:application/vnd.ms-excel");  
    header("Content-Disposition:filename=$a");  
 
    $strexport="编号\t姓名\t性别\t年龄\r";
    foreach ($re as $row){  
	
        $strexport.=$row['id']."\t";   
        $strexport.=$row['name']."\t";  
        $strexport.=$row['sex']."\t";  
        $strexport.=$row['sno']."\r";  
		
    }  
    $strexport=iconv('UTF-8',"GB2312//IGNORE",$strexport);  
    exit($strexport);     
}


?>