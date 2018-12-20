function initMap() {
	var uluru = {
		lat: 40.1533693,
		lng: 44.4185272
	};

	var mapOptions = {
		zoom: 12,
		center: uluru
	}

	var myMap = new google.maps.Map(document.getElementById("map"), mapOptions);

	var baseUrl = $('main').attr('data-base-url'); 

	var customIcon = baseUrl + '/images/speech-bubble.png';

	var marker = new google.maps.Marker({
		position: uluru,
		map: myMap,
		icon: customIcon
	});
}