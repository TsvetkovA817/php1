
<?php


echo 'В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.' . '<br><hr>';


if (isset($_POST['var1Ex6']) && isset($_POST['var2Ex6'])) :

  $a = (int)$_POST['var1Ex6'];
  $b = (int)$_POST['var2Ex6'];

else :

  $a = 0;
  $b = 0;

endif;

if ($a == 0 || $b == 0) {
  $a = 0;
  $b = 0;
}

if ($a > 0) {
  echo 'Указан размер списка: '     . '<br>';
  echo 'Кол-во элементов li: ' . $a . '<br>';
  echo 'Кол-во заполненных элементов li:' . $b . '<br>';
  echo '<br> Результат: <br><br>';
}
$ar11 = array(
  array(1, "Main", 0),
  array(2, "Uslugi", 0),
  array(3, "About", 0),
  array(4, "Work1", 2),
  array(5, "Work2", 2),
  array(6, "Work3", 2),
  array(7, "Tarif1", 4),
  array(8, "Tarif2", 4),
  array(9, "Tarif3", 4),
  array(10, "Tarif2", 4),
  array(11, "Site1", 5),
  array(12, "Site2", 5),
  array(13, "Site3", 5),
  array(14, "Test1", 6),
  array(15, "Test2", 6),
  array(16, "About1", 3),
  array(17, "About2", 3),
);

$ar11[] =  array(18, "About3", 3);

$ar22 = array(
  array(1, "Main", 0),
  array(2, "Uslugi", 0),
  array(3, "MainWork1", 1),
  array(4, "MainWork2", 1),
  array(5, "UslugiTarif1", 2),
  array(6, "UslugiTarif2", 2),
  array(7, "Work2Tarif1", 4),
  array(8, "Work2Tarif2", 4),
  array(9, "Work2Tarif3", 4),

);


//var_dump($ar22);
//echo '<br><br>';


function CountParent($ar, $val)
{
  $k = 0;
  for ($i = 0; $i < count($ar); $i++) {
    if ($ar[$i][2] == $val) {
      $k = $k + 1;
    }
  }
  return $k;
}

$c = count($ar);
$level = 0;

function out1($parent_id, $level, $c, $ar)
{
  if ($level > 100) return;
  $level = $level + 1;
  $level = $level + 1;
  for ($i = 0; $i < $c; $i++) {
    if ($ar[$i][2] == $parent_id) {
      echo '<div style="margin-left:' . ($level * 30) . 'px;">' . $ar[$i][1] . '</div>';
      out1($ar[$i][0], $level, $c, $ar);
    }
  }
}

$isUl1 = false;
$isUl2 = false;

$au1 = array();
$au2 = array();
$tekLev = 0;

function out2($parent_id, $level, $c, $ar, $au1, $au2, $isUl1, $isUl2)
{
  global $tekLev;

  if ($level > 500) return;
  $level = $level + 1;

  for ($i = 0; $i < $c; $i++) {
    if ($ar[$i][2] == $parent_id) {
      $mId = $ar[$i][0];
      $mItem = $ar[$i][1];
      $mParent = $ar[$i][2];
      $meli = "";
      $mk = CountParent($ar, $mId);
      if ($mk == 0) $meli = "</li>";
      else $meli = " <ul> ";
      $tekLev = $level;
      echo "<li>" . $ar[$i][1] . $meli;
      out2($ar[$i][0], $level, $c,  $ar, $au1, $au2, $isUl1, $isUl2);

      $mId = $ar[$i][0];
      $mItem = $ar[$i][1];
      $mParent = $ar[$i][2];
      $mlev = $level;
      $au2mlev = $au2[$mParent];
    } else {

      $mId = $ar[$i][0];
      $mItem = $ar[$i][1];
      $mParent = $ar[$i][2];
      $mlev = $level;
    }

    if ($level < $tekLev) {
      echo '</ul>';
      $tekLev = $level;
    }
  }
}

/*
echo '<ul>';
out2(0, 0, $c, $ar, $au1, $au2, $isUl1, $isUl2);
echo '</ul>';
*/


$level = 0;
$mid = 1;

function to1($c, $kl, $level, $mid)
{

  while ($level <= $kl) {

    for ($i = 1; $i <= $c; $i++) {
      $ar[] =  array($mid, "Item" . $mid . " li= " . $i . " PId= " . $level, $level);
      $mid = $mid + 1;
    }

    $level = $level + 1;
    to1($c, $kl, $level, $mid);
  }

  return $ar;
}


if ($a > 0) {
  // 3.2  3.3 3.4 3.6
  $ar2 = to1($a, $b, $level, $mid);
} else {
  $ar2 = $ar11;
}
//echo '<br>***********<br>';
//var_dump($ar2);
//echo '<br>*******<br><br>';

echo 'Печатный вид списка UL<br><br>';
$level = 0;
$c = count($ar2);
out1(0, 0, $c, $ar2);
echo '<br><br><br>';

///--------------------------
echo 'Формируем список UL<br><br>';
$isUl1 = false;
$isUl2 = false;

$au1 = array();
$au2 = array();
$tekLev = 0;
$c = count($ar2);
$level = 0;
echo '<ul>';
out2(0, 0, $c, $ar2, $au1, $au2, $isUl1, $isUl2);
echo '</ul>';


?>