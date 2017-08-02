<?php
/**
 * Created by PhpStorm.
 * User: jiangxiaoqing
 * Date: 2017/5/16
 * Time: 下午2:01
 *
 *
 */

$a = 'hello';
$param = $_GET['param'];
$result = array($a,$param);
echo json_encode($result);