<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Доставка кальяна по городу Ижевск КРУГЛОСУТОЧНО "NoName"</title>
<meta charset="utf-8">	
<meta name="description" content="Круглосуточная доставка кальяна по городу Ижевск. Огромное разнообразие вкусов, профессиональное оборудование и уникальный дизайн. Доставим за 30 минут. Бесплатная доставка. Заказ по номеру 233-655" />
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
</head>
<body>

<!-- Modal window 18+ START -->
<div id="warning-win">
 <div class="cover-warning"></div>
 <div class="win-warning-content container-modal-warning">
 <p>Данный сайт может содержать <br> материалы для взрослых
 <br><span class="age_size"> Чтобы продолжить, подтвердите, что вам уже исполнилось 18 лет.</span></p>
 <button id="b_yes">да, мне уже есть 18</button>
 <button id="b_no">нет, мне еще нет 18</button>
 <p class="text-warning" style="visibility: hidden;">Нужно подтвердить</p>
 </div>
</div>
<!-- Modal window 18+ END -->



												<!-- Main content START -->
<div class="main_content">

<!-- Header START -->
<div class="header">
	<img class="logo" src="images/logo.gif" width="400" height="350" alt="Доставка кальяна Ижевск">
	<h1 >закажи кальян <br>с доставкой на дом<br>город ижевск</h1>
</div>	
<!-- Header END -->


<!-- Content START -->
<div class="content">


<!-- Information block START -->
<div class="info">
	<!-- Information block ABOUT US START -->
	<div class="about">
		<div class="about_image"><img src="images/picture.png" width="500" height="700" alt="дымный кальян на фрукте"></div>
		<div class="about_content">
			<div class="text_center"><h2 class="red_rib">почему стоит заказать кальян у нас ?</h2>
			<p>Доставка кальянов по городу Ижевск 24/7 <br>Мы - команда профессионалов готовых помочь Вам приятно провести время. Будь то обычный будничный вечер в узком кругу 
			самых близких людей или же большая и шумная вечеринка - мы всегда будем рады Вам помочь. <br>Сочный и дымный кальян станет украшением для любой вечеринки !!!</p>
			<h2 class="pluses red_rib">Наши преимущества</h2></div>
			<ul class="about_list">
				<li>Доставка всего за 30 минут !</li>
				<li>Высокое качество обслуживания !</li>
				<li>Большой выбор вкусов !</li>
				<li>Возмоность заказать кальян на фрукте !</li>
				<li>Возможность выбора цвета наполнения колбы абсолютно БЕСПЛАТНО !</li>
				<li>Очистка оборудования паром = абсолютная чистота !</li>
				<li>Бонусная программа для постоянных клиентов !</li>
        <li>Выезд на мероприятия !</li>
			</ul>
		</div>
		
	</div>
	<!-- Information block ABOUT US END -->

	<!-- Information block ABOUT DELIVERY START -->
	<div class="delivery">
		
		<div class="about_delivery">
			<div class="text_center"><h2 class="red_rib">Как это работает ? Все очень просто !</h2>
				<ul class="about_list">
					<li>1) Вы делаете заказ</li>
					<li>2) К вам приезжает мастер и готовит кальян</li>
					<li>3) По истечении времени мастер приезжает и забирает оборудование</li>
				</ul></div>
		</div>
	<!-- 	<div class="about_delivery_image">
		<img src="images/about.jpg" width="600" height="400" alt="кальян на 2 часа или сутки">
		</div>-->
		
	</div>	
	<!-- Information block ABOUT DELIVERY END -->
	

</div>
<!-- Information block END -->

<p class="star text_center">*Кальян предоставляется на 2 часа. В комплект входят одноразовые мундштуки, щипцы, уголь и плитка для розжига !<br>Есть возможность заказа на сутки.</p>


<!-- Enter phone number START -->
<div class="phone_number">

	<div class="text_center"><h3 class="red">Просто введи номер и мы перезвоним</h3><br>
			<p class="text_center" id="message"></p> 	
	<form action="telegram.php" method="POST" onsubmit="return validate()">
		<input type="text" name="phone_number" required placeholder="Телефон" id="just_phone_number" ><br>
		<button type="submit">Сделать заказ</button>
	</form>
</div>

<p class="or text_center">или ...</p></div>
<!-- Enter phone number START -->

<div class="constructor_head text_center">
<p class="red"> собери свой кальян</p>
</div>

