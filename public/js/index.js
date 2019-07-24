const d = document;

const maintenance = {
	message: '',
	forms: null,
	load(){
		this.forms = d.querySelectorAll('.maintenance');
		if(this.forms.length){
			let buttons = d.querySelectorAll('.maintenance .submit');
			for(let i = 0; i < this.forms.length; i++){
				buttons[i].addEventListener('click', function(e){
					e.preventDefault();
					maintenance.setModal(maintenance.forms[i]);
				});
			}
		}
	},setModal(form){
		this.message = form.dataset.text;
		let div = d.createElement('div');
		div.id = "notification";
		form.appendChild(div);
			let p = d.createElement('p');
			p.innerHTML = this.message;
			div.appendChild(p);

			let i = d.createElement('i');
			i.className = 'fas fa-times';
			div.appendChild(i);

		notification.open();
	},
};

const notification = {
	open(){
		let modal = d.querySelector('#notification'),
			button =d.querySelector('#notification i');

		modal.style.bottom = '4rem';
		button.addEventListener('click', function(e){
			e.preventDefault();
			notification.close();
		});

		setInterval(function(){
			notification.close();
			clearInterval(this);
		}, 10000);
	},close(){
		let modal = d.querySelector('#notification');

		modal.style.bottom = '-10rem';
	},
};

d.addEventListener('DOMContentLoaded', function(){
	maintenance.load();
});