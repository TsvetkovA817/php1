<?php
$titleSite = "Титул сайта";
$curDay = 'Сегодня ' . date("d.m.Y");
$curYear = date("Y");
$siteCompany = "minimalistica";
$autorPage = '"Tsvetkov"';
$cdrPage = "utf-8";
$contentPage = '"Luka Cvrk (www.solucija.com)"';

$headerH1   = "Minimalistica. Exercises for PHP";
$post0H2    = "Урок 03. Упражнения.";
$post0Text  = 'На странице находится 9 карточек с упражнениями 3 урока. В главном меню,нажимая кнопку Обзор можно посмотреть обзор используемых в упражнениях конструкций. Чтобы вернуться к этому тексту нажмите кнопку Главная. Ниже расположены карточки упражнений, пронумерованные в соответствии с пунктами домашнего задания. Далее текст с кратким условием задания. Упражнения представляют собой небольшую вычислительную задачку, демонстрирующие использование определенных программных конструкций. Чтобы запустить упражнение введите исходные данные и нажмите кнопку Выполнить. Откроется страница с результатом вычислений. Чтобы вернуться назад, нажмите кнопку браузера Назад в виде стрелки влево.  ';

$btnText1 = 'Выполнить';
$btnText2 = 'Вычислить';

$scEx1 = 'z03_1.php';
$btnTextEx1 = $btnText1;
$scEx2 = 'z03_2.php';
$btnTextEx2 = $btnText1;
$scEx3 = 'z03_3.php';
$btnTextEx3 = $btnText1;
$scEx4 = 'z03_4.php';
$btnTextEx4 = $btnText1;
$scEx5 = 'z03_5.php';
$btnTextEx5 = $btnText1;
$scEx6 = 'z03_6.php';
$btnTextEx6 = $btnText1;
$scEx7 = 'z03_7.php';
$btnTextEx7 = $btnText1;
$scEx8 = 'z03_8.php';
$btnTextEx8 = $btnText1;
$scEx9 = 'z03_9.php';
$btnTextEx9 = $btnText1;

$post1H3   = "Упражнение 1";
$post1Text = 'С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка. Здесь можно указать любой диапазон. Диапазон по умолчанию от 0 до 100';

$post2H3   = "Упражнение 2";
$post2Text = 'С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
    0 – ноль.
    1 – нечетное число.
    2 – четное число.
    3 – нечетное число.';

$post3H3   = "Упражнение 3";
$post3Text = 'Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
Московская область:
Москва, Зеленоград, Клин
Ленинградская область:
Санкт-Петербург, Всеволожск, Павловск, Кронштадт';

$post4H3   = "Упражнение 4";
$post4Text = 'Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк.';

$post5H3   = "Упражнение 5";
$post5Text = 'Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.';

$post6H3   = "Упражнение 6";
$post6Text = 'В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.<br><br>Если поле оставить пустым или нажать на заголовок или ссылку - выполнится пример по умолчанию. ';