<!-- Hookah constructor START -->
<div class="constructor text_center">
	
 
  	<form class="form" action="telegram_for_constructor.php" method="POST" onsubmit="return validate2()">



  		<div class="tobacco">
  	<label><input type="radio" name="tobacco" value="250" style="vertical-align:middle;margin:-7px 10px 0 0">Крепкий</label>
  	<label><input type="radio" name="tobacco" value="150" style="vertical-align:middle;margin:-7px 10px 0 0">Средний</label>
  	<label><input type="radio" name="tobacco" value="0" checked style="vertical-align:middle;margin:-7px 10px 0 0">Легкий</label>
  		</div>

  		<div class="flavor">
  			<p>выбери чашу</p>
  	<select name="bowl" id="select_bowl">
    <option disabled>Выбери чашу</option>
    <option selected value="обычный">Классическая</option>
    <option value="фрукт">На фрукте</option>
    <option value="стакан">В стакане</option>
   </select>
  		</div>

  			<div class="color" id="select_fruit">
  			  		<p>выбери фрукт</p>
  	<label><input type="radio" class="checked" name="fruit" value="яблоко" checked><img class="checked_img" src="images/apple.png" width="150" height="150" alt="Кальян на фрукте"></label>
  	<label><input type="radio" class="checked" name="fruit" value="банан"><img class="checked_img" src="images/banana.png" width="150" height="150" alt="Кальян на фрукте"></label>
  	<label><input type="radio" class="checked" name="fruit" value="апельсин"><img class="checked_img" src="images/orange.png" width="150" height="150" alt="Кальян на фрукте"></label>
  	<label><input type="radio" class="checked" name="fruit" value="лимон"><img class="checked_img" src="images/lemon.png" width="150" height="150" alt="Кальян на фрукте"></label>
  	<label><input type="radio" class="checked" name="fruit" value="грейпфрут"><img class="checked_img" src="images/grape.png" width="150" height="150" alt="Кальян на фрукте"></label>
  	<label><input type="radio" class="checked" name="fruit" value="гранат"><img class="checked_img" src="images/gran.png" width="150" height="150" alt="Кальян на фрукте"></label>
  	<label><input type="radio" class="checked" name="fruit" value="ананас" ><img class="checked_img" src="images/pine.png" width="150" height="150" alt="Кальян на фрукте"></label>
  		</div>

  		  			<div class="color" id="select_cup_fruit">
  			  		<p>выбери фрукт</p>
  	<label><input type="radio" class="checked" name="fruit_cup" value="яблоко" checked><img class="checked_img" src="images/apple.png" width="150" height="150" alt="Кальян на фрукте"></label>
  	<label><input type="radio" class="checked" name="fruit_cup" value="апельсин"><img class="checked_img" src="images/orange.png" width="150" height="150" alt="Кальян на фрукте"></label>
  	<label><input type="radio" class="checked" name="fruit_cup" value="лимон"><img class="checked_img" src="images/lemon.png" width="150" height="150" alt="Кальян на фрукте"></label>
  		</div>

  			<!-- <div class='fruit_image' >
  			 	<img id='fruit_image' src="images/apple.png" width="400" height="400" alt="Кальян на фрукте">
  			</div>-->

  		<div class='taste flavor'>
  			<p>выбери вкус</p>
  			<select name='taste' >
  				<option disabled>Выбери вкус</option>
  				<option value='кислый'>Кислый</option>
  				<option value='сладкий'>Сладкий</option>
  				<option selected value='свежий'>Свежий</option>
  			</select></div>


  			  	<div class="color">
  			  		<p>выбери цвет</p>
  	<label><input type="radio" class="checked" name="color" value="синий"><img class="checked_img" src="images/blue.png" width="100" height="150" alt="шиммер цвет кальяна синий"></label>
  	<label><input type="radio" class="checked" name="color" value="красный"><img class="checked_img" src="images/red.png" width="100" height="150" alt="шиммер цвет кальяна красный"></label>
  	<label><input type="radio" class="checked" name="color" value="желтый"><img class="checked_img" src="images/yellow.png" width="100" height="150" alt="шиммер цвет кальяна желтый"></label>
  	<label><input type="radio" class="checked" name="color" value="фиолетовый"><img class="checked_img" src="images/purpur.png" width="100" height="150" alt="шиммер цвет кальяна фиолетовый"></label>
  	<label><input type="radio" class="checked" name="color" value="зеленый"><img class="checked_img" src="images/green.png" width="100" height="150" alt="шиммер цвет кальяна зеленый"></label>
  	<label><input type="radio" class="checked" name="color" value="бесцветный" checked><img class="checked_img" src="images/nothing.png" width="100" height="150" alt="шиммер цвет кальяна бесцветный"></label>
  		</div>




  		<div class="flavor new_bowls" id="bowl_number_div">
  			  <p class="red widther">закажи несколько кальянов в стакане на всю компанию ! добавить еще: </p>
  	<select name="bowl_number" id="select_bowl_number">
    <option disabled>Выбери чашу</option>
    <option selected value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>

   </select>

   <div id="bowl_1">

   		  		<div class="tobacco">
   		  			<p class="flavor">Дополнительный кальян в стакане 1:</p><br>
   		  			<p class="flavor">Выбери крепость табака:</p>
  	<label><input type="radio" name="tobacco_bowl_1" value="250" style="vertical-align:middle;margin:-7px 10px 0 0">Крепкий</label>
  	<label><input type="radio" name="tobacco_bowl_1" value="150" style="vertical-align:middle;margin:-7px 10px 0 0">Средний</label>
  	<label><input type="radio" name="tobacco_bowl_1" value="0" checked style="vertical-align:middle;margin:-7px 10px 0 0">Легкий</label>
  		</div>


  		<div class="color_new_bowls">
  			  		<p>выбери фрукт</p>
  	<label><input type="radio" class="checked" name="fruit_cup_bowl_1" value="яблоко" checked><img class="checked_img" src="images/apple.png" width="150" height="150" alt="Кальян на фрукте"></label>
  	<label><input type="radio" class="checked" name="fruit_cup_bowl_1" value="апельсин"><img class="checked_img" src="images/orange.png" width="150" height="150" alt="Кальян на фрукте"></label>
  	<label><input type="radio" class="checked" name="fruit_cup_bowl_1" value="лимон"><img class="checked_img" src="images/lemon.png" width="150" height="150" alt="Кальян на фрукте"></label>
  		</div>



   	  		<div class='taste flavor'>
  			<p>выбери вкус</p>
  			<select name='taste_bowl_1' >
  				<option disabled>Выбери вкус</option>
  				<option value='кислый'>Кислый</option>
  				<option value='сладкий'>Сладкий</option>
  				<option selected value='свежий'>Свежий</option>
  			</select></div>



  			  			  	<div class="color">
  			  		<p>выбери цвет</p>
  	<label><input type="radio" class="checked" name="color_bowl_1" value="синий"><img class="checked_img" src="images/blue.png" width="100" height="150" alt="шиммер цвет кальяна синий"></label>
  	<label><input type="radio" class="checked" name="color_bowl_1" value="красный"><img class="checked_img" src="images/red.png" width="100" height="150" alt="шиммер цвет кальяна красный"></label>
  	<label><input type="radio" class="checked" name="color_bowl_1" value="желтый"><img class="checked_img" src="images/yellow.png" width="100" height="150" alt="шиммер цвет кальяна желтый"></label>
  	<label><input type="radio" class="checked" name="color_bowl_1" value="фиолетовый"><img class="checked_img" src="images/purpur.png" width="100" height="150" alt="шиммер цвет кальяна фиолетовый"></label>
  	<label><input type="radio" class="checked" name="color_bowl_1" value="зеленый"><img class="checked_img" src="images/green.png" width="100" height="150" alt="шиммер цвет кальяна зеленый"></label>
  	<label><input type="radio" class="checked" name="color_bowl_1" value="бесцветный" checked><img class="checked_img" src="images/nothing.png" width="100" height="150" alt="шиммер цвет кальяна бесцветный"></label>
  		</div>


   </div>
  




   <div id="bowl_2">

   		  		<div class="tobacco">
   		  			<p class="flavor">Дополнительный кальян в стакане 2:</p><br>
   		  			<p class="flavor">Выбери крепость табака:</p>
  	<label><input type="radio" name="tobacco_bowl_2" value="250" style="vertical-align:middle;margin:-7px 10px 0 0">Крепкий</label>
  	<label><input type="radio" name="tobacco_bowl_2" value="150" style="vertical-align:middle;margin:-7px 10px 0 0">Средний</label>
  	<label><input type="radio" name="tobacco_bowl_2" value="0" checked style="vertical-align:middle;margin:-7px 10px 0 0">Легкий</label>
  		</div>

