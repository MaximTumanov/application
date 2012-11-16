<?php
	$placeHref = Route::url('event', array('controller' => 'places', 'action' => 'show', 'item_alias' => $place->alias));
?>
<div class="left upcoming">
	<div class="wrapp">
		<h1 class="color-orang ttl"><a href="<?php echo $placeHref?>"><?php echo $title?></a></h1>
	
		<div id="places_list">
			<div class="filtering_box">
			<?php 
				foreach ($eventsList as $key => $event):

			 list($day, $month, $year, $time, $day_num) = explode(' ', date('d n Y H:i w', strtotime($event->date)));
				$href = Route::url('event', array('controller' => 'events', 'action' => 'show', 'cat_alias' => $event->catAlias, 'item_alias' => $event->alias, 'date' => substr($event->date,0,10)));
					
				$month = $anons_config['month'][$month];
			?>
				<div class="twocolum p_href <?php echo ($key%2) ? '' : 'asm' ;?>" href="<?php echo $href;?>" itemscope itemtype="http://schema.org/Event" title="<?php echo $event->title?>" alt="<?php echo $event->title?>">
					<meta itemprop="startDate" content="<?php echo date("Y-m-dTH:i:s+03:00", strtotime($event->date))?>">
					<meta itemprop="url" content="http://anons.dp.ua<?php echo $href?>">
					<meta itemprop="description" content="<?php echo HTML::cropstr($event->s_desc, 25)?>">
					<meta itemprop="image" content="<?php echo HTML::MegaImg('events/events', 'no_img_events.gif', 'post_load', '', '', $anons_config['EVENT_IMG_ALL'], $event->image, true);?>">
					
						<div class="p_img"><?php echo HTML::MegaImg('events/events', 'no_img_events.gif', 'post_load', '', '', $anons_config['EVENT_IMG_ALL'], $event->image);?></div>
						<div class="p_info">
							<h2 itemprop="name"><a style="color:#E85700" href="<?php echo $href?>"><?php echo $event->title?></a><?php echo HTML::getWTF($event->wtf);?></h2>
							<p class="date">
								<span><?php echo $day?></span> <?php echo $month?>
							</p>
							<div class="ghj"><?php echo HTML::cropstr($event->s_desc, 25)?></div>
						</div>
						<div class="p_cat">
							<?php 
								if ($event->icons):
									$icons = explode(',', $event->icons);
									$icons_title = explode(',', $event->icons_title);

									foreach ($icons as $key => $icon):
                    if($icon == '') continue;
										$image = @HTML::MegaImg('events/category', $icon, null, null, $icons_title[$key]);
										echo "<span>{$image}</span>";
										
									endforeach;
								endif;
							?>
						</div>
						<div class="clearer"></div>
				</div>
			<?php endforeach;?>
			</div>
		</div>
	</div>
</div>