
<?php


echo 'Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. То есть выглядеть должно так: for (…){ // здесь пусто}.';
echo '<hr>';

if (isset($_POST['var1Ex7']) && isset($_POST['var2Ex7'])) :

  $a = (int)$_POST['var1Ex7'];
  $b = (int)$_POST['var2Ex7'];

else :

  $a = 0;
  $b = 9;

endif;

echo 'Диапазон: '     . '<br>';
echo 'Начало c: ' . $a . '<br>';
echo 'Конец по: ' . $b . '<br>';
echo 'Результат: '    . '<br>';

//for ($i=0; $i < ; $i++) { 
//  # code...
//}

for ($i = $a; print $i . "\n", $i++ < $b;) {
};
?>