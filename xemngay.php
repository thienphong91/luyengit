<?php 
if(isset($_GET['thang'])) {
  //kiem tra du lieu dau vao
  if(is_numeric($_GET['thang']))
  {
    switch($_GET['thang'])
    {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
          $ketqua = 'Tháng '.$_GET['thang'].' có 31 ngày';
          break;
        case 4:
        case 6:
        case 9:
        case 11:
          $ketqua = 'Tháng '.$_GET['thang'].' có 30 ngày';
          break;
        case 2:
          $ketqua = 'Tháng '.$_GET['thang'].' có 28 ngày';
          break;
        default:
        $thongbao = '<div class="alert alert-danger" role="alert">
        <strong>Dữ liệu không hợp lệ</strong>
      </div>';
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
          <label for="">Tháng</label>
          <input type="text" name="thang" id="" value="<?php echo $_GET['thang']??'' ?>" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <?php echo $ketqua??'' ?>
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