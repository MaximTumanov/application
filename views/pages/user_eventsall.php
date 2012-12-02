<div class="left upcoming item">
	<div class="wrapp">
		<div id="tabs">
			<ul>
				<li data-href="/users/events"><span>Наблюдаемые события</span></li>
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
				<?php if ($my_events):?>
					<?php foreach($my_events as $k => $ev):?>
					<?php 
					 $hrefedit = Route::url('event', array('controller' => 'users', 'action' => 'event', 'cat_alias' => $ev->catAlias, 'item_alias' => $ev->alias, 'date' => substr($ev->date,0,10)));
						$href = Route::url('event', array('controller' => 'events', 'action' => 'show', 'cat_alias' => $ev->catAlias, 'item_alias' => $ev->alias, 'date' => substr($ev->date,0,10)));

					?>
						<div class="line_box" title="Редактировать" data-href="<?php echo $hrefedit; ?>">
							<span class="title"><a href="<?php echo $hrefedit; ?>" title="Редактировать"><?php echo $ev->title?></a></span>
							<span class="place"><?php echo str_replace('\'', '"', $ev->place_title);?></span>
							
							<div class="last icons">
								<?php
									$icons = explode(',', $ev->icons);
									$icons_title = explode(',', $ev->icons_title);
				    				foreach ($icons as $key => $icon):
				    					$image = HTML::MegaImg('events/category', $icon, null, null, $icons_title[$key]);
				    					echo "<span class='img'>{$image}</span>";
				    				endforeach;
								?>
							</div>
							<?php if( $ev->published == 1): ?>
							<span class="title"><a href="<?php echo $href?>" title="Ссылка на событие">Ссылка на событие</a></span>
							<?php endif;?>
							<?php if( $ev->published == 2): ?>
							<span class="title" style = "color: red;" title="Отказано в пудликации">Отказано в публикации</span>
							<?php endif;?>
							<?php if( $ev->published == 3): ?>
							<span class="title" style = "color: green;" title="На стадии модерирования">На стадии модерирования</span>
							<?php endif;?>
							<?php if( $ev->published == 0): ?>
							<span class="title" title="Не опубликовано">Не опубликовано</span>
							<?php endif;?>
						</div>
					<?php endforeach;?>
				<?php else:?>
					<div>У Вас пока нет размещенных событий</div>
				<?php endif;?>
				</div>
			</div>
			<!-- // -->
		</div>
	</div>
</div>