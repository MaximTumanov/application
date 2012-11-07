<div class="left upcoming item">
	<div class="wrapp">
		<div id="tabs">
			<ul>
				<li data-href="/users/events"><span>Наблюдаемые события</span></li>
				<li data-href="/users/places" class="active"><span>Любимые места</span></li>
				<?php if($user_info->public == 1): ?>
					<li data-href="/users/addevent"><span>Разместить событие</span></li>
				<?php else: ?>
					<li data-href="/users/partners"><span>Стать партнёром</span></li>
				<?php endif; ?>
				<li data-href="/users/logout" class="last"><a href="/users/logout"><span>Выйти</span></a></li>
			</ul>
		</div>

		<div class="my_wrapper">
			<!-- MY PLACES LIST -->
			<div class="tab my_places">
				<div class="list">
				<?php if (isset($my_places)):?>
					<?php foreach($my_places as $k => $pl):?>
					<?php 
						$href = Route::url('place', array('controller' => 'places', 'action' => 'show', 'item_alias' => $pl->alias));
					?>
						<div title="Посмотреть подробности о <?php echo $pl->title?>" class="line_box" data-id="<?php echo $pl->id_place?>">
							<span class="title"><a href="<?php echo $href?>" title="<?php echo $pl->title?>"><?php echo str_replace('\'', '"', $pl->dop_title);?></a></span>
							<span class="place"><?php echo $pl->address?></span>
						</div>
						<div class="place_events hidden">
							<div class="my_place_events"></div>
						</div>
						<div class="place_desc hidden">
							<div class="my_place_desc"></div>
						</div>
					<?php endforeach;?>
				<?php endif;?>
				</div>
			</div>
			<!-- // -->
		</div>
	</div>
</div>
