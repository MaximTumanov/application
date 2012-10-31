<div class="left upcoming">
	<div class="wrapp">
		<h1 class="color-orang ttl">Куда пойти в Днепропетровске</h1>
		
		<div id="places_list">
			<?php 
			if ($placesList):
				foreach ($placesList as $place):
				$href = Route::url('place', array('controller' => 'places', 'action' => 'show', 'item_alias' => $place->alias));
			?>
				<div class="twocolum p_href" itemscope itemtype="http://schema.org/Place" href="<?php echo $href;?>" title="<?php echo $place->title?>" alt="<?php echo $place->title?>">
					<div class="place_line">
						<div class="p_img">
						<?php echo ($place->image) 
								? HTML::MegaImg('events/places', $place->image, '', '', $place->title, $anons_config['PLACE_IMG_ALL'])
								: HTML::MegaImg('events', 'no-image-small.gif', '', '');
						?>
						</div>
						<div class="p_info">
							<h2 itemprop="name"><?php echo ($place->dop_title) ? $place->dop_title : $place->title;?></h2>
							<?php if ($place->web):
								echo "<p><noindex><a target='_blank' href='{$place->web}'>{$place->web}</a></noindex></p>";
							endif;?>
							<?php if ($place->email && $place->show_email):
								echo "<p><noindex><a href='mailto:{$place->email}'>{$place->email}</a></noindex></p>";
							endif;?>							
							<?php if ($place->address):
								echo "<p>{$place->address}</p>";
							endif;?>
							<?php if ($place->tel):
								$place->tel = str_replace(',', ', ', $place->tel);
								echo "<p>{$place->tel}</p>";
							endif;?>
							
						</div>
						<div class="p_cat">
							<?php 
								if ($place->icons):
									$icons = explode(',', $place->icons);
									$icons_title = explode(',', $place->icons_title);
									foreach ($icons as $key => $icon):
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
			
			<?php if (count($placesList)):?>
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
<script type="text/javascript">
	var use_pagination = true,
		use_filtering = false,
		items_per_page = <?php echo $anons_config['items_per_page']?>,
		MAKE_HIGHLIGHT = true,
		HIGHLIGHT_TEXT = "<?php echo $text?>";
</script>