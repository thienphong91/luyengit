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
    $alert = 'Sai tên đăng nhập hoặc mật khẩu';
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
<link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="alert">
      <h4><?php echo $alert??'' ?></h4>
    </div>
       <div class="login-box">
          <h1>Welcome</h1><br>
            <form action="login.php" method="POST">
            <div class="textbox">
              <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="user" placeholder="Username">
            </div>
            <div class="textbox mt-2">
              <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="Password" name="pass" placeholder="Password">
            </div>
            <input type="checkbox" name="check" value="yes"> <a>Remember Password</a><br>
            <button type="submit" name="login"  class="btn btn-md btn-primary mt-2">Login</button>
          </form>
      </div>
      
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>