<?php
if(isset($_GET['A'],$_GET['B'])){
    if(is_numeric($_GET['A']) && is_numeric($_GET['B']) && $_GET['A'] > 0 && $_GET['B']> $_GET['A'] ){
        for($i = $_GET['A'];$i <= $_GET['B']; $i++){
            for($j = 2; $j <= $i; $j++){
if($i%$j != 0){
     $kq = $i;
}
            }
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Số Nguyên tố</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form>
            <input type="number" name="A" value="<?php echo $_GET['A']??'' ?>">
            <input type="number" name="B" value="<?php echo $_GET['B']??'' ?>">
            <button type="submit" class="btn btn-lg btn-primary">Xuất</button>
        </form>
        <div>
            <h3>Các số nguyên tố có trong dãy số</h3>
            <?php echo $kq??'' ?>
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