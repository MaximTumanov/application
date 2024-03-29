<?php

    if ($item->type != 6){list($day, $month, $year, $time, $dayof) = explode(' ', date('d n Y H:i N', strtotime($item->date)));}else{list($day, $month, $year) = explode(' ', date('d n Y', strtotime($item->date)));};
    $placeHref = Route::url('place', array('controller' => 'places', 'action' => 'show', 'item_alias' => $item->placeAlias));

    $id = $item->id_event;

    $relatedEvents = null;

    $month = $anons_config['month'][$month];
    
    if ($item->google) {
      list($g_x, $g_y, $g_zoom) = explode(':', $item->google);
    }

    HTML::replaceImg(&$item->desc);
    $item->desc = preg_replace("/(style=\".*?\")/", "", $item->desc);
    $qr_text = "{$day} {$month} {$item->title} http://anons.dp.ua" . $_SERVER['REQUEST_URI'];
?>
<div class="left upcoming item" itemscope maincontentofpage itemtype="http://schema.org/Event">
	<div class="wrapp fix_right_padding">
    	<?php 
    		if ($item->icons):
    			$icons = explode(',', $item->icons);
    			echo '<div class="event_cat">';
                    $icons_title = explode(',', $item->icons_title);
    				foreach ($icons as $key => $icon):
                        if($icon == '') continue;
    					$image = HTML::MegaImg('events/category', $icon, null, null, $icons_title[$key]);
    					echo "<span>{$image}</span>";
    				endforeach;
    			echo '</div>';
    		endif;
    	?>
    	<a style="text-decoration:none" href="/events/day/<?php echo date('Y-m-d', strtotime($item->date));?>"><div class="event_day info"><span class="e_day"><?php echo $day; ?></span><span class="e_month"><?php echo $month;?></span></div></a>
            		<h1><p class="event_title" itemprop="name"><?php echo $item->title?></p></h1>
                    <meta itemprop="startDate" content="<?php echo date("Y-m-dTH:i:s+03:00", strtotime($item->date))?>">
                    <meta itemprop="url" content="http://anons.dp.ua/<?php echo $_SERVER['REQUEST_URI']?>">
                    <meta itemprop="description" content="<?php echo HTML::cropstr($item->s_desc, 25)?>">
                    <meta itemprop="image" content="<?php echo HTML::MegaImg('events/events', 'no_img_events.gif', 'post_load', '', '', $anons_config['EVENT_IMG_ALL'], $item->image, true);?>">
                    <meta itemprop="location" content="<?php echo ($item->address && $item->address != '') ? $item->address : $item->address_org;?>">
                <div class="img_wrapp">
            		<?php echo ($item->image) 
            			? HTML::MegaImg('events/events', $item->image, 'event_img', 'float: left', $item->title, $anons_config['EVENT_IMG_DESC'])
            			: HTML::MegaImg('events', 'no-image.gif', 'event_img', 'float: left');
            		?>
                </div>

<?php if ($likeEvents && !empty($likeEvents)):?>
<div class="more_info_wrapp">
    <h3 class="color-orang-imp">Похожие события</h3>
    <?php
        foreach ($likeEvents as $event):
          $eventHref = Route::url('event', array("controller" => "events", "action" => "show", "cat_alias" => $event->catAlias, "item_alias" => $event->alias));
          list($l_day, $l_month, $l_year, $l_time) = explode(' ', date('d n Y H:i', strtotime($event->date)));
          $l_month = $anons_config['month'][$l_month];
    ?>

    <a href="<?php echo $eventHref?>" title="<?php echo $event->title?>"><?php echo $event->title?></a>
    <p class="mg_b5px small">
        <?php echo $l_day?> <?php echo $l_month?> в <?php echo substr($event->time, 0, -3)?>
    </p>

    <?php endforeach;?>
