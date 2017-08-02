<?php
/**
 * Created by PhpStorm.
 * User: jiangxiaoqing
 * Date: 2017/5/17
 * Time: 下午5:13
 */

$myfile = fopen("newfile3.txt", "w") or die("Unable to open file!");
$txt = "--866479026651553\n";
for($i=0;$i<10000;$i++) {
    fwrite($myfile, $txt);
}

$txt = "Steve Jobs\n";
fclose($myfile);