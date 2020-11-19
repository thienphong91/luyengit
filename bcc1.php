<?php 
if(isset($_GET['bcc'])) {
  if(is_numeric($_GET['bcc'])  && $_GET['bcc']>0 )
  {
    $kq = '<div class="form-group"><h3>Kết quả</h3><hr><ul style="list-style:none">';
    for($i=1;$i<=10;$i++){
      $kq.='<li>'.$_GET['bcc'].' x '.$i.' = '.($_GET['bcc']*$i).'</li>';
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form class="container">

        <div class="form-group">
            <label for="">Bảng cửu chương</label>
            <input type="text" name="bcc" id="" value="<?php echo $_GET['bcc']??'' ?>" class="form-control"
                placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <button class="btn btn-success">Xuất</button>
        </div>
        <?php echo $kq??''?>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>