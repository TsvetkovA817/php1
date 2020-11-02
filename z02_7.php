
<?php


echo 'Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты'.'<br><hr>';

$a=0;
$b=0;
$c='Время не указанно';
$okCalc=false;
$r="";


if (isset($_POST['var1Ex7']) && isset($_POST['var2Ex7']) ):
  
  if(is_numeric(trim($_POST['var1Ex7'])) && is_numeric(trim($_POST['var2Ex7']))){
    $a=(int)$_POST['var1Ex7'];
    $b=(int)$_POST['var2Ex7'];
    $okCalc=true; $c='Просклонять указанное время';
  }
  else { $c='Текущее время'; $a=0; $b=0; $okCalc=false; }
  
  if($a==0 && $b==0 && !$okCalc) {$a=(int)date("H");$b=(int)date("i"); $okCalc=true;}

endif;


if ($okCalc):
   $r = Skl($a, $b);
endif;

  echo 'Часы = ' .$a .'<br>'; 
  echo 'Минуты = ' .$b .'<br>';
  echo 'Операция  ：' .$c .'<br>';
  echo 'Результат : ';
  echo $r .'<br>';

//---------------------------------------

function Skl($ch, $mn)
{
 
  $mch = "ч.";
  $mmn = "м.";
  
  if(Pdg($ch)=='e') $mch = "час";
  if(Pdg($mn)=='e') $mmn = "минута";

  if(Pdg($ch)=='r') $mch = "часа";
  if(Pdg($mn)=='r') $mmn = "минуты";
  
  if(Pdg($ch)=='p') $mch = "часов";
  if(Pdg($mn)=='p') $mmn = "минут";

  $ret= $ch.' '.$mch.' '.$mn .' '.$mmn;

return ($ret);

}


function Pdg($n){
  $mret='no';
  $p  = $n % 10;
  $pp = $n % 100;
  if ($p == 1)  $mret='e';
  if ($p > 1 && $p < 5) $mret='r';
  if ($p >= 5 && $p < 10) $mret= "p";
  if ($p == 0 ||  ($pp>=11 && $pp<=14)) $mret = "p";
  return $mret;
}

?>

