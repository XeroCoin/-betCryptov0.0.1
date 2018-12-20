var myButton = document.querySelector(".switchaccounts");
var myHeading = document.querySelector('.welcomesign');
var myAccount = document.querySelector('.myaccount');

function setUserName() {
  var myName = prompt('Please enter your Username.');
  localStorage.setItem('name', myName);
  myHeading.textContent = 'Welcome, ' + myName;
  myAccount.textContent = 'Account Info for ' + myName;
}

if(!localStorage.getItem('name')) {
  setUserName();
} else {
  var storedName = localStorage.getItem('name');
  myHeading.textContent = 'Welcome, ' + storedName;
  myAccount.textContent = 'Account Info for ' + storedName;
}

myButton.onclick = function() {
  setUserName();
}
