<div class="left upcoming item">
	<div class="wrapp">
		<div class="">

			<div id="partners_list">
				<?php for($i = 0; $i < 12; $i++):?>
				<div data-info='{"latlng":[48.46442771287488, 35.043768882751465]}' class="partner"><img src="/images/logo.jpg" /></div>
				<?php endfor;?>
				<div class="clearer"></div>
			</div>

			<div id="google_maps_partner"></div>

		</div>
	</div>
</div>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">
var createMap = function () {

	var latlng = new google.maps.LatLng(48.46442771287488, 35.043768882751465);
	 
	var myOptions = {
		zoom: 14,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};	

	var map = new google.maps.Map(document.getElementById("google_maps_partner"), myOptions);	

	var marker = new google.maps.Marker({
	    position: latlng, 
	    map: map,
	    title:""
	});

	var infowindow = new google.maps.InfoWindow({ 
		content: '',
		size: new google.maps.Size(50, 50),
		position: ''
	});

	google.maps.event.addListener(marker, 'click', function() {
	    infowindow.open(map, marker);
	});
}
</script>