<div class="color_new_bowls">
  			  		<p>выбери фрукт</p>
  	<label><input type="radio" class="checked" name="fruit_cup_bowl_2" value="яблоко" checked><img class="checked_img" src="images/apple.png" width="150" height="150" alt="Кальян на фрукте"></label>
  	<label><input type="radio" class="checked" name="fruit_cup_bowl_2" value="апельсин"><img class="checked_img" src="images/orange.png" width="150" height="150" alt="Кальян на фрукте"></label>
  	<label><input type="radio" class="checked" name="fruit_cup_bowl_2" value="лимон"><img class="checked_img" src="images/lemon.png" width="150" height="150" alt="Кальян на фрукте"></label>
  		</div>




   	  		<div class='taste flavor'>
  			<p>выбери вкус</p>
  			<select name='taste_bowl_2' >
  				<option disabled>Выбери вкус</option>
  				<option value='кислый'>Кислый</option>
  				<option value='сладкий'>Сладкий</option>
  				<option selected value='свежий'>Свежий</option>
  			</select></div>

  	  			  			  	<div class="color">
  			  		<p>выбери цвет</p>
  	<label><input type="radio" class="checked" name="color_bowl_2" value="синий"><img class="img checked_img" src="images/blue.png" width="100" height="150" alt="шиммер цвет кальяна синий"></label>
  	<label><input type="radio" class="checked" name="color_bowl_2" value="красный"><img class="img checked_img" src="images/red.png" width="100" height="150" alt="шиммер цвет кальяна красный"></label>
  	<label><input type="radio" class="checked" name="color_bowl_2" value="желтый"><img class="img checked_img" src="images/yellow.png" width="100" height="150" alt="шиммер цвет кальяна желтый"></label>
  	<label><input type="radio" class="checked" name="color_bowl_2" value="фиолетовый"><img class="img checked_img" src="images/purpur.png" width="100" height="150" alt="шиммер цвет кальяна фиолетовый"></label>
  	<label><input type="radio" class="checked" name="color_bowl_2" value="зеленый"><img class="img checked_img" src="images/green.png" width="100" height="150" alt="шиммер цвет кальяна зеленый"></label>
  	<label><input type="radio" class="checked" name="color_bowl_2" value="бесцветный" checked><img class="img checked_img" src="images/nothing.png" width="100" height="150" alt="шиммер цвет кальяна бесцветный"></label>
  		</div>		


   </div>





      <div id="bowl_3">

   	  			  		<div class="tobacco">
   	  			  			<p class="flavor">Дополнительный кальян в стакане 3:</p><br>
   	  			  			<p class="flavor">Выбери крепость табака:</p>
  	<label><input type="radio" name="tobacco_bowl_3" value="250" style="vertical-align:middle;margin:-7px 10px 0 0">Крепкий</label>
  	<label><input type="radio" name="tobacco_bowl_3" value="150" style="vertical-align:middle;margin:-7px 10px 0 0">Средний</label>
  	<label><input type="radio" name="tobacco_bowl_3" value="0" checked style="vertical-align:middle;margin:-7px 10px 0 0">Легкий</label>
  		</div>

