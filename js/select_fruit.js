$( document ).ready(function() {
$("#select_fruit").hide();
$("#select_cup_fruit").hide();
$("#bowl_number_div").hide();
//$("#fruit_image").hide();
var select = document.getElementById("select_bowl");
select.addEventListener('change', () => {
	if ((select.value)=="фрукт") {
	$("#select_cup_fruit").hide(1000);
	$("#bowl_number_div").hide(1000);
	$("#select_fruit").show(1000);
	//$("#fruit_image").show(1000);

	} else if (select.value=="стакан") {
	$("#select_fruit").hide(1000);
	$("#select_cup_fruit").show(1000);
	$("#bowl_number_div").show(1000);
	//$("#fruit_image").show(1000);

	} else if (select.value=="обычный") {
	$("#select_fruit").hide(1000);
	$("#select_cup_fruit").hide(1000);
		$("#bowl_number_div").hide(1000);
	//$("#fruit_image").hide(1000);
	}


});


	$("#bowl_2").hide();
	$("#bowl_3").hide();
	$("#bowl_4").hide();
	$("#bowl_1").hide();

var select_bowl_number= document.getElementById("select_bowl_number");
select_bowl_number.addEventListener('change', () => {
	if ((select_bowl_number.value)=="1") {
	$("#bowl_2").hide(1000);
	$("#bowl_3").hide(1000);
	$("#bowl_4").hide(1000);
	$("#bowl_1").show(1000);
	//$("#fruit_image").show(1000);

	} else if ((select_bowl_number.value)=="2") {
	$("#bowl_3").hide(1000);
	$("#bowl_4").hide(1000);
	$("#bowl_1").show(1000);
	$("#bowl_2").show(1000);
	//$("#fruit_image").show(1000);

	} else if ((select_bowl_number.value)=="3") {
	$("#bowl_4").hide(1000);
	$("#bowl_1").show(1000);
	$("#bowl_2").show(1000);
	$("#bowl_3").show(1000);
	//$("#fruit_image").show(1000);

	} else if ((select_bowl_number.value)=="4") {
	$("#bowl_1").show(1000);
	$("#bowl_2").show(1000);
	$("#bowl_3").show(1000);
	$("#bowl_4").show(1000);
	//$("#fruit_image").show(1000);

	} else if ((select_bowl_number.value)=="0") {
	$("#bowl_1").hide(1000);
	$("#bowl_2").hide(1000);
	$("#bowl_3").hide(1000);
	$("#bowl_4").hide(1000);
	//$("#fruit_image").show(1000);

	}


});

});