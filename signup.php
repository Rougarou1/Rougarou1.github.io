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
						<li><a href="Eat.php">Питание</a></li>
						<li><a href="sport.php">Спорт</a></li>
						<li><a href="#">Контакты</a></li>
						<li><a href="signup.php">Регистрация</a></li>
						<li><a href="registr.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
						



					</ul>

				</div>
		</div>
	</div>
<div id="calc">	
			<div class="container">	
				<div class="row centered">	
<?php

	require "db.php";

	$data = $_POST;
	$errors = array();
	if( isset($data['do_signup']))
		if(trim($data['login']) == '')
		{
			$errors[] = 'Введите логин!';
		}
	
	if(trim($data['email']) == '')
	{
		$errors[] = 'Введите E-mail!';
	}
	
		if(trim($data['password']) == '')
		{
			$errors[] = 'Введите пароль!';
		}
	
	if(trim($data['password_2']) != $data['password'])
	{
		$errors[] = 'Повторный пароль введен не верно!';
	}

	if( R::count('users','login = ? OR email = ?', array(
		$data['login'], $data['login'])) > 0)
	{
		$errors[] = 'Пользователь с таким логином уже существует!';
	}
	if( R::count('users','email = ? OR email = ?', array(
		$data['email'], $data['email'])) > 0)
	{
		$errors[] = 'Пользователь с таким E-mail уже существует!';
	}
	if( empty($errors))
	{
		$user = R::dispense('users');
		$user->login = $data['login'];
		$user->email = $data['email'];
		$user->password = password_hash($data['password'],PASSWORD_DEFAULT);
		$user->join_date = time(); 
		R::store($user);
		echo '<div style="color:green;">Вы успешно зарегестрированы!</div><hr>';
	}else
	{
		echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';

	}

?>

<form action="signup.php" method="POST">
	<p>
		<p><strong>	Ваш логин </strong>:</p>
		<input type="text" name="login" value="<?php echo $data["login"]; ?>">
	</p>

	<p>
		<p><strong>	Ваш E-mail </strong>:</p>
		<input type="email" name="email" value="<?php echo $data["email"]; ?>">
	</p>

	<p>
		<p><strong>	Ваш пароль </strong>:</p>
		<input type="password" name="password">
	</p>

	<p>
		<p><strong>	Повторите пароль ещё раз</strong>:</p>
		<input type="password" name="password_2">
	</p>
	
	<p>
		<button type="submit" name="do_signup">Зарегестрироваться</button>
	</p>

</form>
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