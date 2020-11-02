
<?php


echo 'Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.'.'<br><hr>';


if (isset($_POST['varEx2']) ):

  $n=(int)$_POST['varEx2'];
 
else: 

  $n=rand(0,15);

endif;

echo 'Переменная N = ' .$n .'<br>'; 
echo 'Результат: ';

switch ($n) {
  case 1:
    echo $n;
    break;
  case 2:
    echo $n;
    break;
  case 3:
    echo $n;
    break;
  case 4:
    echo $n;
    break;
  case 5:
    echo $n;
    break;
    case 6:
      echo $n;
      break;
    case 7:
      echo $n;
      break;
    case 8:
      echo $n;
      break;
    case 9:
      echo $n;
      break;
    case 10:
      echo $n;
      break;
    case 11:
        echo $n;
        break;
      case 12:
        echo $n;
        break;
      case 13:
        echo $n;
        break;
      case 14:
        echo $n;
        break;
      case 15:
        echo $n;
        break;
          
  default:
    echo 'Введите число от 0 до 15';
    break;
}


?>