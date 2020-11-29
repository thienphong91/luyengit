<?php 
$ma = $_POST['ma'];
$ten = $_POST['ten'];
$gia = $_POST['gia'];
$sl = $_POST['sl'];
$mang = [$ma,[$ten,$gia,$sl]];
// tính Thành tiền
function thanhtien($gia,$sl){
  if(is_numeric($gia) && is_numeric($sl)){
  return $gia*$sl;
  }}
// nhập mã, tên, đơn giá, số lượng
$nhap ='</tr><tr align="center"><td>';
$nhap .= $ma;
$nhap .= '</td><td align="left">';
$nhap .= $ten;
$nhap .= '</td><td align="right">';
$nhap .= $gia;
$nhap .= '</td><td>';
$nhap .= $sl;
$nhap .= '</td><td align="right">';
$nhap .= thanhtien($gia,$sl);
$nhap .= '</td></tr>';
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bài tập</title>
    <style type="text/css">
    table.bang {
        width: 700px;
        border-collapse: collapse;
    }

    table.bang td {
        padding: 3px;
    }

    table.bang tr.header {
        background-color: #69F;
        color: #F00;
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
        <?php echo $nhap??'' ?>
        <tr align="right">
            <td colspan="5">Tổng cộng: 97,000,000</td>
        </tr>
    </table>
    <div style="margin-top:10px">
        <form action="" method="post">
            <table class="bang" align="center" border="1" cellspacing="0" cellpadding="2">
                <tr>
                    <td>Mã SP</td>
                    <td>Tên sản phẩm</td>
                    <td>Đơn giá</td>
                    <td>Số Lượng</td>
                </tr>
                <tr>
                    <td><input type="text" name="ma" value="<?php echo $_POST['ma']??''?>" /></td>
                    <td><input type="text" name="ten" value="<?php echo $_POST['ten']??''?>" /></td>
                    <td><input type="text" name="gia" value="<?php echo $_POST['gia']??''?>" /></td>
                    <td><input type="text" name="sl" value="<?php echo $_POST['sl']??''?>" />
                        <input type="hidden" name="mang_an" value="" />
                    </td>
                </tr>
                <tr>
                    <td colspan="4" align="center">
                        <input type="submit" name="hanhdong" value="Thêm" />
                        <input type="submit" name="hanhdong" value="Sửa" />
                        <input type="submit" name="hanhdong" value="Xóa" />
                    </td>
                </tr>
            </table>
        </form>

    </div>
</body>

</html>