</div>
<?php endif;?>

            		<div class="event_info">
                  <div id="qrcode"><?php echo HTML::QRCode($qr_text, $anons_config['allow_qr']);?></div>                 
            			<p class="time"><?php if ($item->type == 6){ echo 'Время уточняется';}else{echo HTML::getTypeEvent($type_event, $item->type, $day, $month, $item->time, $dayof);}?></p>
            			<?php if($item->placeAlias != "must_be_hide"):?>
                          <h2><p class="place"><a href="<?php echo $placeHref?>"><?php echo ($item->placeDopTitle) ? $item->placeDopTitle : $item->placeTitle;?></a></p></h2>
                        <?php endif;?>

                        <?php if($item->price):?>
                          <p class="titl">Цена:</p>
                          <P><?php echo str_replace('грн.', '', $item->price)?> <?php echo (!in_array($item->price, array('Вход свободный', 'уточняйте у организаторов', 'Уточняйте у организаторов', 'Уточняйте дополнительно', '50 коп./мин первого часа, а последующие по 25 коп.'))) ? 'грн.' : '';?></p>
                        <?php endif;?>


            			<?php 
                        if ($item->address or $item->address_org):?>
            			          <p class="titl">Адрес:</p> 
                            <?php if($item->address == ''):?>
                			      <p><?php echo $item->address_org; ?> <?php if (isset($g_x) && isset($g_y) && isset($g_zoom)):?>&rarr; <a href="#" class="maps" id="show_google_maps">показать на карте</a><?php endif;?></p>
                            <?php else:
                            $adres = urlencode($item->address);
                            $file_array = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=" .  $adres . "&sensor=false");
                            $decoding = json_decode($file_array);
                            $g_y = $g_x = null;
                            if(!empty($decoding->results)){
                              $g_y = $decoding->results[0]->geometry->location->lat;
                              $g_x = $decoding->results[0]->geometry->location->lng;
                            }
                            ?>
                            <p><?php echo $item->address; ?> <?php if (isset($g_x) && isset($g_y) && isset($g_zoom)):?>&rarr; <a href="#" class="maps" id="show_google_maps">показать на карте</a><?php endif;?></p>
                			<?php endif;?>
                        <?php endif;?>
            			
            			<?php if ($item->tel):?>
            			<p class="titl">Телефоны:</p> 
            			<p><?php echo strip_tags($item->tel);?></p>
            			<?php endif;?>

            			<?php if ($item->web && $item->web != 'http://'):?>
                  <?php if (!preg_match('/http/', $item->web)) $item->web = "http://{$item->web}";?>
            			<p class="titl">Сайт:</p>
            			<noindex><p><a href="<?php echo $item->web; ?>" target="_blank"><?php echo $item->web?></a></p></noindex>
            			<?php endif;?>  
            			
            			<?php if ($item->email && $item->show_email):?>
            			<p class="titl">Email:</p>
            			<noindex><p><a href="mailto:<?php echo $item->email?>"><?php echo $item->email?></a></p></noindex>
            			<?php endif;?>        			

              <?php if($show_pay_form):?>
                <div id="pay">
                  <?php
                    $price = (float) $item->price;
                    $commission = $price * ($item->commission / 100);
                    $total = $price + $commission;

                  ?>
                  <input type="hidden" id="payu_price" value="<?php echo (float) $price?>" />
                  <input type="hidden" id="payu_commission" value="<?php echo $item->commission?>" />

                  <?php if(!$is_logged):?>
                    <div class='not_autorized'>Для покупки электронного билета, пожалуйста, <a href="http://anons.dp.ua/users">авторизируйтесь</a> на сайте.</div>
                  <?php endif;?>

                  <div id="payment-type">
                    <div class="payment-type">
                      <span class="jqTransformRadioWrapper"><a href="#" class="jqTransformRadio jqTransformChecked" rel="payment_system"></a><input type="radio" name="payment_system" value="liqpay" checked="checked" class="jqTransformHidden"></span>
                      <noindex><a href="http://payu.ua" target="_blank"><img src="/images/payu_logo.png" alt=""></a></noindex>
                    </div>
                    <div class="contract"><span class="jqTransformCheckboxWrapper"><a id="offer-trigger" href="#" class="jqTransformCheckbox"></a><input id="contract_accept" type="checkbox" name="type" value="" class="jqTransformHidden"></span><p class="offer">Я прочитал и принимаю <a href="/images/offer.pdf" target="_blank" title="">условия</a> этой публичной оферты.</p></div>
                    <div id="final-price">
                      <div class="price-value">
                        <p><span><?php echo number_format($price, 2, '.', ' ')?></span></p>
                        <p class="subtext">Стоимость билета</p>
                      </div>
                      <div class="sign">x</div>
                      <div class="price-value">
                        <p><input type="number" id="payu_count" max="<?php echo $item->max_count?>" min="1" value="1" /></p>
                        <p class="subtext">Количество билетов</p>
                      </div>
                      <div class="sign">+</div>
                      <div class="price-value">
                        <p><span id="e_commission"><?php echo number_format($commission, 2, '.', ' ')?></span></p>
                        <p class="subtext">Комиссия</p>
                      </div>
                      <div class="sign">=</div>
                      <div class="price-value-total">
                        <p><span id="e_total"><?php echo number_format($total, 2, '.', ' ')?></span></p>
                        <p class="subtext">Общая стоимость (UAH)</p>
                      </div>

                      <div class="clearer"></div>
                      <div class="button" id="payu_button">Купить сейчас</div>
                      <div class="pay_logo"></div>
                    </div>


                  </div>
                </div>
              <?php endif;?>

                <div class="event_text">
                  <?php echo $item->desc?>

                  <?php if ($item->vk_video):?>
                    <iframe type="text/html" width="607" height="360" src="<?php echo $item->vk_video; ?>" frameborder="0"></iframe>
                  <?php endif;?>