<div class="color_new_bowls">
  			  		<p>выбери фрукт</p>
  	<label><input type="radio" class="checked" name="fruit_cup_bowl_3" value="яблоко" checked><img class="checked_img" src="images/apple.png" width="150" height="150" alt="Кальян на фрукте"></label>
  	<label><input type="radio" class="checked" name="fruit_cup_bowl_3" value="апельсин"><img class="checked_img" src="images/orange.png" width="150" height="150" alt="Кальян на фрукте"></label>
  	<label><input type="radio" class="checked" name="fruit_cup_bowl_3" value="лимон"><img class="checked_img" src="images/lemon.png" width="150" height="150" alt="Кальян на фрукте"></label>
  		</div>


  			<div class='taste flavor'>
  			<p>выбери вкус</p>
  			<select name='taste_bowl_3' >
  				<option disabled>Выбери вкус</option>
  				<option value='кислый'>Кислый</option>
  				<option value='сладкий'>Сладкий</option>
  				<option selected value='свежий'>Свежий</option>
  			</select></div>


  	<div class="color">
  			  		<p>выбери цвет</p>
  	<label><input type="radio" class="checked" name="color_bowl_3" value="синий"><img class="img checked_img" src="images/blue.png" width="100" height="150" alt="шиммер цвет кальяна синий"></label>
  	<label><input type="radio" class="checked" name="color_bowl_3" value="красный"><img class="img checked_img" src="images/red.png" width="100" height="150" alt="шиммер цвет кальяна красный"></label>
  	<label><input type="radio" class="checked" name="color_bowl_3" value="желтый"><img class="img checked_img" src="images/yellow.png" width="100" height="150" alt="шиммер цвет кальяна желтый"></label>
  	<label><input type="radio" class="checked" name="color_bowl_3" value="фиолетовый"><img class="img checked_img" src="images/purpur.png" width="100" height="150" alt="шиммер цвет кальяна фиолетовый"></label>
  	<label><input type="radio" class="checked" name="color_bowl_3" value="зеленый"><img class="img checked_img" src="images/green.png" width="100" height="150" alt="шиммер цвет кальяна зеленый"></label>
  	<label><input type="radio" class="checked" name="color_bowl_3" value="бесцветный" checked><img class="img checked_img" src="images/nothing.png" width="100" height="150" alt="шиммер цвет кальяна бесцветный"></label>
  		</div>

   </div>





         <div id="bowl_4">

         	  		<div class="tobacco">
         	  			<p class="flavor">Дополнительный кальян в стакане 4:</p><br>
         	  			<p class="flavor">Выбери крепость табака:</p>
  	<label><input type="radio" name="tobacco_bowl_4" value="250" style="vertical-align:middle;margin:-7px 10px 0 0">Крепкий</label>
  	<label><input type="radio" name="tobacco_bowl_4" value="150" style="vertical-align:middle;margin:-7px 10px 0 0">Средний</label>
  	<label><input type="radio" name="tobacco_bowl_4" value="0" checked style="vertical-align:middle;margin:-7px 10px 0 0">Легкий</label>
  		</div>



