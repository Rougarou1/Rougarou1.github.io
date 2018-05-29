<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Warrior</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="fonts/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="1.js" defer></script>
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
						<li><a href="calculator.php">Калькулятор</a></li>
						<li><a href="Eat.php">Питание</a></li>
						<li><a href="sport.php">Тренировки</a></li>
						<li><a href="#">Контакты</a></li>
						<li><a href="signup.php">Регистрация</a></li>
						<li><a href="registr.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
						
<li><a href=""></a></li>
<li><a href=""></a></li>
<li><a href=""></a></li>
<li><a href=""></a></li>
<li><a href=""></a></li>


					</ul>

				</div>
		</div>
	</div>

		<div id="headerwrap">	
			<div class="container">	
				<div class="row centered">	
					<div class="col-lg-8 col-lg-offset-2">	
						<h1>Дневная норма калорий</h1>
						<h2>Расчитай на нашем сайте</h2>
					</div>
				</div>
			</div>
		</div>
	<div class="container w">
		<div class="row centered">	
			<br></br>
			<div class="col-lg-4">
				<i class="fa fa-heart"></i>	
				<h4>Что такое калория?</h4>
				<p>Термин «калория» образован от слова calor (лат. «тепло»). В классической физике калории не имели никакого отношения к пищи — более двухсот лет в них измерялась энергия, выделяемая при сгорании топлива (угля, дров). Лишь в начале 20 века пищу стали рассматривать как топливо для организма.</p>
			</div>
			<div class="col-lg-4">	
			<i class="fa fa-laptop"></i>	
				<h4>Формула расчета калорий</h4>
				<p>Расчет нормы калорий — первый шаг, с которого начинается составление диеты для похудения или для набора мышечной массы. Без определения суточной нормы потребления калорий невозможно просчитать наиболее оптимальный состав рациона по основным нутриентам (белкам, жирам и углеводам)..</p>
			</div>
			<div class="col-lg-4">	
			<i class="fa fa-trophy"></i>	
				<h4>Индивидуальный уровень активности</h4>
				<p>Классическая формула нормы калорий разделяет пять типов физической активности: минимальный уровень (никаких физических нагрузок), низкий (физические нагрузки 1-3 раза в неделю), средний (3-5 дней в неделю), высокий (6-7 раз в неделю) и очень высокий (тренировки чаще, чем раз в день)..</p>
			</div>


		</div>
	</div>	
	<div id="calc">	
			<div class="container">	
				<div class="row centered">	
					
	

 <p>Введите возраст: <input type="number" id="num1"></p>
 <p>Введите рост: <input type="number" id="num2"></p>
 <p>Введите вес: <input type="number" id="num3"></p>
 <p>Выберите Ваш уровень физической нагрузки:   </p>
<select name="" id="MySelect" onchange="fun1()"> 

	<option value="" id="v1">Нет физ.нагрузки(работа в офисе)</option>
	<option value="" id="v2">Легкая физ.нагрузка(1-3 раза в неделю)</option>
	<option value="" id="v3">Умеренная физ.нагрузка(3-5 раз в неделю)</option>
	<option value="" id="v4">Высокая физ.нагрузка(6-7 раз в неделю)</option>
	<option value="" id="v5">Очень высокая нагрузка(7 раз в неделю)</option>
</select>
<br></br>
 <i class="fa fa-male" aria-hidden="true"></i><input name="name1" type="radio"  onclick = "fun1()"> Мужчина
<i class="fa fa-female" aria-hidden="true"></i><input name="name1" type="radio" onclick = "fun2()"> Девушка
<br></br>
 
<button onclick="fun3()">Снижение веса</button>
 <button onclick="fun4()">Набор веса</button>
  <button onclick="fun1()">Поддержание формы</button>
 <hr>
 <p id="out">Результат:</p>
 
   </div>
        </div>
  		    </div>
  		    <div id="sport">	
			<div class="container">	
				<div class="row centered">
			<div class="col-lg-8 col-lg-offset-2">	
						
			<h2>Данный калькулятор калорий позволяет расчитать рекомендуемое суточное количество калорий (килокалорий) необходимое для поддержания постоянного веса, похудения (снижения веса) а также для набора веса. Данный калькулятор поможет похудеть и снизить вес при правильном расчете потребляемых калорий. Для того, чтобы снизить вес на 454 грамм в неделю - сократите потребление калорий на 500 калорий в день. Снижение дневного потребления калорий ниже 1200, а также снижение веса более чем на 900 грамм в неделю не рекомендуется. Для более сбалансированной потери веса сократите дневное потребление калорий на 250 калорий и поднимите физическую нагрузку для увеличения расхода калорий на 250 калорий в день. Данный подход поможет предотвратить снижение метаболизма (обмена веществ) организма и увеличить мышечную массу.</h2>
			


	
				</div>
                 </div>
  		    </div>	
  		    </div>

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
</body>
</html>