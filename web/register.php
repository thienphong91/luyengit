<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
//kiem tra co nho dang nhap hay khong
//doc du lieu txt thanh array de su dung trong php
function list_user($path)
{
    $data = [];
    //$f = fopen($path,'r') or die('Data error');
    if(file_exists($path))
    {
        $f = fopen($path,'r');
        while(!feof($f))
        {
            $s = trim(fgets($f));
            if($s)
            {
                $infouser = explode('|',$s);
                if(count($infouser)==4)
                {
                    $us = trim($infouser[1]);
                    //add user vao data
                    $data[$us] = [
                        'username'=>$us,
                        'password'=>trim($infouser[2]),
                        'name'=>trim($infouser[3]),
                        'avt'=>trim($infouser[0]),
                    ];
                }
            }    
        }
        fclose($f);
    }
    return $data;
}
function save($path,$data)
{   
    if($data)
    {
        $f = fopen($path,'w+');
        //tao chuoi noi dung can ghi tu cai data
        $content = '';
        foreach($data as $username=>$user)
        {
            $content.=$user['avt'].'|'.$username.'|'.$user['password'].'|'.$user['name']."\n";
        }
        $content = rtrim($content,"\n");
        fwrite($f,$content);
        fclose($f);
        return true;
    }
    return false;
}

//kiem tra coi dang nhap chua
if(isset($_SESSION['status_login']) && $_SESSION['status_login'] )
{
    header('location: profile.php');
    exit;
}
$thongbao = '';
if(isset($_POST['username'],$_POST['password']))
{
    $users = list_user('data/users.txt');
    ///var_dump($users);exit;
    $user  = $users[$_POST['username']]??[];
    if(!$user)
    {        
        $users[$_POST['username']] = [
            'username'=>$_POST['username'],
            'password'=>trim($_POST['password']),
            'name'=>trim($_POST['name']),
            'avt'=>trim($_POST['avatar']),
        ];
        if(save('data/users.txt',$users))            
            $thongbao = '<div class="alert alert-success">Đăng ký thành công</div>';
        else            
            $thongbao = '<div class="alert alert-danger">Quá trình đăng ký xảy ra lỗi</div>'; 
        //chuyen trang ve profile
        header('location: register.php');
        exit;
    }else{
        $thongbao = '<div class="alert alert-danger">Username đã tồn tại</div>'; 
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
    <form method="post" class="container">
        <div class="row">
        <div class="col-6 m-auto">
        <h3 class="text-center">Sign Up</h3>
        <?=$thongbao?>
        <div class="form-group">
            <label for="">Avatar</label>
            <input type="text" name="avatar" id="avatar" class="form-control" placeholder="" aria-describedby="helpId">            
        </div>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">            
        </div>
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="" aria-describedby="helpId">            
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">            
        </div>
        <div class="form-group text-right">
        <a href="login.php" class="btn btn-sm btn-danger">Sign In</a>           <input type="submit" class="btn btn-sm btn-success" value="Submit">            
        </div>
        </div>
        </div>
    </form>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>