<div class="color_new_bowls">
  			  		<p>выбери фрукт</p>
  	<label><input type="radio" class="checked" name="fruit_cup_bowl_4" value="яблоко" checked><img class="checked_img" src="images/apple.png" width="150" height="150" alt="Кальян на фрукте"></label>
  	<label><input type="radio" class="checked" name="fruit_cup_bowl_4" value="апельсин"><img class="checked_img" src="images/orange.png" width="150" height="150" alt="Кальян на фрукте"></label>
  	<label><input type="radio" class="checked" name="fruit_cup_bowl_4" value="лимон"><img class="checked_img" src="images/lemon.png" width="150" height="150" alt="Кальян на фрукте"></label>
  		</div>


   	  		<div class='taste flavor' id="taste_flavor">
  			<p>выбери вкус</p>
  			<select name='taste_bowl_4' >
  				<option disabled>Выбери вкус</option>
  				<option value='кислый'>Кислый</option>
  				<option value='сладкий'>Сладкий</option>
  				<option selected value='свежий'>Свежий</option>
  			</select></div>



  			<div class="color">
  			  		<p>выбери цвет</p>
  	<label><input type="radio" class="checked" name="color_bowl_4" value="синий"><img class="img checked_img" src="images/blue.png" width="100" height="150" alt="шиммер цвет кальяна синий"></label>
  	<label><input type="radio" class="checked" name="color_bowl_4" value="красный"><img class="img checked_img" src="images/red.png" width="100" height="150" alt="шиммер цвет кальяна красный"></label>
  	<label><input type="radio" class="checked" name="color_bowl_4" value="желтый"><img class="img checked_img" src="images/yellow.png" width="100" height="150" alt="шиммер цвет кальяна желтый"></label>
  	<label><input type="radio" class="checked" name="color_bowl_4" value="фиолетовый"><img class="img checked_img" src="images/purpur.png" width="100" height="150" alt="шиммер цвет кальяна фиолетовый"></label>
  	<label><input type="radio" class="checked" name="color_bowl_4" value="зеленый"><img class="img checked_img" src="images/green.png" width="100" height="150" alt="шиммер цвет кальяна зеленый"></label>
  	<label><input type="radio" class="checked" name="color_bowl_4" value="бесцветный" checked><img class="img checked_img" src="images/nothing.png" width="100" height="150" alt="шиммер цвет кальяна бесцветный"></label>
  		</div>


   </div>


		<input type="hidden" id="egg_bowl_num" name="egg_bowl_num" value="0">


  		</div>











  	<div class="phone_number2">
	<p class="text_center red">Номер телефона:</p><br>
	<p class="text_center" id="message2"></p> 
		<input type="text" name="phone_number2" required placeholder="Телефон" id="phone_number_main"><br>
	</div>	

	<p class="or2">заказ на сумму:<br>
		<span id="sum"></span> рублей</p>
		<input type="hidden" id="egg" name="egg" value="0">
  		<button type="submit">сделать заказ</button>
  </form>
	
</div>
<!-- Hookah constructor END -->


</div>

<!-- Content END -->
</div>

															<!-- Main content END -->
							





<script src="js/jquery.js"></script>
<script src="cookie/jquery.cookie.js"></script> <!-- For modal window -->
<script src="js/age.js"></script> 	<!-- For modal window -->
<script src="js/select_fruit.js"></script> 	<!-- Show and hide select fruit bowl form-->

<!-- Dinamic price number script -->
<script>

		var bowl = document.getElementById("select_bowl");
		var fruit = $('input[name=fruit]:checked').val();
		var cup_fruit =$('input[name=fruit_cup]:checked').val();
		var tobacco = $('input[name=tobacco]:checked').val();
		tobacco = Number(tobacco);
