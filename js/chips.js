function succsess () {
	let chips = document.createElement('div');
	chips.classList.add('chips');
	let message = document.createTextNode("Письмо было успешно отправлено!");
	chips.appendChild(message);
	let chiepsField = document.querySelector('.chieps-field');
	chiepsField.appendChild(chips);
	
	setTimeout(()=> {
		chipsRemove (chips);
	}, 4000)
}

function chipsCreate () {
	let chips = document.createElement('div');
	chips.classList.add('chips');
	let message = document.createTextNode("Заполните поля!");
	chips.appendChild(message);
	let chiepsField = document.querySelector('.chieps-field');
	chiepsField.appendChild(chips);
	
	setTimeout(()=> {
		chipsRemove (chips);
	}, 3000)
}

function chipsRemove (chips) {
	chips.remove ();
}
