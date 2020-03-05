let formBody = document.querySelector('.body-wrapper');
let userName = document.querySelector('.form__input__first');
let phone = document.querySelector('.form__input__second');
let textarea = document.querySelector('.form__textarea');


document.addEventListener('keydown', (e) => {
    if (e.keyCode == 27) {
        formBody.classList.add('hide');
    }
})   

document.addEventListener('click', (e) => {
    if (e.target.className == 'send__app') {
        formBody.classList.remove('hide');
    }
    if (e.target.classList == 'body-wrapper') {
        formBody.classList.add('hide');
    }
})

document.querySelector('.close__btn').onclick = hideModal;

document.querySelector('.form__send__btn').onclick = (e) => {    
    e.preventDefault();    
    if (userName.value == '' || phone.value == '' || textarea.value == '') {
        chipsCreate ();
		return false;	
	}
	else {
		fetch("./applications.php", {
			method: "POST",
			headers: {
				'Content-Type': 'application/x-www-form-urlencoded',
			},
			body: JSON.stringify({
				'firstInp':  userName.value,
                'secondInp': phone.value,
                'textArea' : textarea.value
			})
		// }).then(response => response.text()).then(response => {
        //     console.log(response)           
        // });
        }).then((response) => {
            //console.log(response.status);
            if (response.status == 200) {
                succsess ();
            }
        })    
       
        hideModal ();
	}
}

function hideModal (e) {  
    formBody.classList.add('hide');
}
