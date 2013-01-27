<?php
	$item->title = ($item->dop_title) ? $item->dop_title : $item->title; 
	
	$item->title = str_replace('\'', '"', $item->title);
		
  if ($item->google) {
    list($g_x, $g_y, $g_zoom) = explode(':', $item->google);
  }  	
	$item->web = (preg_match("/http/", $item->web)) ? $item->web : "http://{$item->web}";

	HTML::replaceImg(&$item->desc);
  $qr_text = "{$item->title} http://anons.dp.ua" . $_SERVER['REQUEST_URI'];
?>
<div class="left upcoming item" itemscope maincontentofpage itemtype="http://schema.org/Place">
	<div class="wrapp fix_right_padding">
    	<?php 
    		if ($item->icons):
    			$icons = explode(',', $item->icons);
    			echo '<div class="event_cat">';
    			$icons_title = explode(',', $item->icons_title);
    				foreach ($icons as $key => $icon):
    					$image = HTML::MegaImg('events/category', $icon, null, null, $icons_title[$key]);
    					echo "<span>{$image}</span>";
    				endforeach;
    			echo '</div>';
    		endif;
    	?>
    
    <?php if($has_archive_events):?>
    <a style="text-decoration:none" href="/places/archive/<?php echo $item->alias?>">
      <div class="event_day info">
        <span class="e_day">архив</span>
        <span class="e_month">событий</span>
      </div>
    </a>
  <?php endif;?>

		<h1><p class="event_title" itemprop="name"><?php echo $item->title?></p></h1>
    <meta itemprop="address" content="<?php echo $item->address?>">
    <meta itemprop="telephone" content="<?php echo strip_tags($item->tel);?>">
    <div class="img_wrapp">
		<?php echo ($item->image) 
			? HTML::MegaImg('events/places', $item->image, 'event_img', 'float: left', $item->title, $anons_config['EVENT_IMG_DESC'])
			: HTML::MegaImg('events', 'no-image.gif', 'event_img', 'float: left');
		?>
    </div>

<?php if ($relatedEvents):?>
<div class="more_info_wrapp">
    <h3 class="color-orang-imp">Ближайшие события</h3>
    <?php
        foreach ($relatedEvents as $event):
          $eventHref = Route::url('event', array("controller" => "events", "action" => "show", "cat_alias" => $event->catAlias, "item_alias" => $event->alias));
          list($day, $month, $year, $time) = explode(' ', date('d n Y H:i', strtotime($event->date)));
          $month = $anons_config['month'][$month];
    ?>

    <a href="<?php echo $eventHref?>" title="<?php echo $event->title?>"><?php echo $event->title?></a>
    <p class="mg_b5px small">
        <?php echo $day?> <?php echo $month?> в <?php echo substr($event->time, 0, -3)?>
    </p>

    <?php endforeach;?>
</div>
<?php endif;?>

            		<div class="event_info">
            		  <div id="qrcode"><?php echo HTML::QRCode($qr_text, $anons_config['allow_qr'], array("size" => "120x120"));?></div> 		
            			<?php if ($item->address):?>
            			<p class="titl">Адрес:</p> 
            			<p><?php echo $item->address;?> <?php if (isset($g_x) && isset($g_y) && isset($g_zoom)):?>&rarr; <a href="#" class="maps" id="show_google_maps">показать на карте</a><?php endif;?></p>
            			<?php endif;?>
            			
            			<?php if ($item->tel):?>
            			<p class="titl">Телефоны:</p> 
            			<p><?php echo strip_tags($item->tel);?></p>
            			<?php endif;?>

            			<?php if ($item->web && $item->web != 'http://'):?>
                  <?php if (!preg_match('/http/', $item->web)) echo "http://{$item->web}";?>
            			<p class="titl">Сайт:</p>
            			<noindex><p><a href="<?php echo $item->web; ?>" target="_blank"><?php echo $item->web?></a></p></noindex>
            			<?php endif;?>  
            			
            			<?php if ($item->email && $item->show_email):?>
            			<p class="titl">Email:</p>
            			<noindex><p><a href="mailto:<?php echo $item->email?>"><?php echo $item->email?></a></p></noindex>
            			<?php endif;?>  
            			         			
                <div class="event_text">
                  <?php echo $item->desc?>
									<div style="margin-top: 10px;">
	            			<span id="social_nets"></span>