$post7H3   = "Упражнение 7";
$post7Text = 'Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. То есть выглядеть должно так:
    for (…){ // здесь пусто}.';

$post8H3   = "Упражнение 8";
$post8Text = 'Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К». <br><br>Если поле оставить пустым или нажать на ссылку, заголовок - получим весь список городов.';

$post9H3   = "Упражнение 9";
$post9Text = 'Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах)..';


$post0H31   = '"Условный оператор IF ELSE"';
$post0Text1 = 'Упражнение 1. Файл ' . $scEx1 . '. В упражнении 1 используется оператор условия if else, массив, функция замены подстроки';

$post0H32   = '"Оператор цикла do…while"';
$post0Text2 = '"Упражнение 2. Файл ' . $scEx2 . '. В упражнении используется оператор цикла do…while "';

$post0H33   = '"Сложный массив"';
$post0Text3 = '"Упражнение 3. Файл ' . $scEx3 . '. В упражнении используется ассоциативный массив с вложенными массивом"';

$post0H34   = '"Транслитерация строк"';
$post0Text4 = '"Упражнение 4. Файл ' . $scEx4 . '. В упражнении используется массив, функция замены подстроки "';

$post0H35   = '"Замена символа"';
$post0Text5 = '"Упражнение 5. Файл ' . $scEx5 . '. В упражнении используется функция замены подстроки.  "';

$post0H36   = '"Рекурсивная функция"';
$post0Text6 = '"Упражнение 6. Файл ' . $scEx6 . '. Рекурсивное созтание массива с иерархией и вывод дерева в виде текста и списка"';

$post0H37   = '"Цикл for"';
$post0Text7 = '"Упражнение 7. Файл ' . $scEx7 . '. В упражнении используется операторы цикла "';

$footerTextCR = 'Copyright &copy; <em>' . $siteCompany . '</em> &middot; Design: Luka Cvrk, <a href="http://www.solucija.com/" title="Free CSS Templates ">Solucija</a>' . ' &middot; 1899-' . $curYear . 'гг.';

$readMore = "читать далее..";

$menuTopF    = 'MenuTop(id)';
/*
$menuTopHome = "Главная";
$menuTopArch = "Архив";
$menuTopCont = "Контакты";
$menuTopOb   = 'Обзор';

$menuTop     = '<ul id="menu">';
$menuTop    .= "<li><a href=\"#\" id=\"goHome\" onclick=\"$menuTopF;\">$menuTopHome</a></li>";
$menuTop    .= "<li><a href=\"#\" id=\"goArch\" onclick=\"$menuTopF;\">$menuTopArch</a></li>";
$menuTop    .= "<li><a href=\"#\" id=\"goCont\" onclick=\"$menuTopF;\">$menuTopCont</a></li>";
$menuTop    .= "<li><a href=\"#\" id=\"goOb\" onclick=\"NextTip();\">$menuTopOb</a></li>";
$menuTop    .= '</ul>';
*/
$arrMenuTexts = array();
$arrMenuItemID = array();
$arrMenuFn = array();

$arrMenuTexts[] = "Главная";
$arrMenuItemID[] = "goHome";
$arrMenuFn[] = $menuTopF;

$arrMenuTexts[] = "Архив";
$arrMenuItemID[] = "goArch";
$arrMenuFn[] = $menuTopF;

$arrMenuTexts[] = "Контакты";
$arrMenuItemID[] = "goCont";
$arrMenuFn[] = $menuTopF;

$arrMenuTexts[] = 'Обзор';
$arrMenuItemID[] = "goOb";
$arrMenuFn[] = 'NextTip()';

$menuTop     = '<ul id="menu">';
for ($i = 0; $i < count($arrMenuTexts); $i++) {
    $menuTop    .= "<li><a href=\"#\" id=\"$arrMenuItemID[$i]\" onclick=\"$arrMenuFn[$i];\">$arrMenuTexts[$i]</a></li>";
}
$menuTop    .= '</ul>';


$alert1 = ' Подождите или почитайте статьи в Обзоре! ';
$alert2 = ' Почитайте новые статьи в Обзоре! ';

$sc = '<script type="text/javascript">
        i=0; curPost=0;

        function Post1(n){
           document.getElementById("post0Zg").innerHTML = tz[n];
           document.getElementById("post0Tx").innerHTML = tx[n];
        }
        function MenuTop(el){
            if (el=="goHome") {alert("Перейти на главную? Вы уже на главной!' . $alert2 . '"+el);' . 'tz[0]="' . $post0H2 . '";' . 'tx[0]="' . $post0Text . '";' . ' Post1(0);    document.getElementById("z3").style.fontWeight = "normal";}' .
    'if (el=="goArch") alert("Хотите перейти в архив? Он в разработке!' . $alert1 . ' "+el);' .
    'if (el=="goCont") alert("Посмотреть контакты. Страница не доделанна!' . $alert1 . ' "+el);' .
    '}

            function NextTip(){
               a = ["p2", "p3", "p4"];
               z = ["z2", "z3", "z4"];
               tx=["t1", "t2", "t3","t4", "t5", "t6","t7"];
               tz=["t1", "t2", "t3","t4", "t5", "t6","t7"];' .
    'tz[0]=' . $post0H31 . ';' .
    'tz[1]=' . $post0H32 . ';' .
    'tz[2]=' . $post0H33 . ';' .
    'tz[3]=' . $post0H34 . ';' .
    'tz[4]=' . $post0H35 . ';' .
    'tz[5]=' . $post0H36 . ';' .
    'tz[6]=' . $post0H37 . ';' .
    'tx[0]="' . $post0Text1 . '";' .
    'tx[1]=' . $post0Text2  . ';' .
    'tx[2]=' . $post0Text3  . ';' .
    'tx[3]=' . $post0Text4  . ';' .
    'tx[4]=' . $post0Text5  . ';' .
    'tx[5]=' . $post0Text6  . ';' .
    'tx[6]=' . $post0Text7 . ';' .
    '
                   Post1(curPost);
                   curPost=curPost+1; if (curPost>6) curPost=0;
        }
    </script>';





?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- <!DOCTYPE html> -->

<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=<?php echo $cdrPage; ?>" />
    <meta name=<?php echo $autorPage; ?> content=<?php echo $contentPage; ?> />
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <title><?php echo $titleSite ?> </title>
    <?php echo $sc ?>
</head>

<body>
    <div id="content">
        <h1><?php echo $headerH1 ?> </h1>

        <?php echo $menuTop ?>

        <div class="post">
            <div class="details">
                <h2><a href="#" id="post0Zg"><?php echo $post0H2 ?></a></h2>
                <p class="info">posted 3 hours ago in <a href="#">general</a></p>
            </div>
            <div class="body">
                <p id="post0Tx"><?= $post0Text; ?> </p>

            </div>
            <div class="x"></div>
        </div>


      <?php

        $arrScEx[]=$scEx1;
        $arrScEx[]=$scEx2;
        $arrScEx[]=$scEx3;
        $arrScEx[]=$scEx4;
        $arrScEx[]=$scEx5;
        $arrScEx[]=$scEx6;
        $arrScEx[]=$scEx7;
        $arrScEx[]=$scEx8;
        $arrScEx[]=$scEx9;

        $arrPostH3[]=$post1H3;
        $arrPostH3[]=$post2H3;
        $arrPostH3[]=$post3H3;
        $arrPostH3[]=$post4H3;
        $arrPostH3[]=$post5H3;
        $arrPostH3[]=$post6H3;
        $arrPostH3[]=$post7H3;
        $arrPostH3[]=$post8H3;
        $arrPostH3[]=$post9H3;

        $arrPostText[]=$post1Text;
        $arrPostText[]=$post2Text;
        $arrPostText[]=$post3Text;
        $arrPostText[]=$post4Text;
        $arrPostText[]=$post5Text;
        $arrPostText[]=$post6Text;
        $arrPostText[]=$post7Text;
        $arrPostText[]=$post8Text;
        $arrPostText[]=$post9Text;

        $arrBtnText[]=$btnText1;
        $arrBtnText[]=$btnText1;
        $arrBtnText[]=$btnText1;
        $arrBtnText[]=$btnText1;
        $arrBtnText[]=$btnText1;
        $arrBtnText[]=$btnText1;
        $arrBtnText[]=$btnText1;
        $arrBtnText[]=$btnText1;
        $arrBtnText[]=$btnText1;


        $arrInput = array ( array(1,"c : " , 0,   'inp'),
                            array(1,"по: " , 100, 'inp'),
                            array(2,"c : " , 0,   'inp'),
                            array(2,"по: " , 10,     'inp'),
                            array(3,"Фильтр" ,0,     'ptx'),
                            array(3,"Область: " ,"", 'inp'),
                            array(4,"Строка: " ,"Пустая строка", 'inp'),
                            array(5,"Три способа реализации" ,0,     'ptx'),
                            array(5,"Строка: " ,"Пустая строка", 'inp'),
                            array(6,"Кол-во li: " ,3, 'inp'),
                            array(6,"Кол-во заполн.Li: " ,4, 'inp'),
                            array(7,"c : " , 0,   'inp'),
                            array(7,"по: " , 9,     'inp'),
                            array(8,"Фильтр" ,0,     'ptx'),
                            array(8,"Начало города: " ,"К", 'inp'),
                            array(9,"Строка: " ,"Пустая строка", 'inp'),

                          );


        function PutPosts2Brouser($co1L,$coAll,$arrScEx,$arrPostH3,$arrPostText, $coInput, $arrInput,  $arrBtnText, $readMore )
        {
           $s=array();
           for ($i=0; $i < $coAll; $i++) {

                $u=$i+1;
                $s0 = '<div class="';
                if ($i==0 || $u%$co1L==1) { $s0 .= 'col" style="clear:both">';}
                elseif ($i>0 && $u%$co1L==0) {$s0 .= 'col last">';}
                else {$s0 .= 'col">';}
                $s[] = $s0;

                $s[] = '<h3 id="z4"><a href="' .$arrScEx[$i] .'">' .$arrPostH3[$i] .'</a></h3>';
                $s[] = '<p id="p4">' .$arrPostText[$i] .'</p>';
                $s[] = '<form action="' .$arrScEx[$i] .'" method="post">';
                $s5 = '';
                $v=1;

                //var_dump($arrInput);
                foreach($arrInput as $key=>$value){    //key='Card' value=1
                     //echo $value[0].'-'.$value[1] .'<br>';
                     //echo ' i= ' .$i.'<br>';

                     if ($value[0]==$u) { $mar=$value[1];
                       switch ($value[3]) {
                            case 'ptx':
                                $s5 .= '<p>' .$value[1]  .'</p> ';
                                break;
                            case 'inp':
                                $s5 .= '<p>' .$value[1] .'<input type="text" name="var' .$v .'Ex' .$u .'" value="' .$value[2] .'"/></p> ';
                                $v++;
                                break;
                        }

                      };
                   };
                $s[] = $s5;

                $s[]='<p><input type="submit" value="' .$arrBtnText[$i] .'" /></p>';
                $s[]='<p>&not; <a href="' .$arrScEx[$i] .'">' .$readMore .'</a></p>';
                $s[]='</form>';
                $s[]='</div>';

            }

         return $s;
        }


        $s=PutPosts2Brouser(3,9,$arrScEx,$arrPostH3,$arrPostText, 2, $arrInput,  $arrBtnText, $readMore);

        foreach($s as $item) echo $item;

       ?>


        <div id="footer">
            <p id="td"><?php echo $curDay; ?> </p>
            <p><?php echo $footerTextCR; ?></p>
        </div>
    </div>


</body>

</html>