<?php 
/*
Xem cau truc cua 1 cai mang: 
    var_dump(mang);
    print_r(mang);
Tao mang: 
    $mang = [key=>value,key=>value,...];
    $mang = array(key=>value,key=>value,...);
    $chuoi = implode('kytu',mang); => noi cac phan tu thanh 1 cai chuoi
    $mang = explode('ky tu',chuoi)
Truy xuat phan tu: $mang[key];
Duyet mang: foreach(mang as key=>value)
                {
                    xuly
                }

*/
$mang = [123,12,3,[123,12,3,[123,12,3,[[123,12,3,123,12,31,23,12,3],12,3,123,12,31,23,12,3],12,31,23,12,3],12,31,23,12,3],12,31,23,12,3];
$str = 'chao cac ban';
$mang2= explode(' ',$str);
//echo $mang;
//var_dump($mang);
//echo '<pre>',print_r($mang),'</pre>';
//echo $mang[3][3][3][0][1];
//echo '<pre>',print_r($mang2),'</pre>';
//echo count($mang2);
//is_array($mang);
//kiểm tra 1 key no da ton tai hay chua
//isset($mang[key]);
// them 1 phan tu moi vao mang
//$mang[key] = giatri can them;  ==>key tu tang
//cap nhat 1 phan tu cua mang
//$mang[key] = giatricapnhat;
//xoa 1 phan tu
// unset($mang[key])
function duyet($mang)
{
    foreach($mang as $key=>$value)
    {
        if(!is_array($value))
            echo $key.'=>'.$value.'<br>';
        else{
            duyet($value);
        }
    }
}
//duyet($mang);
$ma = "mã";
$ten = "ten";
$sl = "so luong";
$test = [$ma,[$ten,$sl]];

echo $test[1][1];
?>