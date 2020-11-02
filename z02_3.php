
<?php


echo 'Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.'.'<br><hr>';

$a=0.0;
$b=0.0;
$c='Операция не заданна';
$okCalc=false;
$r=0.0;


if (isset($_POST['var1Ex3']) && isset($_POST['var2Ex3']) && isset($_POST['var3Ex3'])):
  
  $c= trim($_POST['var3Ex3']);

  if(is_numeric(trim($_POST['var1Ex3'])) && is_numeric(trim($_POST['var2Ex3']))){
    $a=(double)$_POST['var1Ex3'];
    $b=(double)$_POST['var2Ex3']; }
  else { $c='Не допустимые операнды'; $okCalc=false; }
  
  if ($c=='+' || $c=='-' || $c=='*' || $c=='/')  $okCalc=true;
  else { $c='Не допустимая операция'; $okCalc=false; }

endif;


if ($okCalc):

  switch ($c) {
    case '+':
        $r=Sum2($a,$b);
        $c='A плюс B';
      break;
      case '-':
        $r=Vic2($a,$b);
        $c='A минус B';
       break;
       case '*':
        $r=Mul2($a,$b);
        $c='A умножить на B';
       break;
       case '/':
        $r=Dlt2($a,$b);
        $c='A делим на B';
       break;       
  }

endif;

  echo 'Переменная A = ' .$a .'<br>'; 
  echo 'Переменная B = ' .$b .'<br>';
  echo 'Операция  ：' .$c .'<br>';
  echo 'Результат : ';
  echo $r .'<br>';



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

