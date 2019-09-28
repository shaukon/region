<?php
/**
 * Created by PhpStorm.
 * User: 52818
 * Date: 2019/9/28
 * Time: 10:56
 */

// 需要用到数据库连接的时候只需要引进mysqli.php文件即可

include 'conn.inc.php';
$mysqli = new mysqli(HOST,USER,PWD,DBNAME);
if ($mysqli->connect_errno){
    die('数据库链接出错'.$mysqli->connect_error);
}
