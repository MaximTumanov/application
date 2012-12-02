<div class="left upcoming item">
	<div class="wrapp">
		<div id="tabs">
			<ul>
				<li data-href="/users/events" class="active"><span>Наблюдаемые события</span></li>
				<li data-href="/users/places"><span>Любимые места</span></li>
				<?php if($user_info->public == 1): ?>
					<li data-href="/users/eventsall" class="active"><span>Мои события</span></li>
					<li data-href="/users/addevent"><span>Разместить событие</span></li>
				<?php else: ?>
					<li data-href="/users/partners"><span>Стать партнёром</span></li>
				<?php endif; ?>
				<li data-href="/users/logout" class="last"><a href="/users/logout"><span>Выйти</span></a></li>
			</ul>
		</div>

		<div class="my_wrapper">
			<!-- MY EVENTS LIST -->
			<div class="tab my_events">
				<div class="list">
				<?php if (isset($my_events)):?>
					<?php foreach($my_events as $k => $ev):?>
					<?php 
					  $time = explode(' ', $ev->date);
						$dateStr = "{$ev->uDate} {$time[1]}";
						$href = Route::url('event', array('controller' => 'events', 'action' => 'show', 'cat_alias' => $ev->catAlias, 'item_alias' => $ev->alias, 'date' => $ev->uDate));
						list($day, $month, $year, $time) = explode(' ', date('d n Y H:i', strtotime($dateStr)));
						$month = $anons_config['month'][$month];
					?>
						<div class="line_box" data-href="<?php echo $href?>">
							<span class="date"><?php echo "{$day} {$month}";?></span>
							<span class="time"><?php echo $time?></span>
							<span class="title"><a href="<?php echo $href?>" title="<?php echo $ev->title?>"><?php echo $ev->title?></a></span>
							<span class="place"><?php echo str_replace('\'', '"', $ev->place_title);?></span>
						</div>
					<?php endforeach;?>
				<?php else:?>
					<div>У Вас пока нет наблюдаемых событий</div>
				<?php endif;?>
				</div>
			</div>
			<!-- // -->
		</div>
	</div>
</div>