<?php 
//tinh tong hai so
//dau vao: so a, so b
//xu ly: cong
//dau ra: tong
function tonghaiso($soa,$sob)
{
    $tong = $soa+$sob;
    return $tong;
}
//echo tonghaiso(1,2);
//giai phuong trinh bac 1: ax+b=0;
//dau vao: a,b
//xu ly: thuat toan giai pt bac 1
//dau ra: x (nghiem)
function ptbac1($a,$b)
{
    if($a == 0 && $b==0)
    {
        return 'Vô số nghiệm';
    }else {
        if($a == 0 && $b!=0)
        {
            return 'Vô nghiệm';
        }else
        {
            return -$b/$a;
        }
    }
}
//echo ptbac1(0,23);
/*
1. hàm về số học
    is_numeric()
    round(sô thập phân, số luong ky tu thập phan muốn giữ lại): làm tròn
       round(123456.1223456,3)=>123456.122
       round(123456.1223456,-3)=>123000
    rand(min,max): tạo ra một con số ngẫu nhiên mỗi lần thực thi
        rand(1,10)=>
2. hàm về chuỗi
    trim($s,kytucanloaiboohaidau)
    rtrim()
    ltrim()
    strlen(str);=>so luong ky tu cua 1 chuỗi
    substr($s,vitribatdaucat,dodaimuoncat)
    strpos($s,$scantim,$vitribatdautim= 0) => vi tri tim dc đầu tien chuỗi con trong chuỗi gốc
    strrpos($s,$scantim,$vitribatdautim)=>tim cuoi
3. hàm về ngày tháng
4. hàm về mảng (1 bài riêng)

*/
//echo round(123456.1223456,-3);
//echo rand(1,10);
//   0...........11
//$s ='chao cac ban';
//echo strlen($s);
//echo substr($s,1,3);
//echo strpos($s,'a');
//tạo 1 chuỗi ngẫu nhiên không đc trùng ký tự nhau vd: aaaaaaaaaa
// ===> dc phep tuy chinh so luong ky tu phat sinh
//dau vao : so luong ky tu
// tao ra chuoi ngau nhien
//dau ra: 1 chuỗi

function rand_txt($n)
{
    $s = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKZXCVBNM0123456789';
    $l = strlen($s)-1;
    $rs = '';
    for($i =1;$i<=$n;$i++)
    {       
        $rs.= substr($s,rand(0,$l),1);
    }
    return $rs;
}

//echo rand_txt(5);


// tim tat cả cac vị trị chuỗi con trong chuỗi cha
// ==> ds vi tri tim dc vd: 1,2,34,54
//dau vao: chuoi goc, chuoi tim
//xu ly : tim het
//dau ra: ds vi tri: chuoi
function strpos_all($str,$search)
{
    //str: achao cac ban
    //search: a 
    //strpos()=>virtitimdautien
    $kq= '';
    $vitribatdautim = 0;
    do{
        //vt: 3
        //vt:7
        //vt:11
        $vt = strpos($str,$search,$vitribatdautim);//=>0,2,6,10 false
        if($vt !== false)
        {
            $vitribatdautim = $vt+1;
            $kq.=$vt.',';
        }       
    }while($vt !== false);
    return rtrim($kq,',');
}
//echo strpos_all('achao cac ban','a');

// $a = 1;
// $b = '1';
// if($a ===$b)
//     echo '=';
// else {
//     echo '#';
// }

function thamchieu($a,$b,&$r1,&$r2,&$r3)
{
    $r1 = $a+$b;
    $r2 = $a-$b;
    $r3 = $a*$b;
}

thamchieu(1,2,$tong,$hieu,$tich);

// echo $tong;
// echo '<br>';
// echo $hieu;
// echo '<br>';
// echo $tich;
function tachhoten($hoten,&$ho,&$ten,&$lot)
{
    $hoten = trim($hoten);
    $v1 = strpos($hoten,' ');
    $ho = substr($hoten,0,$v1);
    $v3 = strrpos($hoten,' ');
    $ten = substr($hoten,$v3);
    $lot = substr($hoten,$v1,$v3-$v1);
}
tachhoten($_GET['s'],$ho,$ten,$lot);
echo $ho;
echo ' ho<br>';
echo $ten;
echo ' ten <br> lot:';
echo $lot;
?>
