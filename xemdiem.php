<?php 
/*
xem ket qua hoc tap:
Đầu vào: 2 đầu vào : hk1, hk2
đầu ra: ket qua
        xep loai
        đtb
xử lý: xu ly theo yeu cau
*/
if(isset($_GET['hk1'],$_GET['hk2'])) {
  //kiem tra du lieu dau vao
  if(is_numeric($_GET['hk1']) && is_numeric($_GET['hk2']) 
  && $_GET['hk1']>=0 && $_GET['hk1']<=10 
  && $_GET['hk2']>=0 && $_GET['hk2']<=10)
  {
    $dtb = ($_GET['hk1']+$_GET['hk2']*2)/3;
    $dtb = round($dtb,2);
    if($dtb<=4)
    {
      $xeploai = 'Yếu';
      $ketqua ='Học lại';
    }else if($dtb<=6.4){
      $xeploai = 'Trung bình';
      $ketqua ='Lên lớp';
    }
    else if($dtb<=7.9){
      $xeploai = 'Khá';
      $ketqua ='Lên lớp';
    }else{
      $xeploai = 'Giỏi';
      $ketqua ='Lên lớp';
    }
  }else{
    $thongbao = '<div class="alert alert-danger" role="alert">
    <strong>Dữ liệu không hợp lệ</strong>
  </div>';
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <form class="container">     
        <?php echo $thongbao??'' ?>   
        <div class="form-group">
          <label for="">HK I</label>
          <input type="text" name="hk1" id="" value="<?php echo $_GET['hk1']??'' ?>" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group"> 
          <label for="">HK II</label>
          <input type="text" name="hk2" id="" value="<?php echo $_GET['hk2']??'' ?>" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">ĐTB</label>
          <input type="text" readonly  id="" value="<?php echo $dtb??''?>" class="form-control" placeholder="" aria-describedby="helpId">
        </div>     
        <div class="form-group">
          <label for="">Kết quả</label>
          <input type="text" readonly  id="" value="<?php echo $ketqua??''?>" class="form-control" placeholder="" aria-describedby="helpId">
        </div>     
        <div class="form-group">
          <label for="">Xếp loại</label>
          <input type="text" readonly  id="" value="<?php echo $xeploai??''?>" class="form-control" placeholder="" aria-describedby="helpId">
        </div>     
        <div class="form-group">
          <button class="btn btn-success">Xem</button>
        </div>
      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>