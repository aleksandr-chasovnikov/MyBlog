<header id="page_header">
	<div class="logo">
		<a href="index_main.php"><img src="../img/logo.png" width="133" height="45" alt="Логотип"></a>
	</div>
	<form>
		<table>
			<tr>
				<td colspan="2"><input id="search" spellcheck type="text" placeholder="Поиск" name="search" maxlength="300"/></td>
				<td><a href="index_1.php"><button class="button_search" type="submit">Найти</button></a></td>
			</tr>
			<tr>
				<td>
					<select class="select_search" size="1" name="kategorii">
						<option value="Все категории">Все объявления</option>
						<option value="Авто">Транспорт</option>
						<option value="Стройка">Строительство</option>
						<option value="Дома">Недвижимость</option>
						<option value="Работа">Работа и бизнес</option>
				   </select>
			   </td>
				<td>
					<select class="select_search" size="1" name="region">
						<option value="Вся Россия">Вся Россия</option>
						<option value="#">Ростов</option>
						<option value="#">Ростов</option>
						<option value="#">Ростов</option>
						<option value="#">Ростов</option>
						<option value="#">Ростов</option>
				   </select>
				</td>
				<td> &nbsp </td>
			</tr>
		</table>
	</form>
	<div id="div_button">
		<a href="form.php"><button class="button3" type="submit">Дать объявление</button></a>
		<a href="change_ads.php"><button class="button1" type="submit">Изменить объявление</button></a>
	</div>
</header>