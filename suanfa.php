<?php

//水仙花数
function sxh($num)
{
    $arr = [];
    for ($i = 1 ;$i <= $num; $i++)
    {
        if(strlen($i) !=3)
        {
            continue;
        }
        $a = floor($i/100);
        $b = floor($i/10)%10;
        $c = floor($i%10);
        $sum = pow($a,'3')+pow($b,'3')+pow($c,'3');
        if($sum == $i)
        {
            $arr[] = $sum;
        }
    }
    return $arr;
}
//print_r(sxh(1000));

//字符串出现的次数为3；

function cq($str)
{
    $len = strlen($str);
    for($i = 1; $i<=$len;$i++)
    {

    }
}
//print_r(cq('hello world'));


//回文字符串

function hw($str)
{
    $len = strlen($str);
    $arr = [];
    $arr = str_split($str);
    $rev = '';
    for($i = $len-1; $i >= 0;$i--)
    {
        $rev .= $arr[$i];
    }
    return $str == $rev;
}
//print_r(hw('12231'));

//斐波那契数列
function fbnq($num)
{
    $arr = [];
    $arr[0] = $arr[1] = 1;
    for ($i = 3; $i<=$num;$i++)
    {
        $arr[] = $i-1+$i-2;
    }
    return $arr;
}
//print_r(fbnq(10));


//走楼梯
function lt($num)
{
    if($num == 1 || $num ==2)
    {
        return 1;
    }
    else
    {
        return lt($num-1)+lt($num-2);
    }
}
print_r(lt(3));

//数字字母转换
function zh($num)
{
    $arr = range('a','z');
//    print_r($arr);die;
    $len = count($arr);
    $str ='';
    while ($num)
    {
        $rev = $num/$len;
        $tmp = $num%$len;
        if($tmp == 0)
        {
            $str .= array_shift($arr,$arr[$len-1]);
        }
        else
        {
            $str .= array_unshift($arr,$arr[$tmp-1]);
        }
        $num =$rev;
    }
    return $str;
}
print_r(zh(5));
