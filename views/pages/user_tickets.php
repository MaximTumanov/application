<div class="left upcoming item">
	<div class="wrapp">
		<div id="tabs">
			<ul>
				<li data-href="/users/tickets" class="active"><span>Купленные билеты</span></li>
				<li data-href="/users/events"><span>Наблюдаемые события</span></li>
				<li data-href="/users/places"><span>Любимые места</span></li>
				<?php if($user_info->public == 1): ?>
					<li data-href="/users/eventsall"><span>Мои события</span></li>
					<li data-href="/users/addevent"><span>Разместить событие</span></li>
				<?php else: ?>
					<li data-href="/users/partners"><span>Стать партнёром</span></li>
				<?php endif; ?>
				<li data-href="/users/logout" class="last"><a href="/users/logout"><span>Выйти</span></a></li>
			</ul>
		</div>

		<div class="my_wrapper">
			<!-- MY TICKETS LIST -->
			<div class="tab my_events">
				<div class="list">
				<?php if (isset($my_tickets) && count($my_tickets) > 0):?>
					<?php $model = new Model_Event(); foreach($my_tickets as $k => $item):?>
					<?php
						$all_info = json_decode($item->info);
						$id_event = (int) $all_info->IPN_PCODE[0];
						$ev = $model->getItem($id_event);

					  $time = explode(' ', $ev->date);
						list($day, $month, $year, $time) = explode(' ', date('d n Y H:i', strtotime($ev->date)));
						$month = $anons_config['month'][$month];
						$href = Route::url('user', array('controller' => 'users', 'action' => 'ticket', 'item_alias' => "{$item->order_id}:{$item->payrefno}"));
						$count = count(explode("|", $item->ticket_numbers));
					?>
						<div class="line_box">
							<span class="date"><?php echo "{$day} {$month}";?></span>
							<span class="time"><?php echo $time?></span>
							<span class="title"><b><?php echo $ev->title?></b></span>
							<span class="place">(<?php echo str_replace('\'', '"', $ev->placeTitle);?>)</span>
							<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $href?>" title="Скачать билеты">Кол-во билетов: <?php echo $count?></a></span>
						</div>
					<?php endforeach;?>
				<?php else:?>
					<div>У Вас пока нет купленных билетов</div>
				<?php endif;?>
				</div>
			</div>
			<!-- // -->
		</div>
	</div>
</div>