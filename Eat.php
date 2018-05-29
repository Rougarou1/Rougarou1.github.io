<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Расчет Калорий</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="fonts/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">	
		<div class="container"> 
			<div class="navbar-header">	
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
					<a class="navbar-brand" href="index.html">Warrior</a>

			</div>
				<div class="navbar-collapse collapse"> 
					<ul class="nav navbar-nav navbar-right">	<li class="active"><a href="index.php">Главная</a></li>
						<li><a href="Eat.php">Питание</a></li>
						<li><a href="sport.php">Спорт</a></li>
						<li><a href="#">Контакты</a></li>
						<li><a href="signup.php">Регистрация</a></li>
						<li><a href="registr.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>				
					</ul>

				</div>
		</div>
	</div>
<div id="eatwrap">	
			<div class="container">	
				<div class="row centered">	
					<div class="col-lg-8 col-lg-offset-2">	
						<h1>Сколько калорий в продуктах которые ты употребляешь?</h1>
						<h2>Расчитай на нашем сайте</h2>
					</div>
				</div>
			</div>
		</div>
		
	
	<div class="row centered">	
	<h1>Список продуктов</h1>
	</div>
	<div id="calc">	
			<div class="container">	
				<div class="row centered">
					
					<h1></h1>
	<h2>Медленные углеводы</h2>
	<p><input type="checkbox" data-kkal="366" data-protein="11.9" data-fats="7.2" data-carbs="69.3" class="menu"> Овсяные хлопья
		<select name="" id="Count" onchange="getResult()"> 

	<option selected value="" id="t1">100 грамм</option>
	<option value="" id="t2">200 грамм</option>
	<option value="" id="t3">300 грамм</option>
	<option value="" id="t4">400 грамм</option>
	<option value="" id="t5">500 грамм</option>
</select></p>
	<p><input type="checkbox" data-kkal="132" data-protein="4.5" data-fats="2.3" data-carbs="25" class="menu"> Гречневая каша
		<select name="" id="Count" onchange="getResult()"> 

	<option selected value="" id="t1">100 грамм</option>
	<option value="" id="t2">200 грамм</option>
	<option value="" id="t3">300 грамм</option>
	<option value="" id="t4">400 грамм</option>
	<option value="" id="t5">500 грамм</option></select></p>
	<p><input type="checkbox" data-kkal="316" data-protein="11.5" data-fats="1.3" data-carbs="62" class="menu"> Пшеничная крупа
		<select name="" id="Count" onchange="getResult()"> 

	<option selected value="" id="t1">100 грамм</option>
	<option value="" id="t2">200 грамм</option>
	<option value="" id="t3">300 грамм</option>
	<option value="" id="t4">400 грамм</option>
	<option value="" id="t5">500 грамм</option></select></p>
	<p><input type="checkbox" data-kkal="337" data-protein="7.4" data-fats="1.8" data-carbs="72.9" class="menu"> Рис бурый
		<select name="" id="Count" onchange="getResult()"> 

	<option selected value="" id="t1">100 грамм</option>
	<option value="" id="t2">200 грамм</option>
	<option value="" id="t3">300 грамм</option>
	<option value="" id="t4">400 грамм</option>
	<option value="" id=t5">500 грамм</option></select></p>
	<p><input type="checkbox" data-kkal="337" data-protein="10.4" data-fats="1.1" data-carbs="69.7" class="menu"> Макароны из твердых сортов пшеницы
		<select name="" id="Count" onchange="getResult()"> 

	<option selected value="" id="t1">100 грамм</option>
	<option value="" id="t2">200 грамм</option>
	<option value="" id="t3">300 грамм</option>
	<option value="" id="t4">400 грамм</option>
	<option value="" id="t5">500 грамм</option></select></p>
	<hr>
	<h2>Овощи</h2>
	<p><input type="checkbox" data-kkal="32" data-protein="1.3" data-fats="0.1" data-carbs="6.9" class="menu"> Морковь(100 грамм)</p>
	<p><input type="checkbox" data-kkal="27" data-protein="1.8" data-fats="0.1" data-carbs="4.7" class="menu"> Капуста(100 грамм)</p>
	<p><input type="checkbox" data-kkal="22" data-protein="2.9" data-fats="0.3" data-carbs="2" class="menu"> Шпинат(100 грамм)</p>
	<p><input type="checkbox" data-kkal="20" data-protein="1.1" data-fats="0.2" data-carbs="3.7" class="menu"> Помидоры(100 грамм)</p>
	<p><input type="checkbox" data-kkal="15" data-protein="0.8" data-fats="0.1" data-carbs="2.8" class="menu"> Огурцы(100 грамм)</p>
	<hr>
	<h2>Фрукты</h2>
	<p><input type="checkbox" data-kkal="47" data-protein="0.4" data-fats="0.4" data-carbs="9.8" class="menu"> Яблоко(100 грамм)</p>
	<p><input type="checkbox" data-kkal="29" data-protein="0.7" data-fats="0.2" data-carbs="6.5" class="menu"> Грейпфрут(100 грамм)</p>
	<p><input type="checkbox" data-kkal="36" data-protein="0.9" data-fats="0.2" data-carbs="8.1" class="menu"> Апельсин(100 грамм)</p>
	<p><input type="checkbox" data-kkal="95" data-protein="1.5" data-fats="0.2" data-carbs="21.8" class="menu"> Банан(100 грамм)</p>
	<p><input type="checkbox" data-kkal="44" data-protein="0.9" data-fats="0.1" data-carbs="9.0" class="menu"> Абрикос(100 грамм)</p>
	<h3>Итого:</h3>
	<p>Калорийность: <span id="kkal"></span> Белки : <span id="protein"></span> Жиры : <span id="fats"></span> Углеводы : <span id="carbs"></span></p>
	<button id="result">Счет</button>



				 </div>
        </div>
  		    </div>					



  		 
 	<div id="footer">	
		<div class="container">	
			<div class="row centered">	
			<a href="https://vk.com/vitaliybro"><i class="fa fa-vk"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="https://www.instagram.com/vitalyweb"><i class="fa fa-instagram" aria-hidden="true"></i>
				<h3> © Warrior 2018</h3>
			</div>
		</div>
 	</div>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
 
	$(window).scroll(function(){
	if ($(this).scrollTop() > 100) {
	$('.scrollup').fadeIn();
	} else {
	$('.scrollup').fadeOut();
	}
	});
 
	$('.scrollup').click(function(){
	$("html, body").animate({ scrollTop: 0 }, 600);
	return false;
	});
 
	});
</script>
	<a href="#" class="scrollup">Наверх</a>
<script src="1.js" ></script>
</body>
</html>