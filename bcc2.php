<?php 
// <div class="form-group">
// <h3>Kết quả</h3>
// <hr>
// <ul  class="bcc">
//   <li>1 x 1 = 1</li>
//   <li>1 x 1 = 1</li>
//   <li>1 x 1 = 1</li>
//   <li>1 x 1 = 1</li>
//   <li>1 x 1 = 1</li>
//   <li>1 x 1 = 1</li>
//   <li>1 x 1 = 1</li>
//   <li>1 x 1 = 1</li>
// </ul>
// <ul  class="bcc">
//   <li>1 x 1 = 1</li>
//   <li>1 x 1 = 1</li>
//   <li>1 x 1 = 1</li>
//   <li>1 x 1 = 1</li>
//   <li>1 x 1 = 1</li>
//   <li>1 x 1 = 1</li>
//   <li>1 x 1 = 1</li>
//   <li>1 x 1 = 1</li>
// </ul>        
// </div>
if(isset($_GET['tu'],$_GET['den'])) {
  //kiem tra du lieu dau vao
  if(is_numeric($_GET['tu']) && is_numeric($_GET['den'])  && $_GET['tu']>0  && $_GET['den']>=$_GET['tu'])
  {
       $kq = '<div class="form-group"><h3>Kết quả</h3><hr>';
      for($i=$_GET['tu'];$i<=$_GET['den'];$i++)
      {
       $kq .='<ul  class="bcc">';               
          for($j=1;$j<=10;$j++){
            $kq.='<li>'.$i.' x '.$j.' = '.($j*$i).'</li>';
          }
        $kq.='</ul>';
      }
        $kq.='</ul></div>';
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
    <title>Bảng cửu chương</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      .bcc{
        list-style: none;
        float: left;
        margin: 20px;
        padding: 0;
      }
    </style>
  </head>
  <body>
      <form class="container">     
        <?php echo $thongbao??'' ?>   
        <div class="form-group">
          <label for="">Bảng cửu chương</label>
          <div class="row">
            <div class="col-6">
              <label>Từ</label>
              <input type="text" name="tu" id="" value="<?php echo $_GET['tu']??'' ?>" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="col-6">
            <label>Đến</label>
              <input type="text" name="den" id="" value="<?php echo $_GET['den']??'' ?>" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
          </div>
        </div>
        <div class="form-group">
          <button class="btn btn-success">Xuất</button>
        </div>
        <?php echo $kq??''?>
      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>