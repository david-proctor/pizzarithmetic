var dudes = 0;
var ladies = 0;

function mod(who, change){
	if(who == 1){
		dudes += change;
		document.getElementById('dudes').innerHTML = dudes;
	} else {
		ladies += change;
		document.getElementById('ladies').innerHTML = ladies;
	}
}

function secret_algorithm(){
	
	var magicNumber = (dudes * 5.0) + (ladies * 3.0);
	
	var small = 0;
	var medium = 0;
	var large = 0;
	
	magicNumber = Math.round(magicNumber);
	
	if(magicNumber <= 6){
		small = 1;
	} else if(magicNumber <= 8){
		medium = 1;
	} else if(magicNumber <= 10){
		large = 1;
	} else if(magicNumber <= 16){
		medium = 2;
	} else if(magicNumber <= 24){
		medium = 3;				
	} else {
		large = Math.round(magicNumber / 10) + 1;
	}
	
	var out;
	
	if(large > 0){
		out = "" + large + " large";
	} else if(medium > 0){
		out = "" + medium + " medium";
	} else if(small > 0){
		out = "" + small + " small";
	}
	
	if(dudes + ladies == 0){
		document.getElementById('output').innerHTML = "You're going to need people before you eat those pizzas.";
	} else {
		document.getElementById('output').innerHTML = "You need " + out + " pizzas.";
	}
	
}

function pizza_gif(){

	document.getElementById('mainGif').setAttribute("src", "images/pizzadog.gif");
	
	var number = Math.floor((Math.random() * 6) +1);
	var hiddenText = "";
	
	switch(number){
		case 1:
			document.getElementById('mainGif').setAttribute("src", "images/breakingbadpizza.gif");
			hiddenText = "Walter would feel better if he ate that pizza";
			break;
		case 2:
			document.getElementById('mainGif').setAttribute("src", "images/homerpizza.gif");
			hiddenText = "I wish I could bury myself in pizza too";
			break;
		case 3:
			document.getElementById('mainGif').setAttribute("src", "images/pizzadog.gif");
			hiddenText = "I would eat this dog";
			break;
		case 4:
			document.getElementById('mainGif').setAttribute("src", "images/pizzavinyl.gif");
			hiddenText = "This is not good for your pizza or your turntable";
			break;
		case 5:
			document.getElementById('mainGif').setAttribute("src", "images/spacepizza.gif");
			hiddenText = "In space nobody can hear your stomach rumble. (for pizza)";
			break;
		case 6:
			document.getElementById('mainGif').setAttribute("src", "images/arrestedpizza.gif");
			hiddenText = "pizza. the final fronteir";
			break;					
		default:
			document.getElementById('mainGif').setAttribute("src", "images/whoops.gif");
			hiddenText = "We done goofed. This number was generated: " + number;
	}
	
	document.getElementById('mainGif').setAttribute("alt", hiddenText);
	document.getElementById('mainGif').setAttribute("title", hiddenText);
	
}