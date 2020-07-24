<?php

//上传图片到本地	
if($a=='upload'&&$b=='images')
{
	
	$data = $_FILES;
	
	if(isset($data)&&$data)
	{
	$fname = time();//随机文件名
    $ext = strrchr($_FILES['file']['name'],'.');//截取文件的扩展名
	$dir = SYSTEM_ROOT;
	$filedir = '/uploadfile/images/'.date('Y/m/d');
    $path = $dir.$filedir;//文件存储的路径
    //如果目录不存在，就创建目录
    if(!is_dir($path)){
    mkdir($path,0777,true);
    }
    $saveFile = $path.'/'.$fname.$ext;//保存的文件名

    $fileuploaded = move_uploaded_file($_FILES['file']['tmp_name'],$saveFile);
	
	if($fileuploaded)
	{
		exit(json_encode(array('code'=>10001,'data'=>array('local_imgurl'=>$filedir.'/'.$fname.$ext))));
	}	
	}else{
		exit(callback(2,'you have no permission'));
	}  
}