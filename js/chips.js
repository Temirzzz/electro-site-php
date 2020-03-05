function succsess () {
	let modalWin = document.createElement('div');
	modalWin.classList.add('body-wrapper')
	let chipsMod = document.createElement('div');
	chipsMod.classList.add('chips-mod');
	let message = document.createTextNode("Письмо было успешно отправлено!");
	chipsMod.appendChild(message);
	modalWin.appendChild(chipsMod);
	let chiepsField = document.querySelector('.chieps-field');
	chiepsField.appendChild(modalWin);
	
	setTimeout(()=> {
		modalWinRemove (modalWin);
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


function modalWinRemove (modalWin) {
	modalWin.remove ();
}

function chipsRemove (chips) {
	chips.remove ();
}
