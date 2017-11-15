var imgPlayer;
var btnRock;
var btnPaper;
var btnScissors;
var btnGo;
var btnReplay;
var computerChoice;
var playerChoice;
var resultdiv;

function init(){
	imgPlayer = document.getElementById("imgPlayer");
	btnRock = document.getElementById("btnRock");
	btnPaper = document.getElementById("btnPaper");
	btnScissors = document.getElementById("btnScissors");
	btnGo = document.getElementById('btnGo');
	btnReplay = document.getElementById('btnReplay');
	resultdiv = document.getElementById('resultdiv');
	deselectAll();
}
	
function select(choice){
	playerChoice = choice;
	imgPlayer.src = 'images/'+choice+'.png';
	deselectAll();
	if(choice == 'rock') btnRock.style.backgroundColor = '#888888';
	if(choice == 'paper') btnPaper.style.backgroundColor = '#888888';
	if(choice == 'scissors') btnScissors.style.backgroundColor = '#888888';
	
	btnGo.style.display = 'block';
}

function deselectAll(){
	btnPaper.style.backgroundColor = 'silver';
	btnScissors.style.backgroundColor = 'silver';
	btnRock.style.backgroundColor = 'silver';
	
	document.getElementById('lblRock').style.backgroundColor = '#EEEEEE';
	document.getElementById('lblPaper').style.backgroundColor = '#EEEEEE';
	document.getElementById('lblScissors').style.backgroundColor = '#EEEEEE';
}
function replay(){
	deselectAll();
	imgPlayer.src = 'images/question.png';
	document.getElementById('imgComputer').src = 'images/question.png'
	btnReplay.style.display = 'none';
	resultdiv.style.display = 'none';
}
function go(){
	var numChoice = Math.floor(Math.random()*3);
	var imgComputer = document.getElementById(('imgComputer'));
	var result;
	
	document.getElementById('lblRock').style.backgroundColor = '#EEEEEE';
	document.getElementById('lblPaper').style.backgroundColor = '#EEEEEE';
	document.getElementById('lblScissors').style.backgroundColor = '#EEEEEE';
	
	btnGo.style.display = 'none';
	btnReplay.style.display= 'block';
	
	if(numChoice == 0){
		computerChoice = 'rock';
		imgComputer.src	= 'images/rock.png';
		document.getElementById('lblRock').style.backgroundColor = 'yellow';
		if(playerChoice == 'rock') result = 0;
		else if(playerChoice == 'paper') result = 1;
		else if(playerChoice == 'scissors') result = 2;
	}
	else if(numChoice == 1){
		computerChoice = 'paper';
		imgComputer.src	= 'images/paper.png';
		document.getElementById('lblPaper').style.backgroundColor = 'yellow';
		if(playerChoice == 'paper') result = 0;
		else if(playerChoice == 'scissors') result = 1;
		else if(playerChoice == 'rock') result = 2;
	}
	else if(numChoice == 2){
		computerChoice = 'scissors';
		imgComputer.src	= 'images/scissors.png';
		document.getElementById('lblScissors').style.backgroundColor = 'yellow';
		if(playerChoice == 'scissors') result = 0;
		else if(playerChoice == 'rock') result = 1;
		else if(playerChoice == 'paper') result = 2;
	}
	if(result == 0){
		resultdiv.innerHTML = 'Tie!';
	}
	if(result == 1){
		resultdiv.innerHTML = 'You Win!';
		
	}
	if(result == 2){
		resultdiv.innerHTML = 'You Lose!';
	}
	resultdiv.style.display = 'block';
		
		
}

