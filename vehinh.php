<table border="1" style="border-collapse:collapse;margin:auto" width="500">   
    <?php 
    for($r=1;$r<=8;$r++)
    {       
    ?>
    <tr>
        <?php for($c = 1;$c<=8;$c++){ 
            // if(($c+$r)%2==0)
            //     $mau= 'bgcolor="black"';
            // else
            //     $mau = '';
            $mau = (($c+$r)%2!=0)?'bgcolor="black"':'';
        ?>     
        <td <?=$mau ?> >&nbsp;&nbsp;</td>
        <?php } ?>
    </tr> 
    <?php } ?>
</table>

<?php 
//$a;
// $a = 546456; // 0  false, 1 true
// if($a) // $a != '' && $a != 0 && $a != null
// {
//     echo 'rong';
// }

?>