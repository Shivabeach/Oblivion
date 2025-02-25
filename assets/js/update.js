/** @format */
const submit = document.querySelector('.submit');
const formUpdate = document.querySelector('#form_update');

formUpdate.addEventListener('submit', (e) => {
	e.preventDefault();
	const date = document.querySelector('#date').value;
	const machine = document.querySelector('#machine').value;
	const Kbase = document.querySelector('#Kbase').value;
	const update = document.querySelector('#reason').value;
	//console.table(date, machine, Kbase, update);
});
$(function () {
	'use strict';
	$(formUpdate).on('submit', function (e) {
		e.preventDefault();
		var that = $(this),
			url = that.attr('action'),
			type = that.attr('method'),
			data = {};
		that.find('[name]').each(function (index, value) {
			var that = $(this),
				name = that.attr('name'),
				value = that.val();
			data[name] = value;
		});
		$.ajax({
			url: url,
			type: type,
			data: data,
			success: function (response) {
				$('#shows').html(response).fadeOut(7000);
			},
			error: function (response) {
				$('#shows').html(response).fadeOut(7000);
			},
		});
		return false;
	});
});

// window.addEventListener('beforeunload', (e) => {
// 	e.preventDefault();
// 	return (e.returnValue = 'Are you sure you want to close?');
// });
