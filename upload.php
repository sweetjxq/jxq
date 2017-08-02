<?php
/**
 * Created by PhpStorm.
 * User: jiangxiaoqing
 * Date: 2017/5/16
 * Time: 下午2:05
 */

$number = isset($_POST['number']) && !empty($_POST['number']) ? $_POST['number'] : '01' ;

$filename = "pushdata_".date("Ymd")."_".$number;
$webroot =  $_SERVER['DOCUMENT_ROOT'];
$destination= $_SERVER['DOCUMENT_ROOT'].'/data/files/';
if(!file_exists($destination)) {
    if(!mkdir($destination, 0777, true)){
        echo '文件夹创建失败!';
    }
}

$move = move_uploaded_file($_FILES['file']['tmp_name'],$destination."/".$filename);
var_dump($move);