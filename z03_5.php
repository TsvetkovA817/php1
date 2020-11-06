<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>



  <?php


  echo 'Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.' . '<br><hr>';

  $a = "";

  if (isset($_POST['var1Ex5'])) :

    $a = trim($_POST['var1Ex5']);

  else :

    $a = "Пустая строка";

  endif;

  if (empty($a)) $a = "Пустая строка";

  echo '<br><br>';
  echo 'Результат: '    . '<br><br>';

  $mres = replWB2DnP1($a);
  echo ($mres);
  echo '<br><br>';
  $mres = replWB2DnP2($a);
  echo ($mres);
  echo '<br><br>';
  $mres = replWB2DnP3($a);
  echo ($mres);
  //-------------------------

  function replWB2DnP1($s)
  {
    return str_replace(" ", "_", $s);
  }

  function replWB2DnP2($s)
  {

    $r = "";
    $ar = str_split($s);
    $c = count($ar);

    for ($i = 0; $i < $c; $i++) {
      if ($ar[$i] == " ") {
        $ar[$i] = '_';
      }
    }
    $r = implode($ar);
    return $r;
  }

  function replWB2DnP3($s)
  {
    $r = "";
    $ar = explode(" ", $s);
    $r = implode("_", $ar);
    return $r;
  }

  ?>

</body>

</html>