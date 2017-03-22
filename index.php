<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="title" content="Фраза в поиск_результатах"; charset="utf-8"/>
	<meta http-equiv="Content-Language" content="ru-RU"/> 
	<meta name="description" content="Сайт, созданный в учебных целях."/>
	<meta name="keywords" content="Ключевые слова"/>
	<meta name="robots" content=" "/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script>
		document.createElement("nav");
		document.createElement("header");
		document.createElement("footer");
		document.createElement("section");
		document.createElement("aside");
		document.createElement("article");
		document.createElement('main');
	</script>
	<title>Главная</title>
	<link rel="stylesheet" href="css/style.css?123" type="text/css">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>
<body>
	<div>

	<?php
		include "blocks/header.php";
		include "blocks/section_content.php";
		include "blocks/section_nav.php";
	?>

	<?php
		include "blocks/footer.php";
	?>

	<button id="scrollup">Наверх<img src="img/str2.png"
	alt="Прокрутить вверх"></button>

<script type='text/javascript' src='/js/scrollup.js'></script>

</body>
</html>