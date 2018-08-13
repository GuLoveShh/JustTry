<?php
//猴子选大王
function king($m, $n) {
 for($i = 1;$i < $m + 1;$i++) {
 //构建数组
  $arr[] = $i;
 }
 $i = 0;//设置数组指针
 while (count($arr) > 1) {
  //遍历数组，判断当前猴子是否为出局序号，
  //如果是则出局，否则放到数组最后
  if (($i + 1) % $n == 0) {
   unset($arr[$i]);
  } else {
   array_push($arr, $arr[$i]);
   //本轮非出局猴子放数组尾部
   unset($arr[$i]);
   //删除
  }
  $i++;
 }
 return $arr;
}
var_dump(king(100,5));