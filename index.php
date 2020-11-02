<?php
$titleSite="Титул сайта";
$curDay = 'Сегодня ' .date("d.m.Y"); 
$curYear = date("Y");
$siteCompany="minimalistica";
$autorPage ='"Tsvetkov"';
$cdrPage ="utf-8";
$contentPage = '"Luka Cvrk (www.solucija.com)"';

$headerH1   ="Minimalistica. Exercises for PHP";
$post1H2    ="Урок 02. Упражнения.";
$post1Text  ='На страничке находится 7 карточек с упражнениями 2 урока. В главном меню,нажимая кнопку Обзор можно посмотреть обзор используемых в упражнениях конструкций. Чтобы вернуться к этому тексту нажмите кнопку Главная. Ниже расположены карточки упражнений, пронумерованные в соответствии с пунктами домашнего задания. Далее текст с кратким условием задания. Упражнения представляют собой небольшую вычислительную задачку, демонстрирующие использование определенных программных конструкций. Чтобы запустить упражнение введите исходные данные и нажмите кнопку Вычислить. Откроется страница с результатом вычислений. Чтобы вернуться назад, нажмите кнопку браузера Назад в виде стрелки влево.  ';

$scEx1 = 'z02_1.php';
$scEx2 = 'z02_2.php';
$scEx3 = 'z02_3.php';
$scEx4 = 'z02_4.php';
$scEx5 = '#';
$scEx6 = 'z02_6.php';
$scEx7 = 'z02_7.php';


$post2H3   ="Упражнение 1";
$post2Text ='Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения.
Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
ноль можно считать положительным числом. Введите 2 числа:';

$post3H3   ="Упражнение 2";
$post3Text ='Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.';

$post4H3   ="Упражнение 3";
$post4Text ='Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.';

$post5H3   ="Упражнение 4";
$post5Text ='Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).';
$post6H3   ="Упражнение 5";
$post6Text ='Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.';
$post7H3   ="Упражнение 6";
$post7Text ='С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.';

$post8H3   ="Упражнение 7";
$post8Text ='Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты <br> Если оставить поля пустыми и нажать кнопуку Вычислить, функция просклоняет текущее время.' ;



$post1H31   ='"Условный оператор IF ELSE"';
$post1Text1 ='Упражнение 1. Файл '.$scEx1.'. В упражнении 1 используется оператор условия if else. '; 

$post1H32   ='"Оператор выбора SWITCH"';
$post1Text2 ='"Упражнение 2. Файл '.$scEx2.'. В упражнении используется оператор выбора- switch. "';
            
$post1H33   ='"Использование функций"';
$post1Text3 ='"Упражнение 3. Файл '.$scEx3.'. В упражнении используется операторы if else, switch, функции. "';

$post1H34   ='"Арифметические операции"';
$post1Text4 ='"Упражнение 4. Файл '.$scEx4.'. В упражнении используется функция с тремя параметрами, операторы if else, switch, функция trim() - отсечение пробелов у строки. "';

$post1H35   ='"Дата год date()"';
$post1Text5 ='"Упражнение 5. Файл index.php. В упражнении используется функция даты date(), результат - это дата и год внизу страницы. "';

$post1H36   ='"Рекурсивная функция"';
$post1Text6 ='"Упражнение 6. Файл '.$scEx6.'. Рекурсивное возведение в степень. "';

$post1H37   ='"Склонение времени"';
$post1Text7 ='"Упражнение 7. Файл '.$scEx7.'. В упражнении реализованна функция склонения часов и минут. Если оставить поля пустыми и нажать кнопуку Вычислить, функция просклоняет текущее время. Вводимое время не ограничено  24 часами, можно вводить часы за несколько суток "';

$footerTextCR='Copyright &copy; <em>' .$siteCompany .'</em> &middot; Design: Luka Cvrk, <a href="http://www.solucija.com/" title="Free CSS Templates ">Solucija</a>' .' &middot; 1899-' .$curYear .'гг.';

$readMore="читать далее..";

$menuTopHome ="Главная";
$menuTopArch ="Архив";
$menuTopCont ="Контакты";
$menuTopOb   ='Обзор';
$menuTopF    = 'MenuTop(id)';
$menuTop     = '<ul id="menu">';
$menuTop    .="<li><a href=\"#\" id=\"goHome\" onclick=\"$menuTopF;\">$menuTopHome</a></li>" ; 
$menuTop    .="<li><a href=\"#\" id=\"goArch\" onclick=\"$menuTopF;\">$menuTopArch</a></li>" ; 
$menuTop    .="<li><a href=\"#\" id=\"goCont\" onclick=\"$menuTopF;\">$menuTopCont</a></li>" ; 
$menuTop    .="<li><a href=\"#\" id=\"goOb\" onclick=\"NextTip();\">$menuTopOb</a></li>" ; 
$menuTop    .= '</ul>';


$alert1=' Подождите или почитайте статьи в Обзоре! ';
$alert2=' Почитайте новые статьи в Обзоре! ';

