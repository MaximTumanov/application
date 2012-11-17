<div class="left upcoming">
	<div class="wrapp">
		<?php if (count($eventsList)):?>
		<h1 class="color-orang ttl"><?php echo $title?></h1>
		<?php endif;?>

		<div id="places_list">
			<?php if (count($eventsList)):?>
			<div id="tabs" class="filters">
				<div class="slider_wrapper">
					<div id="slider-range"></div>
				</div>
				<div id="time_from_text" class="time_display">10</div>
				<div id="time_to_text" class="time_display">12</div>			
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
			if ($eventsList):
				foreach ($eventsList as $event):

				list($day, $month, $year, $time, $day_num) = explode(' ', date('d n Y H:i w', strtotime($event->date)));
				$month = $anons_config['month'][$month];

				$href = Route::url('event', array('controller' => 'events', 'action' => 'show', 'cat_alias' => $event->catAlias, 'item_alias' => $event->alias, 'date' => substr($event->date,0,10)));
			?>
				<div class="twocolum p_href" itemscope itemtype="http://schema.org/Event" href="<?php echo $href;?>" title="<?php echo $event->title?>" alt="<?php echo $event->title?>">

					<div data-time="<?php echo ceil(str_replace(":", ".", $time));?>" data-date="<?php echo strtotime($event->date);?>" data-letter="<?php echo UTF8::strtoupper(UTF8::substr($event->title, 0, 1));?>" data-category="<?php echo $event->catId?>" class="place_line">
						<div class="p_img"><?php echo HTML::MegaImg('events/events', 'no_img_events.gif', 'post_load', '', '', $anons_config['EVENT_IMG_ALL'], $event->image);?></div>
						<div class="p_info">
							<h2 itemprop="name"><?php echo $event->title?><?php echo HTML::getWTF($event->wtf);?></h2>
							<p class="date"><span><?php echo $day?></span> <?php echo $month?> <span><?php echo ($time != '00:00' ? $time : '')?></span> <?php echo $anons_config['days_short'][$day_num]?></p>
							<?php echo HTML::cropstr($event->s_desc, 25)?>
						</div>
						<div class="p_cat">
							<?php 
								if ($event->icons):
									$icons = explode(',', $event->icons);
									$icons_title = explode(',', $event->icons_title);
									foreach ($icons as $key => $icon):
                    if ($icon == '') continue;
										$image = HTML::MegaImg('events/category', $icon, '', '', $icons_title[$key]);
										echo "<span>{$image}</span>";
									endforeach;
								endif;
							?>
						</div>
						<div class="clearer"></div>
					</div>
				</div>
			<?php endforeach; ?>

			<?php if (count($eventsList)):?>
				<div id="pag_number"></div>
			<?php endif;?>
			
			<?php else: ?>
				
				<noindex>
				<div class="events_search_empty">
					<p>Жаль, но Вашему запросу не соответствует ни одно событие.</p>
					<p>Может, <a href="/#search" rel="nofollow">поищем</a> что-то другое?</p>
				</div>
				</noindex>
							
			<?php endif;?>
			</div>
		</div>

	</div>
</div>
<script type="text/javascript">
	var use_pagination = true,
		use_filtering = true,
		items_per_page = <?php echo $anons_config['items_per_page']?>,
		MAKE_HIGHLIGHT = true,
		HIGHLIGHT_TEXT = "<?php echo ($text == 'Что ищем?') ? '' : $text?>",
		use_range_slider = true,
		time_from_to = ["<?php echo $from?>", "<?php echo $to?>"];
</script>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www."); document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E")); 
</script> 
<script type="text/javascript"> 
var pageTracker = _gat._getTracker("UA-34064688-1");
pageTracker._initData(); 
pageTracker._trackPageview('/events_search.php?q=<?php echo $text?>'); 
</script>