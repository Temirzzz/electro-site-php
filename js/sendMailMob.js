//navbar collapse Material
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
});

//-------------------------------------------------------------

let userName = document.querySelector('.form__input__first');
let phone = document.querySelector('.form__input__second');
let textarea = document.querySelector('.form__textarea');


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
	}
}