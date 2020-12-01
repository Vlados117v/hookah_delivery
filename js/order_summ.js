

		var bowl = document.getElementById("select_bowl");
		var fruit = document.getElementById("select_fruit_pr");
		var cup_fruit =document.getElementById("select_cup_fruit_pr");
////////// default price
var time = "<?php echo date('G')?>";

if ((time==9)||((time>9)&&(time<21))) {
$("#sum").html(500);	
} else if ((time==21)||(time==22)||(time==23)||(time==24)) {
$("#sum").html(700);
} else if ((time==0)||((time>0)&&(time<3))) {
$("#sum").html(1200);
} else if ((time==3)||((time>3)&&(time<9))) {
$("#sum").html(2000);
}

///////// end default price

bowl.addEventListener('change', () => {
		var time = "<?php echo date('G')?>";
		var time = Number(time);
		console.log(time)
		var bowl = document.getElementById("select_bowl");
		var fruit = document.getElementById("select_fruit_pr");
		var cup_fruit =document.getElementById("select_cup_fruit_pr");

		function bowl_price(bowl,fruit,cup_fruit,time) {
		if ((bowl.value=="обычный") && ((time==9)||((time>9)&&(time<21)))) {
			return 500
		} else if ((bowl.value=="обычный") && ((time==0)||((time>0)&&(time<3)))) {
			return 1200
		}else if ((bowl.value=="обычный") && ((time==3)||((time>3)&&(time<9)))) {
			return 2000
		} else if ((bowl.value=="обычный") && ((time==21)||(time==22)||(time==23)||(time==24))){
			return 700
		} else if ((bowl.value=="фрукт") && ((fruit.value=="яблоко")||(fruit.value=="апельсин")||(fruit.value=="лимон")||(fruit.value=="грейпрут")) && ((time==9)||((time>9)&&(time<21)))) {
			return 800
		} else if ((bowl.value=="фрукт") && ((fruit.value=="яблоко")||(fruit.value=="апельсин")||(fruit.value=="лимон")||(fruit.value=="грейпрут")) && ((time==21)||(time==22)||(time==23)||(time==24))) {
			return 1000
		} else if ((bowl.value=="фрукт") && ((fruit.value=="яблоко")||(fruit.value=="апельсин")||(fruit.value=="лимон")||(fruit.value=="грейпрут")) && ((time==0)||((time>0)&&(time<3)))) {
			return 1500
		} else if ((bowl.value=="фрукт") && ((fruit.value=="яблоко")||(fruit.value=="апельсин")||(fruit.value=="лимон")||(fruit.value=="грейпрут")) && ((time==3)||((time>3)&&(time<9)))) {
			return 1800
		} else if ((bowl.value=="стакан") && ((cup_fruit.value=="ананас")||(cup_fruit.value=="гранат")) && ((time==9)||((time>9)&&(time<21)))) {
			return 600
		}	
		
	} //end func for bowl

	$("#sum").html(bowl_price(bowl,fruit,cup_fruit,time));

	console.log(bowl_price(bowl,fruit,cup_fruit,time));
});

fruit.addEventListener('change', () => {
		var time = "<?php echo date('G')?>";
		var time = Number(time);
		var bowl = document.getElementById("select_bowl");
		var fruit = document.getElementById("select_fruit_pr");
		var cup_fruit =document.getElementById("select_cup_fruit_pr");

		function fruit_price(bowl,fruit,cup_fruit,time) {
		if ((bowl.value=="фрукт") && ((fruit.value=="яблоко")||(fruit.value=="апельсин")||(fruit.value=="лимон")||(fruit.value=="грейпрут")) && ((time==9)||((time>9)&&(time<21)))) {
			return 800
		} else if ((bowl.value=="фрукт") && ((fruit.value=="яблоко")||(fruit.value=="апельсин")||(fruit.value=="лимон")||(fruit.value=="грейпрут")) && ((time==21)||(time==22)||(time==23)||(time==24))) {
			return 1000
		} else if ((bowl.value=="фрукт") && ((fruit.value=="яблоко")||(fruit.value=="апельсин")||(fruit.value=="лимон")||(fruit.value=="грейпрут")) && ((time==0)||((time>0)&&(time<3)))) {
			return 1500
		} else if ((bowl.value=="фрукт") && ((fruit.value=="яблоко")||(fruit.value=="апельсин")||(fruit.value=="лимон")||(fruit.value=="грейпрут")) && ((time==3)||((time>3)&&(time<9)))) {
			return 1800
		}	else if ((bowl.value=="фрукт") && ((fruit.value=="ананас")||(fruit.value=="гранат")) && ((time==9)||((time>9)&&(time<21)))) {
			return 1000
		}	else if ((bowl.value=="фрукт") && ((fruit.value=="ананас")||(fruit.value=="гранат")) && ((time==21)||(time==22)||(time==23)||(time==24))) {
			return 1200
		}	else if ((bowl.value=="фрукт") && ((fruit.value=="ананас")||(fruit.value=="гранат")) &&((time==0)||((time>0)&&(time<3)))) {
			return 1800
		}	else if ((bowl.value=="фрукт") && ((fruit.value=="ананас")||(fruit.value=="гранат")) &&((time==3)||((time>3)&&(time<9)))) {
			return 2500
		}	
		
	}; //end func for fruit

	$("#sum").html(fruit_price(bowl,fruit,cup_fruit,time));
	console.log(fruit_price(bowl,fruit,cup_fruit,time));
	});

