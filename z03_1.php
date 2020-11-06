
<?php


echo 'С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.'.'<br><hr>';


if (isset($_POST['var1Ex1']) && isset($_POST['var2Ex1'])):

  $a=(int)$_POST['var1Ex1'];
  $b=(int)$_POST['var2Ex1'];
 
else: 

  $a=0;
  $b=100;

endif;

echo 'Начало c: ' .$a .'<br>'; 
echo 'Конец по: ' .$b .'<br>';
echo 'Результат: '.'<br>';

$i=$a;
while ($i <= $b) {
  if($i % 3==0) {echo $i .'<br>';}
  $i++;
}

?>