<?php if($anons_config['show_social_buttons']):?>
                    <span class="user_like" style="position: relative;"><?php echo $count_users_like?></span>
	            			<?php if(in_array($item->id_place, $my_places_ids)):?>
	            				<span class="place_go button disabled" id="place_go_<?php echo $item->id_place?>">Я передумал(а)</span>
	            			<?php else:?>
	            				<span class="place_go button" id="place_go_<?php echo $item->id_place?>">Мне нравится</span>
	            			<?php endif;?>
<?php endif;?>
	            		</div>             
                </div>  
 
            			       			
            		</div>
              	
                        
            		<div class="clearer"></div>
            		
            		
            		<?php if (isset($g_x) && isset($g_y) && isset($g_zoom)):?>
            			<div id="google_maps" class="hide"></div>
            		<?php endif;?>

                    <?php if(isset($use_vkontakte_comment)):?>
                        <script type="text/javascript">
                          VK.init({apiId: 3192678, onlyWidgets: true});
                        </script>

                        <!-- Put this div tag to the place, where the Comments block will be -->
                        <div class="vkontakte_comment_wrapper"><div id="vk_comments"></div></div>
                        <script type="text/javascript">
                        VK.Widgets.Comments("vk_comments", {limit: 10, width: "600", attach: false});
                        </script>
                    <?php endif;?> 
                
            	</div>
          	
          	<?php if (false && $relatedEvents):?>
          		<div class="related_event_title">Ближайшие события</div>
          		<?php 
          			foreach ($relatedEvents as $event):
                  $eventHref = Route::url('event', array("controller" => "events", "action" => "show", "cat_alias" => $event->catAlias, "item_alias" => $event->alias));
          				list($day, $month, $year, $time) = explode(' ', date('d n Y H:i', strtotime($event->date)));
                  $month = $anons_config['month'][$month];
          		?>
		          	<div class="related_event">
		            	<div class="r_title"><p><a href="<?php echo $eventHref?>" title="<?php echo $event->title?>"><?php echo $event->title?></a><br/><?php echo $day?> <?php echo $month?> в <?php echo substr($event->time, 0, -3)?></p></div>
		            	<a href="<?php echo $eventHref?>" title="<?php echo $event->title?>">
		            		<?php echo HTML::MegaImg('events/events', $event->image, null, null, $event->title, $anons_config['EVENT_IMG_RELATED']);?>
		            	</a>
		            </div>
          		<?php endforeach;?>
          		<div class="clearer"></div>
          	<?php endif;?>
</div>

<?php if (isset($g_x) && isset($g_y) && isset($g_zoom)):?>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">
var createMap = function () {
	var latlng = new google.maps.LatLng(<?php echo $g_y?>, <?php echo $g_x?>);

	var content = '<p><b><?php echo str_replace(array('"', '\''), '', $item->title);?></b></p>';
		content += "<p><b>Адрес</b><br><?php echo $item->address?></p>";
		content += "<p><b>Телефон</b><br><?php echo str_replace(',', '</p><p>', $item->tel);?></p>";
	 
	var myOptions = {
		zoom: <?php echo $g_zoom?>,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};	

	var map = new google.maps.Map(document.getElementById("google_maps"), myOptions);	

	var marker = new google.maps.Marker({
	    position: latlng, 
	    map: map,
	    title:"<?php echo str_replace(array('"', '\''), '', $item->title);?>",
      icon: '/images/marker.png'
	});

	var infowindow = new google.maps.InfoWindow({ 
		content: content,
		size: new google.maps.Size(50, 50),
		position: latlng
	});

	google.maps.event.addListener(marker, 'click', function() {
	    infowindow.open(map, marker);
	});
}
</script>
<?php endif;?>