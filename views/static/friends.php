<?php
	$model = new Model_Place();
	$partner_ids = "263, 156, 299, 346, 281";
	$q = "SELECT * FROM `jos_places` WHERE id_place IN({$partner_ids})";
	$partnerList = DB::query(Database::SELECT, $q)->as_object()->execute()->as_array();
?>
<div class="left upcoming item">
	<div class="wrapp">
		<div>
			<h1 class="color-gray ttl">Наши друзья</h1>
			<div id="partners_list">
				<?php foreach($partnerList as $key => $partner):
					list($x, $y, $z) = explode(":", $partner->google);
				?>
				<div data-rel="<?php echo $key?>" class="partner"><img title="<?php echo addslashes($partner->title)?>" src="/images/partners/partner-<?php echo $partner->id_place?>.jpg" /></div>
				<?php endforeach;?>
				<div class="clearer"></div>
			</div>

			<div id="google_maps_partner"></div>

		</div>
	</div>
</div>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">
var arrMarkers = []
	, arrInfoWindows = []
	, map;

var createMap = function () {

	var latlng = new google.maps.LatLng(48.46442771287488, 35.043768882751465);
	 
	var myOptions = {
		zoom: 14,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};	

	map = new google.maps.Map(document.getElementById("google_maps_partner"), myOptions);	

	<?php foreach($partnerList as $key => $partner):
		list($x, $y, $z) = explode(":", $partner->google);
		$href = Route::url('place', array('controller' => 'places', 'action' => 'show', 'item_alias' => $partner->alias));
	?>

	var marker = new google.maps.Marker({
	    position: new google.maps.LatLng(<?php echo $y?>, <?php echo $x?>), 
	    map: map,
	    title:"<?php echo addslashes($partner->title)?>",
	    icon: '/images/marker.png'
	});

	var desc = "<p style='text-align: center'><img src='/images/partners/partner-<?php echo $partner->id_place?>.jpg' /></p>";
			desc += "<p><b>Адрес</b>: <?php echo $partner->address?></p>";

			<?php if($partner->tel):?>
				desc += "<p><b>Телефон</b>: <?php echo $partner->tel?></p>";
			<?php endif;?>

			<?php if($partner->email):?>
				desc += "<p><b>Email</b>: <?php echo $partner->email?></p>";
			<?php endif;?>

			desc += "<p><a href='<?php echo $href?>'><b>Посмотреть на сайте</b></a></p>";

	attachInfoWindow(map, marker, desc, <?php echo $key?>);

	<?php endforeach;?>
}

function attachInfoWindow(map, marker, desc, key){
	var infowindow = new google.maps.InfoWindow({ 
		content: desc,
		size: new google.maps.Size(50, 50)
	});

	google.maps.event.addListener(marker, 'click', function() {
	    infowindow.open(map, marker);
	});	

	arrMarkers[key] = marker;
	arrInfoWindows[key] = infowindow;
}

createMap();

</script>