/** @format */
//const submit = document.querySelector('.submit');
//const date = document.querySelector('#date');
//const machine = document.querySelector('#machine');
const formUpdate = document.querySelector('#form-update');

formUpdate.addEventListener('submit', (e) => {
	e.preventDefault();
	const date = document.querySelector('#date').value;
	const machine = document.querySelector('#machine').value;
	const kBase = document.querySelector('#knowledge').value;
	const update = document.querySelector('#reason').value;
	console.table(date, machine, kBase, update);
});
