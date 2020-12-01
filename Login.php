<?php
session_start();
//nếu có session tự động chuyển trang profile
if(!empty($_SESSION['user'])) {
    header("location:Profile.php");}

// Nếu chưa có session, kiểm tra khi ấn nút login    
elseif(isset($_POST['login'])){ 
  $username = $_POST['user']??'';
  $password = $_POST['pass']??'';
    
// Check username, password
  if($username == 'admin' && $password == '123'){
     header("location:Profile.php");

     // Kiểm tra checkbox, lưu session khi checkbox đã được check
    if(isset($_POST['check']) && $_POST['check'] == 'yes'){
      $_SESSION['user'] = $username;
    }
  }else{
    echo 'Sai tên đăng nhập hoặc mật khẩu';
  }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Đăng nhập</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <form action="Login.php" method="POST">
            <a> User Name :</a>
            <input type="text" name="user" class="form-control" placeholder="User Name">
            <a> Password :</a>
            <input type="Password" name="pass" class="form-control" placeholder="Password">
            <input type="checkbox" name="check" value="yes"> <a>Nhớ mật khẩu</a><br>
            <button type="submit" name="login"  class="btn btn-md btn-primary mt-2">Đăng nhập</button>
          </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>