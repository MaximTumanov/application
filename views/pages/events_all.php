<div class="left upcoming">
	<div class="wrapp">
		<h1 class="color-orang ttl"><?php echo $title?></h1>
		
		<div id="places_list">
			<?php if (count($eventsList)):?>
			<div id="tabs" class="filters">
				<div class="slider_wrapper">
					<div id="slider-range"></div>
				</div>
				<div id="time_from_text" class="time_display">0:00</div>
				<div id="time_to_text" class="time_display">23:59</div>			
				<ul>
					<li class="label"><span>Сортировать по:</span></li>
					<li data-type="date" class="active"><span>дате проведения</span></li>
					<li data-type="letter_desc"><span>имени (А-Я)</span></li>
					<li data-type="letter_asc"><span>имени (Я-А)</span></li>
				</ul>
			</div>
			<?php endif;?>

			<div class="filtering_box">
			<?php 
				foreach ($eventsList as $key => $event):
			
			 if ($event->type != 6){list($day, $month, $year, $time, $day_num) = explode(' ', date('d n Y H:i w', strtotime($event->date)));}else{list($day, $month, $year) = explode(' ', date('d n Y', strtotime($event->date)));};
				$href = Route::url('event', array('controller' => 'events', 'action' => 'show', 'cat_alias' => $event->catAlias, 'item_alias' => $event->alias, 'date' => substr($event->date,0,10)));
					
				$month = $anons_config['month'][$month];
			?>
				<div class="twocolum p_href <?php echo ($key%2) ? '' : 'asm' ;?>" href="<?php echo $href;?>" itemscope itemtype="http://schema.org/Event" title="<?php echo $event->title?>" alt="<?php echo $event->title?>">

					<meta itemprop="startDate" content="<?php echo date("Y-m-dTH:i:s+03:00", strtotime($event->date))?>">
					<meta itemprop="url" content="http://anons.dp.ua<?php echo $href?>">
					<meta itemprop="description" content="<?php echo HTML::cropstr($event->s_desc, 25)?>">
					<meta itemprop="image" content="<?php echo HTML::MegaImg('events/events', 'no_img_events.gif', 'post_load', '', '', $anons_config['EVENT_IMG_ALL'], $event->image, true);?>">
					<?php if ($event->type != 6): ?>
					 <div data-time="<?php echo ceil(str_replace(":", ".", $time));?>" data-date="<?php echo strtotime($event->date);?>" data-letter="<?php echo UTF8::strtoupper(UTF8::substr($event->title, 0, 1));?>" data-category="<?php echo $event->catId?>" class="place_line">
				<?php endif; ?>
					
					
						<div class="p_img"><?php echo HTML::MegaImg('events/events', 'no_img_events.gif', 'post_load', '', '', $anons_config['EVENT_IMG_ALL'], $event->image);?></div>
						<div class="p_info">
							<h2 itemprop="name"><a href="<?php echo $href?>"><?php echo $event->title?></a><?php echo HTML::getWTF($event->wtf);?></h2>
							<p class="date">
								<?php if(date('Y-m-d', strtotime($event->date)) != date("Y-m-d")):?>
									<span><?php echo $day?></span> <?php echo $month?>
									<span><?php if ($event->type != 6){ echo ($time != '00:00' ? $time : '');} else{ echo 'Время уточняется';}?></span> <?php echo $anons_config['days_short'][$day_num]?>
								<?php else:?>
									<span>Сегодня в</span>
									<span><?php if ($event->type != 6){ echo $time;} else{ echo 'Время уточняется';}?></span>
								<?php endif;?> 
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
				</div>
			<?php endforeach;?>
			</div>
		</div>
		<?php if (count($eventsList) > $anons_config['items_per_page']):?>
			<div id="pag_number"></div>
		<?php endif;?>
	</div>
</div>
<script type="text/javascript">
	var use_pagination = true,
		use_filtering = true,
		items_per_page = <?php echo $anons_config['items_per_page']?>,
		use_ajax = false,
		use_range_slider = true,
		time_from_to = [0, 24];
</script>