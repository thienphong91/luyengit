<?php 
// vẽ hình tam giác
function tamgiac($canh){
for ($i = 0; $i <= $canh; $i++){
for ($j =1; $j <= $i; $j++){
    echo 'a';
}
echo '<br>';
}
}
// echo tamgiac(10);



//vẽ hình chữ nhật
function chunhat($dai,$cao){
for($i = 0; $i <= $cao; $i++){
    for($j = 1; $j <= $dai; $j++){
        echo "*";
    }
echo '<br>';
}
}
// echo chunhat(10,12);



// Bài 03: Viết một chương trình để in ra các số từ a đến b. Nhưng đối với các số chia hết cho 3 thì in ra chữ “Fizz” thay vì hiển thị số đó và đối với các số chia hết cho 5 thì in ra chữ “Buzz”. Đối với các số vừa chia hết cho 3 và 5 thì in ra chữ “FizzBuzz”.
function dayso($a,$b){
    $i =0;
    for ($i = $a; $i <= $b; $i++){
        if($i % 3 == 0 && $i % 5 != 0){
            echo 'FIZZ<br>';
        }elseif ($i % 5 == 0 && $i % 3 != 0){
            echo 'BUZZ<br>';
        }elseif ($i % 3 == 0 && $i % 5 == 0){
            echo 'FIZZBUZZ<br>';
        }else{
        echo $i.'<br>';
    }
}
}
    dayso(0,30);



// Giải phương trình bậc 2: ax2 + bx + c =0
?>