////////// default price
var time = "<?php echo date('G')?>";
var time = Number(time);

if ((time==9)||((time>9)&&(time<21))) {
$("#sum").html(500+tobacco);
$("#egg").val(500+tobacco);
var q = 500+tobacco;
$.cookie('price_tobacco',q, {
 expires: 365,
 path: '/'
 });	
} else if ((time==21)||(time==22)||(time==23)||(time==24)) {

var q = 700+tobacco;
$.cookie('price_tobacco',q, {
 expires: 365,
 path: '/'
 });
$("#sum").html(700+tobacco);
$("#egg").val(700+tobacco);
} else if ((time==0)||((time>0)&&(time<3))) {
var q = 1200+tobacco;
$.cookie('price_tobacco',q, {
 expires: 365,
 path: '/'
 });
$("#sum").html(1200+tobacco);
$("#egg").val(1200+tobacco);
} else if ((time==3)||((time>3)&&(time<9))) {
var q = 2000+tobacco;
$.cookie('price_tobacco',q, {
 expires: 365,
 path: '/'
 });
$("#sum").html(2000+tobacco);
$("#egg").val(2000+tobacco);
}

///////// end default price



$("input[name='tobacco']").change(function() {
	if (bowl.value=="стакан") {
	let tobacco = $('input[name=tobacco]:checked').val();
	tobacco = Number(tobacco);	
	let changeTobacco = Number($.cookie('price_tobacco'));
	changeTobacco = changeTobacco + tobacco;
	let num_maker = $("#egg_bowl_num").val();
	num_maker = Number(num_maker);
   $("#sum").html(num_maker+changeTobacco);
   $("#egg").val(changeTobacco);
	} else {
   	var tobacco = $('input[name=tobacco]:checked').val();
	tobacco = Number(tobacco);	
	let changeTobacco = Number($.cookie('price_tobacco'));
	changeTobacco = changeTobacco + tobacco;
   $("#sum").html(changeTobacco);
   $("#egg").val(changeTobacco);
			}
});





bowl.addEventListener('change', () => {
		var time = "<?php echo date('G')?>";
		var time = Number(time);
		var bowl = document.getElementById("select_bowl");
		var fruit = $('input[name=fruit]:checked').val();
		var cup_fruit =$('input[name=fruit_cup]:checked').val();
		var tobacco = $('input[name=tobacco]:checked').val();
		tobacco = Number(tobacco);			


		function bowl_price(bowl,fruit,cup_fruit,time) {
		if ((bowl.value=="обычный") && ((time==9)||((time>9)&&(time<21)))) {	
			return 500
		} else if ((bowl.value=="обычный") && ((time==0)||((time>0)&&(time<3)))) {
			return 1200
		}else if ((bowl.value=="обычный") && ((time==3)||((time>3)&&(time<9)))) {
			return 2000
		} else if ((bowl.value=="обычный") && ((time==21)||(time==22)||(time==23)||(time==24))){
			return 700
		} else if ((bowl.value=="фрукт") && ((fruit=="яблоко")||(fruit=="банан")||(fruit=="апельсин")||(fruit=="лимон")||(fruit=="грейпфрут")) && ((time==9)||((time>9)&&(time<21)))) {
			return 800
		} else if ((bowl.value=="фрукт") && ((fruit=="яблоко")||(fruit=="банан")||(fruit=="апельсин")||(fruit=="лимон")||(fruit=="грейпфрут")) && ((time==21)||(time==22)||(time==23)||(time==24))) {
			return 1000
		} else if ((bowl.value=="фрукт") && ((fruit=="яблоко")||(fruit=="банан")||(fruit=="апельсин")||(fruit=="лимон")||(fruit=="грейпфрут")) && ((time==0)||((time>0)&&(time<3)))) {
			return 1500
		} else if ((bowl.value=="фрукт") && ((fruit=="яблоко")||(fruit=="банан")||(fruit=="апельсин")||(fruit=="лимон")||(fruit=="грейпфрут")) && ((time==3)||((time>3)&&(time<9)))) {
			return 2300
		} else if (bowl.value=="стакан") {
			return 500
		}	
		
	} //end func for bowl

	$.cookie('price_tobacco', bowl_price(bowl,fruit,cup_fruit,time), {
 	expires: 365,
 	path: '/'
 	});

	$("#sum").html(bowl_price(bowl,fruit,cup_fruit,time)+tobacco);
	$("#egg").val(bowl_price(bowl,fruit,cup_fruit,time)+tobacco);



});

