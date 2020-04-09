<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, user-scalable=no">

	<title>SpaceX</title>
	
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container-fluid top"> <!-- бекграунд - картинка -->
		<div id="menu" class="row menu">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 logo"> <!-- логотип -->
						<div id="logoWrapper">
							<div class="topRightCorner smallCorner"></div>
							<img src="pics/logo.png">
							<div class="bottomLeftCorner smallCorner"></div>
						</div>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-6 py-3" id="navbar">
						<nav class="navbar navbar-expand-md">
							<!-- <a class="navbar-brand" href="#"></a> -->
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								Главная <span class="navbar-toggler-icon">&#9776;</span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
							    <ul class="navbar-nav ml-auto">
							      <li class="nav-item">
							        <a class="nav-link text-white" href="#"><span>Главная</span></a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link text-white" href="#"><span>Технология</span></a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link text-white" href="#"><span>График полетов</span></a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link text-white" href="#"><span>Гарантия</span></a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link text-white" href="#"><span>О кампании</span></a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link text-white" href="#"><span>Контакты</span></a>
							      </li>
							    </ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid content">
		<div class="container">
			<div class="row pt-lg-5 pb-lg-5">
				<div class="col-lg-8 col-md-6 col-sm-4">
					<button id="travel">
						<div class="topRightCorner smallCorner"></div>
						Начать путешествие
						<div class="bottomLeftCorner smallCorner"></div>
					</button>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-8 container text-white">
					<div class="row">
						<div id="advantage1" class="col-lg-5 col-sm-5 row text-center m-1 p-1 advantages">
							<div class="col-lg-12">мы</div>
							<div class="col-lg-12 font-weight-bold">1</div>
							<div class="col-lg-12">на рынке</div>
						</div>
						<div id="advantage2" class="col-lg-5 col-sm-5 row text-center m-1 p-1 advantages">
							<div class="col-lg-12">гарантируем</div>
							<div class="col-lg-12 font-weight-bold">50%</div>
							<div class="col-lg-12">безопасность</div>
						</div>
					</div>
					<div class="row">
						<div id="advantage3" class="col-lg-5 col-sm-5 row text-center m-1 p-1 advantages">
							<div class="col-lg-12">календарик за</div>
							<div class="col-lg-12 font-weight-bold">2001<span class="font-weight-bold" id="years">г.</span></div>
							<div class="col-lg-12">в подарок</div>
						</div>
						<div id="advantage4" class="col-lg-5 col-sm-5 row text-center m-1 p-1 advantages">
							<div class="col-lg-12">путешествие</div>
							<div class="col-lg-12 font-weight-bold">597</div>
							<div class="col-lg-12">дней</div>
						</div>
					</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="container">
					<div class="d-none" id="m-travel">
						<button>
							<div class="topRightCorner smallCorner"></div>
							Начать путешествие
							<div class="bottomLeftCorner smallCorner"></div>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>