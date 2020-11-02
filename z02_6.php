
<?php


echo 'С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.'.'<br><hr>';

$a=0.0;
$b=0.0;
$c='Нет вычислений';
$okCalc=false;
$r=0.0;


if (isset($_POST['var1Ex6']) && isset($_POST['var2Ex6']) ):
  
  if(is_numeric(trim($_POST['var1Ex6'])) && is_numeric(trim($_POST['var2Ex6']))){
    $a=(double)$_POST['var1Ex6'];
    $b=(int)$_POST['var2Ex6'];
    $okCalc=true; }
  else { $c='Не допустимые операнды'; $okCalc=false; }
  
endif;


if ($okCalc):
  $r = power($a, $b);
  $c='Рекурсивное возведение в степень';
endif;

  echo 'Число = ' .$a .'<br>'; 
  echo 'Степень = ' .$b .'<br>';
  echo 'Операция  ：' .$c .'<br>';
  echo 'Результат : ';
  echo $r .'<br>';



function power($val, $pow)
{
  if ($pow == 1) return ($val);
  return ($val * power($val, $pow - 1));
}


?>

