<?php

date_default_timezone_set('Asia/Ho_Chi_Minh');
$file = $_FILES;
$time = time();

function name($time){
$today = date('d/m/Y - H:i:s');
$trim = str_replace('/','',$today);
$name = str_replace(':','',$trim);
return $name;
}
function ext($file){
$name = $file['file']['name'];
$ext = end(explode(".",$name));
return $ext;
}

function upload($file){
  $time = time();
    $tmp = $file['file']['tmp_name'];
    $size = $file['file']['size'];
    $type = $file['file']['type'];
    $name = name($time).'.'.ext($file);
    if($size > 5242880){
      echo 'Dữ liệu quá lớn';
    }else{
     move_uploaded_file($tmp,"data/".$name);
     $report = 'Upload thành công<br/>';
     $report .= 'Path: Data/'.$name.'<br/>';
     $report .= 'Dung lượng:'.round(($size/1024),2).'kb';
     }
}
if(isset($_POST['upload'])){
upload($file);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>test</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
  <form method="post" class="container" enctype="multipart/form-data">
          <div class="form-group">
           <input type="file" name="file" class="form-control-file" >
          </div>
          <div class="form-group">
           <input type="text" name="text" class="form-control">
        </div>
        <div>
        <input type="submit" name="upload" class="btn btn-sm btn-success" value="Upload">
        </div>
        <div>
        <?php echo $report??'' ?>
        </div>
      </form>
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
