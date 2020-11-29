<?php 
//ngay thang
//echo time();
//echo date('d/m/Y H:i:s');
date_default_timezone_set('Asia/Ho_Chi_Minh');
date_default_timezone_get();
//echo time();
//echo date('d/m/Y H:i:s');
//echo date('d/m/Y H:i:s',1606478690);1606478690
//echo strtotime('2020-11-27 19:04:50');
function khoangcach($d1,$d2)
{
    $t1 = strtotime($d1);
    $t2 = strtotime($d2);
    return ($t2-$t1)/86400;
}
//echo khoangcach('2020-01-10','2020-01-05');
function sn($sn) // 2019-01-05
{
    $nsn = date('Y',strtotime($sn));
    $kc = khoangcach($sn,date($nsn.'-m-d'));
    if($kc==0)
        return 'Chuc mung sinh nhat';
    else if($kc>0)
        return 'Sinh nhat da qua '.$kc.' ngay';
    else return 'Con '.abs($kc).' ngày la toi sinh nhat';
}
echo sn($_GET['sn']);

?>
