<?php 
//xuat cau chao
//dau vao: cau chao
// xuat
//ra: noi dung hoan chinh
function cauchao($noidung)
{
    return 'chào bạn : '.$noidung.'adasdad';
}
echo cauchao('abc');
?>

<?php
$a = 5;
$b = 6;
function tong($a,$b)
{
    return $a + $b;
}
echo 'Tổng 2 số'.$a.'và'.$b.'là ' . tong($a,$b);

?>