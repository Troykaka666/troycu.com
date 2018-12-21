/*
GAME RULES:

- The game has 2 players, playing in rounds
- In each turn, a player rolls a dice as many times as he whishes. Each result get added to his ROUND score
- BUT, if the player rolls a 1, all his ROUND score gets lost. After that, it's the next player's turn
- The player can choose to 'Hold', which means that his ROUND score gets added to his GLBAL score. After that, it's the next player's turn
- The first player to reach 100 points on GLOBAL score wins the game

*/







// Gloabl Variables
var scores, roundScore, activePlayer,newScore;
var gamePlaying;

init();



//
//querySelector('id or class from css')
//textContent = the content on html that wishs to change
//innerHTML = add html code as string in js file

//var x = document.querySelector('#score-0').textContent;

document.querySelector('.btn-roll').addEventListener('click', function(){
  //Do something here
  if (gamePlaying) {
      //  1.Random number
    var dice = Math.floor(Math.random()*6) + 1;
    // 2.Display the result
    var diceDome = document.querySelector('.dice');
    diceDome.style.display = 'block';
    diceDome.src = 'dice-' + dice + '.png'
    // 3.Update the round score IF the rolled number was Not a 1
    if(dice !== 1){
      //add score
      roundScore += dice;
      document.querySelector('#current-' + activePlayer).textContent = roundScore;
    } else {
      nextPlayer();
      //document.querySelector('.player-0-panel').classList.remove('active');
      //document.querySelector('.player-1-panel').classList.add('active');
    }
  }
});
document.querySelector('.btn-enter').addEventListener('click',function(){
  newScore = document.getElementById('.input_value').elements["newScore"].value;
})

document.querySelector('.btn-hold').addEventListener('click',function(){
  if (gamePlaying) {
    //add CURRENT score to global scores
    scores[activePlayer] += roundScore;

    //update the UI
    document.querySelector('#score-' + activePlayer).textContent = scores[activePlayer];

    //Check if player won the game
    if(scores[activePlayer] >= newScore){
      document.querySelector('#name-' + activePlayer).textContent = 'Winner Wooho';
      document.querySelector('.dice').src ='win.jpg';
      document.querySelector('.player-' + activePlayer + '-panel').classList.add('winner');
      document.querySelector('.player-' + activePlayer + '-panel').classList.remove('active');
      gamePlaying = false;
    }else {
        //Next Player
      nextPlayer();
    }
  }
})

function nextPlayer(){
  //Next player
  activePlayer === 0 ? activePlayer = 1 : activePlayer = 0;
  roundScore = 0;

  document.getElementById('current-0').textContent = '0';
  document.getElementById('current-1').textContent = '0';

  document.querySelector('.player-0-panel').classList.toggle('active');
  document.querySelector('.player-1-panel').classList.toggle('active');
}

document.querySelector('.btn-new').addEventListener('click',init);

function init(){
  scores = [0,0];
  activePlayer = 0;
  roundScore = 0;
  gamePlaying = true;
  newScore = 10;

  document.querySelector('.dice').style.display = 'none';

  document.getElementById('score-0').textContent = '0';
  document.getElementById('score-1').textContent = '0';
  document.getElementById('current-0').textContent = '0';
  document.getElementById('current-1').textContent = '0';
  document.querySelector('#name-0').textContent = 'Player 1';
  document.querySelector('#name-1').textContent = 'Player 2';
  document.querySelector('.player-0-panel').classList.remove('winner');
  document.querySelector('.player-1-panel').classList.remove('winner');
  document.querySelector('.player-0-panel').classList.remove('active');
  document.querySelector('.player-1-panel').classList.remove('active');
  document.querySelector('.player-0-panel').classList.add('active');
}
