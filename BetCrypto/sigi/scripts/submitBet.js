

var amount = document.getElementById('betAmount');
var form = document.getElementById('form');
var betOut = document.getElementById('betForm');
var recform = document.getElementById('recordform');


function record(e){
  var clicked = e.innerHTML;
  var sibling = e.parentNode.parentNode;
  if(sibling.classList.contains('over')){
    sibling = sibling.nextElementSibling.innerHTML;
  }
  else{
    sibling = sibling.previousElementSibling.innerHTML;
  }
  localStorage.setItem('whichClicked', clicked);
  localStorage.setItem('whichBet', sibling)

}


$(document).ready(function(){
  var assign = localStorage.getItem('whichClicked');
  var myBet = localStorage.getItem('whichBet');
  var pageHeader = document.createElement('h6');
  pageHeader.setAttribute("class","submitBetHeader")
  pageHeader.innerHTML = "You chose the " +  assign + " " + "for the following wager:  " + myBet;
  betOut.appendChild(pageHeader);
});

$('#confirm').click(function(){
  if(amount.value.length == 0){
    alert("Please enter a bet amount.")
  }
  else{
    var myBet = localStorage.getItem('whichBet');
    var newDiv = document.createElement('div');
    var newP = document.createElement('p');
    var newP2 = document.createElement('p');
    var newButton = document.createElement('button');
    newDiv.setAttribute("class", "submit-form");
    newButton.setAttribute("class", "btn btn-primary rec");
    newButton.setAttribute("type", "submit");
    newButton.setAttribute("value", "Submit");
    $('.rec').attr("name", "recBet");
    newButton.innerHTML = "Submit"
    form.appendChild(newDiv);
    newDiv.appendChild(newP);
    newDiv.appendChild(newP2);
    newDiv.appendChild(newButton);
    newP.innerHTML = myBet;
    newP2.innerHTML = amount.value;
    recform.appendChild(newDiv);
    $(this).prop('disabled', true);
  }

});