<div style="margin-top: 10px;">
	            			<span id="social_nets"></span>
                            
<?php if($anons_config['show_social_buttons']):?>
<span class="user_go"><?php echo $count_users_go?></span>
	            			<?php if(in_array($item->id_event, $my_events_ids)):?>
	            				<div class="event_go button disabled" date="<?php echo substr($item->date, 0, 10)?>" id="event_go_<?php echo $id?>">Я передумал(а)</div>
	            			<?php else:?>
	            				<div class="event_go button" date="<?php echo substr($item->date, 0, 10)?>" id="event_go_<?php echo $id?>">Я пойду</div>
	            			<?php endif;?>
<?php endif;?>
	            		</div>
           
                </div> 
            			   			
            		</div>
                              
                                
	      
                                
            	<div class="clearer"></div>
            		                     

                <?php if (isset($item->images_folder) && $item->images_folder):?>
                <div class="slider_fixed_margin">
                  <div id="featured" class="fixed_size"> 
                    <?php

                      $folder = '../adminka.anons.dp.ua/images/event_images/' . $item->images_folder;
                      $files = scandir($folder);
                      
                      foreach($files as $file){
                        $file_part = explode('.', $file);
                        if(count($file_part) != 2) continue;
                        if(!preg_match('/^(?:jpe?g|png|[gt]if)$/', $file_part[1])) continue;
                        echo "<img src='http://{$anons_config['path_to_img']}/images/event_images/{$item->images_folder}/{$file}?w=645&h=450&tc&ns' />";
                      }

                    ?>
                  </div>
                </div>
                <?php endif;?>
                
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
                        VK.Widgets.Comments("vk_comments", {limit: 10, width: "600", attach: false, pageUrl: ( window.location.href.split('/').length == 7 ? window.location.href : window.location.href.split('/').slice(0, -1).join('/'))});
                        </script>
                    <?php endif;?>           		
            		
            	</div>
          	
          	<?php if ($relatedEvents):?>
          		<div class="related_event_title">Другие события <?php "{$day} {$anons_config['monts'][$monts]}"; ?></div>
          		<div style="margin-left: 350px">
          		<?php 
          			foreach ($relatedEvents as $event):
          			$eventHref = Route::url('event', array('controller' => 'events', 'action' => 'show', 'cat_alias' => $event->catAlias, 'item_alias' => $event->alias));
          		?>
		          	<div class="related_event">
		            	<div class="r_title"><p><a href="<?php echo $eventHref?>" title="<?php echo $event->title?>"><?php echo $event->title?></a><br/>Начало в <?php echo substr($event->time, 0, -3)?></p></div>
		            	<a href="<?php echo $eventHref?>" title="<?php echo $event->title?>">
		            		<?php echo HTML::MegaImg('events/events', $event->image, null, null, $event->title, $anons_config['EVENT_IMG_RELATED']);?>
		            	</a>
		            </div>
          		<?php endforeach;?>
          		<div class="clearer"></div> 
          		</div> 
          	<?php endif;?>
</div>

<?php if (isset($item->images_folder) && $item->images_folder):?>
<script>
 var use_slider = true;
</script>
<?php endif;?>

<script>
var use_payu = <?php echo ($item->has_eticket) ? "true" : "false";?>
  , id_event = <?php echo $item->id_event?>
  , date     = '<?php echo date("Y-m-d", strtotime($item->date))?>';
</script>

<?php if (isset($g_x) && isset($g_y) && isset($g_zoom)):?>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">
var createMap = function () {
	var latlng = new google.maps.LatLng(<?php echo $g_y?>, <?php echo $g_x?>);

	var content = '<p><b><?php echo str_replace(array('"', '\''), '', $item->title);?></b></p>';
		content += "<p><b>Адрес</b><br><?php echo $item->address?></p>";
		content += "<p><b>Телефон</b><br><?php echo str_replace(',', '</p><p>', $item->tel);?></p>";
	 
	var myOptions = {
		zoom: 15,
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