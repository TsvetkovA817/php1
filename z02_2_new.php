
<?php


echo 'Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.'.'<br><hr>';


if (isset($_POST['varEx2']) ):

  $n=(int)$_POST['varEx2'];
 
else: 

  $n=rand(0,15);

endif;

echo 'Переменная N = ' .$n .'<br>'; 
echo 'Результат: '.'<br>';

$mmax=15;

switch ($n) {
        
  case 0:
    uv(0,$mmax);          
    break;
  case 1:
    uv(1,$mmax);          
    break;
  case 2:
    uv(2,$mmax);          
    break;
  case 3:
    uv(3,$mmax);          
    break;
  case 4:
    uv(4,$mmax);          
    break;
  case 5:
    uv(5,$mmax);          
    break;
   case 6:
    uv(6,$mmax);          
    break;
   case 7:
    uv(7,$mmax);          
      break;
   case 8:
    uv(8,$mmax);          
      break;
   case 9:
    uv(9,$mmax);          
      break;
   case 10:
    uv(10,$mmax);          
    break;
   case 11:
    uv(11,$mmax);          
        break;
   case 12:
    uv(12,$mmax);          
        break;
   case 13:
    uv(13,$mmax);          
        break;
   case 14:
    uv(14,$mmax);          
        break;
   case 15:
    uv(15,$mmax);          
        break;
          
  default:
    echo 'Введите число от 0 до 15';
    break;
}

  function uv($p,$mmax) {
    if($p>=$mmax+1) return;  
    echo  $p .'<br>';
    uv($p +1,$mmax);     // это вызываем на 1 меньше 
  }  


?>