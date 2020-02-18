function drawNumbers(){
	var table = document.getElementsByTagName('table');
	if(table.length > 0){
		table[0].parentNode.removeChild(table[0]);
	}

	var table = document.createElement('table');
	var tr = document.createElement('tr');
	table.appendChild(tr);
	for (var i = 0; i < 5; i++) {
		var r = Math.ceil(Math.random() * 20);
		var td = document.createElement('td');
		var textNode = document.createTextNode(r);
		td.appendChild(textNode);
		tr.appendChild(td);
	}
	document.getElementsByTagName('body')[0].appendChild(table);
}
function myLoad(){
	var btn = document.getElementsByTagName('button');
	btn[0].addEventListener('click', drawNumbers);
	// when button is clicked, get all the tds and generate a random number 
	// between 1-20 each time store inside each td
	// now we are done
}
document.addEventListener('DOMContentLoaded', myLoad);