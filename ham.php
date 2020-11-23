<?php

/*
- Lỗi 1: Post data nhưng mà ông thiếu <form>ok
- Lỗi 2: Check dữ liệu mà ông ghi thiếu $_GET['B'] -> ông ghi ['B']
- Lỗi 3: ông chưa có gán giá trị cho biến $A và biến $B mà ông dùng nó để tính $sum như đúng rồi =)) 
ủa, cái name =" " là gán mà ta -> cái name xem nè 

trong <form> ông đặt name="foo" thì lúc lấy giá trị ông sẽ dùng name đó (tuỳ thuộc vào Method)
Form có 2 loại method là POST và GET -> tương ứng ôgn có giá trị $_GET và $_GET 

hiểu v trc đã. còn giờ nói tiếp: t thấy ông dùng $_GET để lấy giá trị nên t set cái form của ông là method : GET -> tại vi form method là GET thì ông ko có dùng $_GET mà lấy được. ngược lại cũng vậy

lấy giá trị trừ method GET: $_GET['tên biến']
lấy giá trị trừ method POST: $_POST['tên biến']

POST và GET 

form là post thì dùng $_POST này nói rồi nè 

ông dùng post thì nó ko có hiện thôgn tin mà ông submit 

*/

if(isset($_GET['A'], $_GET['B'])){
if(is_numeric($_GET['A']) && is_numeric($_GET['B'])){
    $sum =  $_GET['A'] + $_GET['B'];
}else{
    $alert = '<div class="alert alert-đanger" role="alert">
    <strong>Dữ liệu không hợp lệ</strong>
    </div>';
}
}


if(isset($_GET['C'], $_GET['D'])){
    if(is_numeric($_GET['C']) && is_numeric($_GET['D'])){
        $equa =  (-$_GET['D'])/$_GET['C'];
    }else{
        $alert = '<div class="alert alert-đanger" role="alert">
        <strong>Dữ liệu không hợp lệ</strong>
        </div>';
    }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <title>HomeWork</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php echo $alert??'' ?>
    <div class="container">
        <h1>Tính tổng 2 số a, b</h1>
        <form>
            <input type="number" name="A" value="<?php echo $_GET['A']??'' ?>" placeholder="Nhập số A"><br>
            <input type="number" name="B" value="<?php echo $_GET['B']??'' ?>" placeholder="Nhập số B">
            <button type="submit" class="btn btn-lg btn-primary">Tính</button>
        </form>
        <?php echo $sum??'' ?>
    </div>

    <div>
        <div class="container">
            <h3>Giải phương trình Cx + D = 0</h3>
            <form>
                <input type="number" name="C" value="<?php echo $_GET['C']??'' ?>" place holder="Nhập số C"><br>
                <input type="number" name="D" value="<?php echo $_GET['D']??'' ?>" place holder="Nhập số D">
                <button class="btn btn-lg btn-primary">Tính</button>
            </form>
            <?php echo $alert??'' ?>
            <?php echo $equa??'' ?>
        </div>
    </div>
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

