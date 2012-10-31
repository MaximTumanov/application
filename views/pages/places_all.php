<?php
	$letters = explode(',', $letters);
	$arrLet = array(
		'ru' => array(
			'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ж', 'З', 'И', 'К', 
			'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 
			'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Э', 'Ю', 'Я'
		),
		'en' => array(
			'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 
			'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
		),
		'num' => array(
			'0', '1', '2', '3', '4', '5', '6', '7', '8', '9'
		)
	)
?>
<div class="left upcoming">
	<div class="wrapp">
		<!-- noindex><div id="toggle"><span class="non_act" title="Переключиться на список">список</span> -o- <span class="act" title="Переключиться на карту">карта</span></div></noindex !-->
		<h1 class="color-orang ttl"><?php echo $title?></h1>
		<ul class="letters">
			<noindex>
			<?php 
				foreach($arrLet['ru'] as $ru):
					echo (in_array($ru, $letters)) ? "<li class='hse l-{$ru}'><a href='#{$ru}'>{$ru}</a></li>" : "<li>{$ru}</li>";
				endforeach;
			?>
			</noindex>
		</ul>
		<div class="clearer"></div>
		<ul class="letters">
			<noindex>
			<?php 
				foreach($arrLet['en'] as $en):
					echo (in_array($en, $letters)) ? "<li class='hse l-{$en}'><a href='#{$en}'>{$en}</a></li>" : "<li>{$en}</li>";
				endforeach;
			?>
			</noindex>
		</ul>
		<div class="clearer"></div>
		<ul class="letters">
			<noindex>
			<?php 
				foreach($arrLet['num'] as $num):
					echo (in_array($num, $letters)) ? "<li class='hse l-{$num}'><a href='#{$num}'>{$num}</a></li>" : "<li>{$num}</li>";
				endforeach;
			?>
			<li class='hse activ '><a href='#ВСЕ'>ВСЕ</a></li>
			</noindex>
		</ul>
		<div class="clearer"></div>
		
		<div id="places_list" class="top-20px">
			<?php 
				foreach ($placesList as $key => $place):
				$href = Route::url('place', array('controller' => 'places', 'action' => 'show', 'item_alias' => $place->alias));
				$place->web = preg_match("/http/", $place->web) ? $place->web : "http://{$place->web}";
				$place->web_without_http = str_replace("http://", "", $place->web);
				$place->dop_title = str_replace("'", '"', $place->dop_title);
				$place->title = str_replace("'", '"', $place->title);
			?>
				<div class="twocolum p_href <?php echo ($key%2) ? '' : 'asm' ;?>" itemscope itemtype="http://schema.org/Place" href="<?php echo $href?>">
					<meta itemprop="address" content="<?php echo $place->address?>">
					<div class="place_line" data-letter="<?php echo UTF8::strtoupper(UTF8::substr($place->title, 0, 1));?>">
						<div class="p_img">
						<?php echo ($place->image) 
								? HTML::MegaImg('events/places', 'no_img_events.gif', 'post_load', '', '', $anons_config['PLACE_IMG_ALL'], $place->image)
								: HTML::MegaImg('events', 'no_img_events.gif', '', '');
						?>
						</div>
						<div class="p_info">
							<h2><a itemprop="name" href="<?php echo $href?>"><?php echo ($place->dop_title) ? $place->dop_title : $place->title;?></a></h2>
							<?php if ($place->web):
								echo "<p><noindex><a target='_blank' href='{$place->web}'>{$place->web_without_http}</a></noindex></p>";
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
						<div class="p_cat"></div>
						<div class="clearer"></div>
					</div>
				</div>
			<?php endforeach;?>
		</div>
		
		<?php if (count($placesList) > $anons_config['items_per_page']):?>
			<div id="pag_number"></div>
		<?php endif;?>
	</div>
</div>
<script type="text/javascript">
	var use_pagination = true,
		items_per_page = <?php echo $anons_config['items_per_page']?>,
		fix_scroll = true;
</script>