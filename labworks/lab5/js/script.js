// alert('Hello World !');
// var check = confirm('Do you really want to delete?');
// alert(check);

// var name = prompt('Enter Your Name : ');
// if(name != '')
// 	console.log('Hello ' + name);

function changeToRed(){
	var title = document.getElementById('title');
	title.style.color = 'red';
}
function changeToBlack(){
	var title = document.getElementById('title');
	title.style.color = 'black';
}
function changeItems(){
	var news = document.getElementsByClassName('news')[0];
	var items = news.getElementsByTagName('li');
	for (var i = 0; i < items.length; i++) {
		items[i].innerHTML = 'Item ' + i;
	}
}
function myLoad(){
	var title = document.getElementById('title');
	title.addEventListener('mouseenter', changeToRed);
	title.addEventListener('mouseleave', changeToBlack);

	var button = document.getElementById('button');
	button.addEventListener('click', changeItems);
}

document.addEventListener('DOMContentLoaded', myLoad);