<?php
if(isset($_GET['A']),($_GET['B'])){
    if(is_numeric($_GET['A']) && is_numeric($_GET['B']) $$ $_GET['A'] > 0 && $_GET['B'] >0 ){
        
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Cuu Chuong</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div>
        <?php echo $aler??'' ?>
    </div>
    <div class="container mt-5">
        <form>
            <input type="number" name="A" value="<?php echo $_GET['A']??'' ?>" placeholder="Nhap so A">
            <input type="number" name="B" value="<?php echo $_GET['B']??'' ?>" placeholder="Nhap so B"><br>
            <div class="text-left">
                <button class="btn btn-lg btn-primary">Xuat</button>
            </div>
        </form>
        <hr size="5" color="black">
        <?php echo $kq??'' ?>
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