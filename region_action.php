<?php
/**
 * Created by PhpStorm.
 * User: 52818
 * Date: 2019/9/28
 * Time: 11:31
 */
header("Content-Type:text/html;charset=utf-8");
include './mysqli.php';
$type = isset($_GET["type"]) ? $_GET["type"] : "";
$parent_id = isset($_GET["parent_id"]) ? $_GET["parent_id"] : "";


//连接数据库
if ($type == "" || $parent_id == ""){
    exit(json_encode(array("flag" => false, "msg" => "查询类型错误")));
} else {
    //链接数据库
    $sql = "select * from global_region where parent_id = $parent_id AND region_type = $type";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0){
        $arr = [];
        while ($row = $result->fetch_assoc()){
            $arr[$row["region_id"]]['region_id'] = $row["region_id"]; //$arr[1]["title"] = $row["title"]
            $arr[$row["region_id"]]['region_name'] = $row["region_name"]; //$arr[1]["content"] = $row["content"]
        }
    }
    $provinces_json = json_encode($arr); //数组转json
    exit($provinces_json);
}


























