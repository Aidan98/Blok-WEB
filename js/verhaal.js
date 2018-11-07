var addtxt1 = document.querySelector('article p');

addtxt1.addEventListener("mouseout", function( event ){
  event.target.classList.add('text2', 'text1');
}, false);

addtxt1.addEventListener("mouseover", function( event ){
  event.target.classList.remove('text2', 'text1');
}, false);

var addtxt2 = document.querySelector('p:nth-child(2)');

addtxt2.addEventListener("mouseout", function( event ){
  event.target.classList.add('text3', 'text4');
}, false);

addtxt2.addEventListener("mouseover", function( event ){
  event.target.classList.remove('text3', 'text4');
}, false);


var addtxt1 = document.querySelector('p:nth-child(3)');


addtxt1.addEventListener("mouseover", function( event ){
  event.target.classList.remove('text5', 'text6');
}, false);

addtxt1.addEventListener("mouseout", function( event ){
  event.target.classList.add('text5', 'text6');
}, false);
