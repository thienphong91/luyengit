<?php 
session_start();
function xemmang($ar)
{
  echo '<pre>',print_r($ar),'</pre>';
}
$mang =  array(
		'sp001' => array('ten' => 'Canon MTL-24323','don_gia' => 10000000, 	'so_luong' => 1, 'thanh_tien' => 10000000),
		'sp002' => array('ten' => 'SamSung ML-1640','don_gia' => 15000000, 	'so_luong' => 2, 'thanh_tien' => 30000000),
		'sp003' => array('ten' => 'HP ATE Lide 100','don_gia' => 17000000, 	'so_luong' => 1, 'thanh_tien' => 17000000),
		'sp004' => array('ten' => 'Canon Scanner A','don_gia' => 20000000, 	'so_luong' => 1, 'thanh_tien' => 20000000),	
    'sp014' => array('ten' => 'Canon Scanner Lide 100', 'don_gia' => 234234, 	'so_luong' => 1, 'thanh_tien' => 20000000),
    'sp015' => array('ten' => 'Canon Scanner Lide 100', 'don_gia' => 234234, 	'so_luong' => 1, 'thanh_tien' => 20000000)
  );
  function them($ma,$ten,$gia,$soluong,&$mang)
  {
    if(!isset($mang[$ma])){
      $mang[$ma] = array('ten' => $ten,'don_gia' => $gia,'so_luong' =>$soluong,'thanh_tien' => $gia*$soluong);
    }
    else {
      echo 'Ma da co';
    }
   // xemmang($mang);
  }
  function sua($ma,$soluong,&$mang)
  {
    if(isset($mang[$ma])){
      $mang[$ma]['so_luong'] = $soluong;
      $mang[$ma]['thanh_tien'] = $soluong * $mang[$ma]['don_gia'];
    }
    else {
      echo 'Ma chua co';
    }
  }
  function xoa($ma,&$mang)
  {
    if(isset($mang[$ma])){
      unset($mang[$ma]);
    }
    else {
      echo 'Ma chua co';
    }
  }
 
  //su dung
  if(isset($_POST['hanhdong']))
  {
      switch($_POST['hanhdong'])
      {
        case 'Thêm':
            them($_POST['ma'],$_POST['ten'],$_POST['don_gia'],$_POST['so_luong'],$mang);
         //   xemmang($mang);
            break;
          case 'Sửa':
            sua($_POST['ma'],$_POST['so_luong'],$mang);
            break;
          case 'Xóa':
            xoa($_POST['ma'],$mang);
            break;
      }
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bài tập</title>
<style type="text/css">
table.bang {
	width:700px;
	border-collapse:collapse;
}
table.bang td{
	padding:3px;
}
table.bang tr.header{
	background-color:#69F;
	color:#F00;
}
</style>
</head>

<body>
<table class="bang" align="center" border="1" cellspacing="0" cellpadding="2">
<tr class="header" align="center">
  <td>Mã</td>
  <td>Tên</td>
  <td>Đơn Giá(VNĐ)</td>
  <td>Số Lượng</td>
  <td>Thành Tiền(VNĐ)</td>
</tr>
<?php 
$tong = 0;
foreach($mang as $masp=>$sapham){ 
  $tong += $sapham['thanh_tien'];
  ?>
    <tr align="center">
    <td><?=$masp?></td>
    <td align="left"><?=$sapham['ten']?></td>
    <td align="right"><?=number_format($sapham['don_gia'],0,'.','.')?></td>
    <td><?=number_format($sapham['so_luong'])?></td>
    <td align="right"><?=number_format($sapham['thanh_tien'])?></td>
  </tr>
<?php } ?>
	    <tr align="right">
    <td colspan="5">Tổng cộng: <?=number_format($tong)?></td>
  </tr>
</table>
<div style="margin-top:10px">
	<form action="" method="post" >
		<table class="bang" align="center" border="1" cellspacing="0" cellpadding="2">
			<tr>
				<td>Mã SP</td>
				<td>Tên sản phẩm</td>
				<td>Đơn giá</td>
				<td>Số Lượng</td>
			</tr>
			<tr>
				<td><input type="text" name="ma" /></td>
				<td><input type="text" name="ten" /></td>
				<td><input type="text" name="don_gia" /></td>
				<td><input type="text" name="so_luong" />
                <input type="hidden" name="mang_an" value="" />
                </td>
			</tr>
			<tr>
				<td colspan="4" align="center">
				<input type="submit" name="hanhdong"  value="Thêm"/>
				<input type="submit" name="hanhdong"  value="Sửa"/>
				<input type="submit" name="hanhdong" value="Xóa" />
			</td>
			</tr>
		</table>
	</form>

</div> 
</body>
</html>