$("input[name='fruit']").change(function() {
		var time = "<?php echo date('G')?>";
		var time = Number(time);
		var bowl = document.getElementById("select_bowl");
		var fruit = $('input[name=fruit]:checked').val();
		var cup_fruit =$('input[name=fruit_cup]:checked').val();
		var tobacco = $('input[name=tobacco]:checked').val();
		tobacco = Number(tobacco);



		function fruit_price(bowl,fruit,cup_fruit,time) {
		if ((bowl.value=="фрукт") && ((fruit=="яблоко")||(fruit=="банан")||(fruit=="апельсин")||(fruit=="лимон")||(fruit=="грейпфрут")) && ((time==9)||((time>9)&&(time<21)))) {
			return 800
		} else if ((bowl.value=="фрукт") && ((fruit=="яблоко")||(fruit=="банан")||(fruit=="апельсин")||(fruit=="лимон")||(fruit=="грейпфрут")) && ((time==21)||(time==22)||(time==23)||(time==24))) {
			return 1000
		} else if ((bowl.value=="фрукт") && ((fruit=="яблоко")||(fruit=="банан")||(fruit=="апельсин")||(fruit=="лимон")||(fruit=="грейпфрут")) && ((time==0)||((time>0)&&(time<3)))) {
			return 1500
		} else if ((bowl.value=="фрукт") && ((fruit=="яблоко")||(fruit=="банан")||(fruit=="апельсин")||(fruit=="лимон")||(fruit=="грейпфрут")) && ((time==3)||((time>3)&&(time<9)))) {
			return 2300
		}	else if ((bowl.value=="фрукт") && ((fruit=="ананас")||(fruit=="гранат")) && ((time==9)||((time>9)&&(time<21)))) {
			return 1000
		}	else if ((bowl.value=="фрукт") && ((fruit=="ананас")||(fruit=="гранат")) && ((time==21)||(time==22)||(time==23)||(time==24))) {
			return 1200
		}	else if ((bowl.value=="фрукт") && ((fruit=="ананас")||(fruit=="гранат")) &&((time==0)||((time>0)&&(time<3)))) {
			return 1800
		}	else if ((bowl.value=="фрукт") && ((fruit=="ананас")||(fruit=="гранат")) &&((time==3)||((time>3)&&(time<9)))) {
			return 2500
		}	
		
	}; //end func for fruit
	$.cookie('price_tobacco', fruit_price(bowl,fruit,cup_fruit,time), {
 	expires: 365,
 	path: '/'
 	});

	$("#sum").html(fruit_price(bowl,fruit,cup_fruit,time)+tobacco);
	$("#egg").val(fruit_price(bowl,fruit,cup_fruit,time)+tobacco);


	});
	



</script>


<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->


<script>

