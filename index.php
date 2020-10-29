<?php
$titleSite="Титул сайта";
$curDay = 'Сегодня ' .date("d.m.Y"); 
$curYear = date("Y");
$siteCompany="minimalistica & partners";
$autorPage ='"author"';
$cdrPage ="utf-8";
$contentPage = '"Luka Cvrk (www.solucija.com)"';

$headerH1   ="Minimalistica newspaper";
$post1H2   ="Nunc commodo euismod massa quis vestibulum";
$post1Text ='Nunc eget nunc libero. Nunc commodo euismod massa quis vestibulum. Proin mi nibh, dignissim a pellentesque at, ultricies sit amet sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel lorem eu libero laoreet facilisis. Aenean placerat, ligula quis placerat iaculis, mi magna luctus nibh, adipiscing pretium erat neque vitae augue. Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at ipsum.';

$post2H3   ="Ut enim risus rhoncus 1";

$post2Text ='Текст 1 Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.';

$post3H3   ="Maecenas iaculis leo 2";
$post3Text ='Текст 2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non repellendus, voluptate soluta temporibus, cupiditate ad voluptatum quaerat laborum iusto veritatis nemo qui. Et modi quisquam dolores voluptatibus, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non repellendus, voluptate soluta temporibus, cupiditate ad vol placeat minima culpa!';

$post4H3   ="Quisque consectetur odio 3";
$post4Text ='Текст 3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non repellendus, voluptate soluta temporibus, cupiditate ad voluptatum quaerat laborum iusto veritatis nemo qui. Et modi quisquam dolores voluptatibus, placeat minima culpa!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non repellendus, voluptate soluta temporibus, cupiditate ad voluptatum quaerat laborum iusto veritatis nemo qui. Et modi quisquam dolores voluptatibus, placeat minima culpa!';

$post1H31   ='"Статья 111. Lorem Ipsum dolor sit amet."';
$post1Text1 ='"Lorem ipsum dolor 11111 sit amet, consectetur adipisicing elit. Esse assumenda eaque adipisci, atque est illo, fuga eligendi, laborum officia modi fugit, asperiores nisi sit blanditiis temporibus accusamus cumque. Dolor eos, repudi andae nam quis dolores eligendi perspiciatis tempora consectetur impedit? Iusto!"';
  
$post1H32   ='"Статья 222. Lorem ipsum sit, consectetur."';
$post1Text2 ='"Lorem ipsum dolor 22222 sit amet, consectetur adipisicing elit. Blanditiis quis rem quae recusandae doloremque eveniet laudantium alias corporis similique culpa maxime, iure cum in eos facere pariatur id fugit nemo. alias corporis similique culpa maxime, iure cum in eos facere pariatur id fugit nemo."';
            
$post1H33   ='"Статья 333. Lorem ipsum, adipisicing."';
$post1Text3 ='"Lorem ipsum dolor 33333 sit amet, consectetur adipisicing elit. Ipsa deserunt dolor omnis quo culpa quasi earum accusantium ad. Sint illum, debitis doloribus. Commodi enim dignissimos, labore quae quasi sed voluptas, nihil. Asperiores accusantium incidunt magnam alias temporibus, enim atque earum nemo perferendis quis. Autem, sit. Quia perspiciatis sed voluptate quod."';

$footerTextCR='Copyright &copy; <em>' .$siteCompany .'</em> &middot; Design: Luka Cvrk, <a href="http://www.solucija.com/" title="Free CSS Templates ">Solucija</a>' .' &middot; 1899-' .$curYear .'гг.';

$readMore="читать далее..";

$menuTopHome ="Главная";
$menuTopArch ="Архив";
$menuTopCont ="Контакты";
$menuTopOb ='Обзор';
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
               tx=["t1", "t2", "t3"];
               tz=["t1", "t2", "t3"];'.
               'tz[0]=' .$post1H31 .';'.     
               'tz[1]=' .$post1H32 .';'.     
               'tz[2]=' .$post1H33 .';'.     
               'tx[0]=' .$post1Text1 .';'.     
               'tx[1]=' .$post1Text2  .';'.     
               'tx[2]=' .$post1Text3 .';'.     
               'var t0=document.getElementById(a[0]).innerHTML;
               var z0=document.getElementById(z[0]).innerHTML;
               for (let v of a) {
                   j=i+1; if (j>2) {j=0;} 
                   var t = document.getElementById(a[j]).innerHTML;
                   var h = document.getElementById(z[j]).innerHTML;
                   document.getElementById(a[i]).innerHTML = t;  
                   document.getElementById(z[i]).innerHTML = h;  
                   if (z[i]=="z3") document.getElementById(z[i]).style.fontWeight = "bold";
                   i=i+1; if (i>2) i=0;
               }
                   document.getElementById(a[2]).innerHTML = t0;  
                   document.getElementById(z[2]).innerHTML = z0;
                   Post1(curPost);
                   curPost=curPost+1; if (curPost>2) curPost=0;
        }
    </script>';
?>

<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">-->
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->

<!DOCTYPE html>
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
				<p id="post1Tx"><?php echo $post1Text; ?></p>
			</div>
			<div class="x"></div>
		</div>
		
		<div class="col">
			<h3 id="z2"><a href="#"><?php echo $post2H3 ?></a></h3> 
			<p id="p2"><?php echo $post2Text; ?></p>
			<p>&not; <a href="#"><?= $readMore ?></a></p>
		</div>
		<div class="col">
			<h3 id="z3"><a href="#"><?php echo $post3H3 ?></a></h3>
			<p id="p3"><?php echo $post3Text; ?></p>
			<p>&not; <a href="#"><?= $readMore ?></a></p>
		</div>
		<div class="col last">
			<h3 id="z4"><a href="#"><?php echo $post4H3 ?></a></h3>
			<p id="p4"><?php echo $post4Text; ?></p>
			<p>&not; <a href="#"><?= $readMore ?></a></p>
		</div>
		
		<div id="footer">
            <p id="td"><?php echo $curDay; ?> </p>
		      <p><?php echo $footerTextCR; ?></p>
		</div>	
	</div>
	
	
</body>
</html>
