$(document).ready(function () {
	// set form id
	let formId = '#leadForm';
	//set access token
	let token = 'scTWd2M0Ju06I2mWyCaHoRE4MmZrusX72ig4AHEFu6s';
	// set api endpoint
	let serverUrl = 'http://affiliate2/api/lead';
	
	$(formId).on('submit', function ( event ) {
		// prevent submit
		event.preventDefault();
		// get URLs params and prepare params for parsing
		let queryString  = document.location.search;
		let urlParams = new URLSearchParams(queryString);
		// get params from form
		let formData = $(formId).serializeArray();
		// prepare data for sending, creating array of pair key,value
		let arr = {};
		formData.forEach(element => {
			arr[element.name] = element.value
		});
		// adding existing URL params to params from form
		for (let param of urlParams) {
			arr[param[0]] = param[1];
			console.log(param);
		}
		console.log(arr);
		// send params to api endpoint
		$.ajax({
			url: serverUrl,
			method: 'post',
			//set headers
			beforeSend: function (xhr) {
				xhr.setRequestHeader("Authorization", 'Bearer ' + token);
			},
			contentType: 'application/json',
			data: JSON.stringify(arr),
		});
	});

});