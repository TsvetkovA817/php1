
<?php


echo 'Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».' . '<br><hr>';


if (isset($_POST['var1Ex8'])) :

  $a = mb_strtolower(trim($_POST['var1Ex8']));

else :

  $a = "";

endif;

echo (!empty($a) ? 'Фильтр：' . $a : 'Фильтр：Не задан, выводится все');

echo '<br><br>';
echo 'Результат: '    . '<br><br>';

$mAr = ['Московская область' => ['Москва', 'Зеленоград', 'Клин'], 'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт']];

foreach ($mAr as $key => $value) {
  foreach ($value as $key => $value) {
    if (empty($a) || mb_strtolower(mb_substr($value, 0, mb_strlen($a))) == $a) {
      echo $value . '<br>';
    }
  }
  //}
}


?>