$sc='<script type="text/javascript">
        i=0; curPost=0;
        
        function Post1(n){
           document.getElementById("post1Zg").innerHTML = tz[n];  
           document.getElementById("post1Tx").innerHTML = tx[n];
        }
        function MenuTop(el){
            if (el=="goHome") {alert("Перейти на главную? Вы уже на главной!'.$alert2 .'"+el);'. 'tz[0]="' .$post1H2 .'";'. 'tx[0]="' .$post1Text .'";' .' Post1(0);    document.getElementById("z3").style.fontWeight = "normal";}'.
            'if (el=="goArch") alert("Хотите перейти в архив? Он в разработке!'.$alert1 .' "+el);'.
            'if (el=="goCont") alert("Посмотреть контакты. Страница не доделанна!'.$alert1 .' "+el);'.
        '}
    
            function NextTip(){
               a = ["p2", "p3", "p4"];
               z = ["z2", "z3", "z4"];
               tx=["t1", "t2", "t3","t4", "t5", "t6","t7"];
               tz=["t1", "t2", "t3","t4", "t5", "t6","t7"];'.
               'tz[0]=' .$post1H31 .';'.     
               'tz[1]=' .$post1H32 .';'.     
               'tz[2]=' .$post1H33 .';'.     
               'tz[3]=' .$post1H34 .';'.     
               'tz[4]=' .$post1H35 .';'.     
               'tz[5]=' .$post1H36 .';'.     
               'tz[6]=' .$post1H37 .';'.
               'tx[0]="' .$post1Text1 .'";'.     
               'tx[1]=' .$post1Text2  .';'.     
               'tx[2]=' .$post1Text3  .';'.     
               'tx[3]=' .$post1Text4  .';'.     
               'tx[4]=' .$post1Text5  .';'.     
               'tx[5]=' .$post1Text6  .';'.     
               'tx[6]=' .$post1Text7 .';'.     
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
				<h2><a href="#" id="post1Zg"><?php echo $post1H2 ?></a></h2>
				<p class="info">posted 3 hours ago in <a href="#">general</a></p>
			</div>
			<div class="body">
				<p id="post1Tx"><?= $post1Text;?> </p>
                
			</div>
			<div class="x"></div>
		</div>
		
		<div class="col">
			<h3 id="z2"><a href="<?= $scEx1 ?>"><?php echo $post2H3 ?></a></h3> 
			<p id="p2"><?php echo $post2Text; ?></p>
			<form action="<?= $scEx1 ?>" method="post">
                     <p>Число 1: <input type="text" name="varA" /></p>
                     <p>Число 2: <input type="text" name="varB" /></p>
                      <p><input type="submit" value="Вычислить"/></p>
                </form>
            <p>&not; <a href="<?= $scEx1 ?>"><?= $readMore ?></a></p>

		</div>
		<div class="col">
			<h3 id="z3"><a href="<?= $scEx2 ?>"><?php echo $post3H3 ?></a></h3>
			<p id="p3"><?php echo $post3Text; ?></p>
            
            <form action="<?= $scEx2 ?>" method="post" >
                    <p>Число от 1 до 15: <input type="text" name="varEx2" /></p>
                     <p><input type="submit" value="Вычислить"/></p>
                </form>
			<p>&not; <a href="<?= $scEx2 ?>"><?= $readMore ?></a></p>
           
		</div>
		<div class="col last">
			<h3 id="z4"><a href="<?= $scEx3 ?>"><?php echo $post4H3 ?></a></h3>
			<p id="p4"><?php echo $post4Text; ?></p>
            <form action="<?= $scEx3 ?>" method="post">
                    <p>Число 1: <input type="text" name="var1Ex3" /></p>
                    <p>Число 2: <input type="text" name="var2Ex3" /></p>
                    <p>Операция (+-/*): <input type="text" name="var3Ex3" style="width:122px" /></p>
                     <p><input type="submit" value="Вычислить"/></p>
            </form>

			<p>&not; <a href="<?= $scEx3 ?>"><?= $readMore ?></a></p>
		</div>

        <div class="col" style="clear:both">
			<h3 id="z2"><a href="<?= $scEx4 ?>"><?php echo $post5H3 ?></a></h3> 
			<p id="p2"><?php echo $post5Text; ?></p>
            <form action="<?= $scEx4 ?>" method="post">
                    <p>Число 1: <input type="text" name="var1Ex4" /></p>
                    <p>Число 2: <input type="text" name="var2Ex4" /></p>
                    <p>Операция (+-/*): <input type="text" name="var3Ex4" style="width:122px"/></p>
                     <p><input type="submit" value="Вычислить"/></p>
            </form>
            <p>&not; <a href="<?= $scEx4 ?>"><?= $readMore ?></a></p>

		</div>
		<div class="col">
			<h3 id="z3"><a href="#footer"><?php echo $post6H3 ?></a></h3>
			<p id="p3"><?php echo $post6Text; ?></p>
            <form action="#footer" method="post">
                     <p><input type="submit" value="Посмотреть"/></p>
                </form>
			<p>&not; <a href="<?= $scEx5 ?>"><?= $readMore ?></a></p>
        </div>
        
		<div class="col last">
			<h3 id="z4"><a href="<?= $scEx6 ?>"><?php echo $post7H3 ?></a></h3>
			<p id="p4"><?php echo $post7Text; ?></p>
            <form action="<?= $scEx6 ?>" method="post">
                    <p>Число..: <input type="text" name="var1Ex6" /></p>
                    <p>Степень: <input type="text" name="var2Ex6" /></p>
                    <p><input type="submit" value="Вычислить"/></p>
            </form>

			<p>&not; <a href="<?= $scEx6 ?>"><?= $readMore ?></a></p>
		</div>

		<div class="col" style="clear:both">
			<h3 id="z4"><a href="<?= $scEx7 ?>"><?php echo $post8H3 ?></a></h3>
			<p id="p4"><?php echo $post8Text; ?></p>
            <form action="<?= $scEx7 ?>" method="post">
                    <p>Часы...: <input type="text" name="var1Ex7" /></p>
                    <p>Минуты: <input type="text" name="var2Ex7" /></p>
                     <p><input type="submit" value="Вычислить"/></p>
            </form>

			<p>&not; <a href="<?= $scEx7 ?>"><?= $readMore ?></a></p>
		</div>
		
		<div id="footer">
            <p id="td"><?php echo $curDay; ?> </p>
		      <p><?php echo $footerTextCR; ?></p>
		</div>	
	</div>
	
	
</body>
</html>
