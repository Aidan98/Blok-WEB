	var thumbImg = document.querySelectorAll('section article img');
	var art = document.querySelectorAll('section article');
	var iconImg = document.querySelectorAll('.icon');
	var loadImage = document.querySelectorAll('.loadingImg');
	for (var i = 0; i < thumbImg.length; i++) {
		thumbImg[i].style.visibility = 'hidden';
	}

	for (var i = 0; i < loadImage.length; i++) {
		loadImage[i].style.visibility = 'visible';
	}

	for (var i = 0; i < iconImg.length; i++) {
		iconImg[i].style.visibility = 'visible';
	}

setTimeout(()=>{
  for (var i = 0; i < loadImage.length; i++) {
		loadImage[i].style.display = 'none';
	}
  for (var i = 0; i < thumbImg.length; i++) {
		thumbImg[i].style.visibility = 'visible';
	}
},4000);

var iconAdd = document.querySelector('header section article footer .icon:nth-of-type(2)');
// var add = 0;
function addAction(){
	// add++;
	iconAdd.classList.add('addIcon');
	document.querySelector('div').style.display = 'flex';
	// if (add == 1) {
	// 	var listArt = document.querySelector('.myList article');
	// 	listArt.style.display = 'block';
	// } 
}

iconAdd.addEventListener('click', addAction);


