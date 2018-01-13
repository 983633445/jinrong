<?php

function getRandomString($length)
{
    //生成一个包含 大写英文字母, 小写英文字母, 数字 的数组
    $arr = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));
 
    $str = '';
    $arr_len = count($arr);
    for ($i = 0; $i < $length; $i++)
    {
        $rand = mt_rand(0, $arr_len-1);
        $str.=$arr[$rand];
    }
 
    return $str;
}
function digui($data,$pid='0',$level=''){
    $arr=array();
    foreach($data as $k=>$v){
        if($v["p_id"]==$pid){
            $v['level']=$level;
            $arr[]=$v;
            $arr=array_merge($arr,digui($data,$v['auth_id'],$level.'　　　'));
        }
    }
    return $arr;
}