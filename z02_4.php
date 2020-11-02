
<?php


echo ' Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch). Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).'.'<br><hr>';

$a=0.0;
$b=0.0;
$c='Операция не указанна';
$okCalc=false;
$r=0.0;


if (isset($_POST['var1Ex4']) && isset($_POST['var2Ex4']) && isset($_POST['var3Ex4'])):
  
  $c= trim($_POST['var3Ex4']);

  if(is_numeric(trim($_POST['var1Ex4'])) && is_numeric(trim($_POST['var2Ex4']))){
    $a=(double)$_POST['var1Ex4'];
    $b=(double)$_POST['var2Ex4']; }
  else { $c='Не допустимые операнды'; $okCalc=false; }
  
  if ($c=='+' || $c=='-' || $c=='*' || $c=='/')  $okCalc=true;
  else { $c='Не допустимая операция'; $okCalc=false; }

endif;


if ($okCalc):

  $r = mathOperation($a, $b, $c);
  
endif;

  echo 'Переменная A = ' .$a .'<br>'; 
  echo 'Переменная B = ' .$b .'<br>';
  echo 'Операция  ：' .$c .'<br>';
  echo 'Результат : ';
  echo $r .'<br>';



function mathOperation($arg1, $arg2, $operation)
{

  switch ($operation) {
    case '+':
        $r=Sum2($arg1,$arg2);
        $c='A плюс B';
      break;
      case '-':
        $r=Vic2($arg1,$arg2);
        $c='A минус B';
       break;
       case '*':
        $r=Mul2($arg1,$arg2);
        $c='A умножить на B';
       break;
       case '/':
        $r=Dlt2($arg1,$arg2);
        $c='A делим на B';
       break;       
  }
return $r;
}


function Sum2($x, $y)
{
   return ($x + $y);
}

function Vic2($x, $y)
{
   return ($x - $y);
}

function Mul2($x, $y)
{
   return ($x * $y);
}

function Dlt2($x, $y)
{
   settype($x, "double");
   settype($y, "double");
  return ($x / $y);
}

?>