$(".new_bowls").change(function() {

if (document.getElementById("select_bowl_number").value=="1") {

let number = document.getElementById("select_bowl_number").value;
number = Number(number);
var tobacco_bowl_4 = $('input[name=tobacco_bowl_4]:checked').val();
tobacco_bowl_4 = Number(tobacco_bowl_4);
var tobacco_bowl_3 = $('input[name=tobacco_bowl_3]:checked').val();
tobacco_bowl_3 = Number(tobacco_bowl_3);
var tobacco_bowl_2 = $('input[name=tobacco_bowl_2]:checked').val();
tobacco_bowl_2 = Number(tobacco_bowl_2);
var tobacco_bowl_1 = $('input[name=tobacco_bowl_1]:checked').val();
tobacco_bowl_1 = Number(tobacco_bowl_1);


var sum_bowl_num = number*500 + tobacco_bowl_1;
let num_maker = $("#egg").val();
num_maker = Number(num_maker);

$("#sum").html(sum_bowl_num+num_maker);
$("#egg_bowl_num").val(sum_bowl_num);



} else if (document.getElementById("select_bowl_number").value=="2") {

let number = document.getElementById("select_bowl_number").value;
number = Number(number);
var tobacco_bowl_4 = $('input[name=tobacco_bowl_4]:checked').val();
tobacco_bowl_4 = Number(tobacco_bowl_4);
var tobacco_bowl_3 = $('input[name=tobacco_bowl_3]:checked').val();
tobacco_bowl_3 = Number(tobacco_bowl_3);
var tobacco_bowl_2 = $('input[name=tobacco_bowl_2]:checked').val();
tobacco_bowl_2 = Number(tobacco_bowl_2);
var tobacco_bowl_1 = $('input[name=tobacco_bowl_1]:checked').val();
tobacco_bowl_1 = Number(tobacco_bowl_1);


var sum_bowl_num = number*500 + tobacco_bowl_1 + tobacco_bowl_2;



let num_maker = $("#egg").val();
num_maker = Number(num_maker);

$("#sum").html(sum_bowl_num+num_maker);
$("#egg_bowl_num").val(sum_bowl_num);



} else if (document.getElementById("select_bowl_number").value=="3") {

let number = document.getElementById("select_bowl_number").value;
number = Number(number);
var tobacco_bowl_4 = $('input[name=tobacco_bowl_4]:checked').val();
tobacco_bowl_4 = Number(tobacco_bowl_4);
var tobacco_bowl_3 = $('input[name=tobacco_bowl_3]:checked').val();
tobacco_bowl_3 = Number(tobacco_bowl_3);
var tobacco_bowl_2 = $('input[name=tobacco_bowl_2]:checked').val();
tobacco_bowl_2 = Number(tobacco_bowl_2);
var tobacco_bowl_1 = $('input[name=tobacco_bowl_1]:checked').val();
tobacco_bowl_1 = Number(tobacco_bowl_1);


var sum_bowl_num = number*500 + tobacco_bowl_1 + tobacco_bowl_2 + tobacco_bowl_3;
$("#sum").html(sum_bowl_num+Number($("#egg").val()));
$("#egg_bowl_num").val(sum_bowl_num);


} else if (document.getElementById("select_bowl_number").value=="4") {

let number = document.getElementById("select_bowl_number").value;
number = Number(number);
var tobacco_bowl_4 = $('input[name=tobacco_bowl_4]:checked').val();
tobacco_bowl_4 = Number(tobacco_bowl_4);
var tobacco_bowl_3 = $('input[name=tobacco_bowl_3]:checked').val();
tobacco_bowl_3 = Number(tobacco_bowl_3);
var tobacco_bowl_2 = $('input[name=tobacco_bowl_2]:checked').val();
tobacco_bowl_2 = Number(tobacco_bowl_2);
var tobacco_bowl_1 = $('input[name=tobacco_bowl_1]:checked').val();
tobacco_bowl_1 = Number(tobacco_bowl_1);


var sum_bowl_num = number*500 + tobacco_bowl_1 + tobacco_bowl_2 + tobacco_bowl_3 + tobacco_bowl_4;
let num_maker = $("#egg").val();
num_maker = Number(num_maker);

$("#sum").html(sum_bowl_num+num_maker);
$("#egg_bowl_num").val(sum_bowl_num);


} else if (document.getElementById("select_bowl_number").value=="0") {

var sum_bowl_num = 0;
$("#egg_bowl_num").val(0);
let num_maker = $("#egg").val();
num_maker = Number(num_maker);

$("#sum").html(sum_bowl_num+num_maker);

}



});



</script>










<!-- Validator -->
<script>
	function validate() {	
var phone = $("#just_phone_number").val();

var re = /^\d[\d\(\)\ -]{4,14}\d$/;
var valid = re.test(phone);

if (valid) {
	return true}
else {
	output = 'Введите номер в формате +79261234567, 89261234567 или (495)1234567 !';
	$("#message").html(output);
	return false
}
}

	function validate2() {

var phone = $("#phone_number_main").val();

var re = /^\d[\d\(\)\ -]{4,14}\d$/;
var valid = re.test(phone);
if (valid) {
	return true}
else {
	output = 'Введите номер в формате +79261234567, 89261234567 или (495)1234567 !';
	$("#message2").html(output);
	return false
}
}
</script>

<!-- Footer START -->
<div class="footer">

	<div class="questions">
	<p>По любым вопросом обращаться:</p><br>
	<ul><li>233-655</li>
		<li>+7 950 839 0154 </li>
		<li>sanekss@inbox.ru </li>
	</ul>
</div>
			<div class="footer_info">	
<div class="mode">
	<p>Режим работы:<br> 24 часа в сутки<br>7 дней в неделю</p>
</div>

<div class="social">
	<p>Мы в социальных сетях:</p><br>
	<ul><li><a href="https://vk.com/no_name_dostavka_kaliana_izhevsk"><img src="images/vk.png" width="50" 
   height="50" alt="вконтактте"></a></li>
		<li><a href="https://instagram.com/no_name_arenda_kaliana_izh?igshid=alskrem57okj"><img src="images/inst.png" width="50" 
   height="50" alt="инстаграм"></a></li>
   <li><a href="https://t.me/no_name_arenda_kaliana_izh"><img src="images/tel.png" width="50" 
   height="50" alt="телеграм"></a></li>
	</ul>
</div>

<div class="footer_phone">
	<p>Сделать заказ:</p><br>
	<ul><li>233-655</li>
	</ul>
</div>

			</div>

		</div>


<!-- Footer END -->
</body>



</html>