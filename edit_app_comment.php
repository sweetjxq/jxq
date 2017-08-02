<?php
/**
 * Created by PhpStorm.
 * User: jiangxiaoqing
 * Date: 2017/5/19
 * Time: 下午5:02
 */

/*$localhost = '127.0.0.1:3307';
$user = 'discuz_w';
$pwd = 'b2zf0Sb29vPodGG1';
$db = 'discuz_activity';*/

$localhost = '10.183.96.245';
$user = 'discuz_bbs_w';
$pwd = 'OOzKyy9lAnTAhNa65x6u';
$db = 'discuz_bbs';
$link = mysql_connect($localhost,$user,$pwd);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_query("set names 'utf8'");
$db_selected = mysql_select_db($db, $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}

$sql = "update pre_common_comment set flag = 0  where uid in(247523640,271475962,272345811,273472324,237331809,235884099,254861282) and objtype in('stid','vid')";
$result = mysql_query($sql);
if($result){
    $num =  mysql_affected_rows($link);
    echo $num;
}
else{
   echo "update error";
}
    mysql_close($link);


?>


