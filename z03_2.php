
<?php


echo 'С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
  0 – ноль.
  1 – нечетное число.
  2 – четное число.
  3 – нечетное число.'.'<br><hr>';


if (isset($_POST['var1Ex2']) && isset($_POST['var2Ex2'])):

  $a=(int)$_POST['var1Ex2'];
  $b=(int)$_POST['var2Ex2'];
 
else: 

  $a=0;
  $b=10;

endif;

echo 'Диапазон: '     .'<br>'; 
echo 'Начало c: ' .$a .'<br>'; 
echo 'Конец по: ' .$b .'<br>';
echo 'Результат: '    .'<br>';

$i=$a;
do {
    if     ($i ==0)    {echo $i .' - ноль. <br>';}
    elseif ($i % 2==0) {echo $i .' - четное число. <br>';}
    else   { echo $i .' - нечетное число. <br>'; }
    $i++;
} while ($i <= $b);


?>