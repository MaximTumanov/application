<div class="left upcoming item">
	<div class="wrapp">
		<div id="tabs">
			<ul>
				<li rel="my_events" class="active"><span>Наблюдаемые события</span></li>
				<li rel="my_places"><span>Любимые места</span></li>
				<li rel="my_event"><span>Разместить событие</span></li>
				<li class="last"><a href="/users/logout"><span>Выйти</span></a></li>
			</ul>
		</div>

		<div class="my_wrapper">
			<div class="tab my_event hidden">
				<form action="users/add" method="post" enctype="multipart/form-data">
					<div class="row1">
						<div class="my_event_add">
							<label>Заголовок события <span class="red">*</span></label>
							<span class="default">Заголовок</span>
							<input type="text" name="title" id="title" class="bind_input" />
							<div class="clear"></div>
						</div>

						<div class="my_event_add">
							<label>Название места <span class="red">*</span></label>
							<span class="default hidden">Заголовок</span>
							<input type="text" class="bind_input" value="Успех" disabled="disabled" readonly />
							<div class="clear"></div>
						</div>
						<span class="under"></span>
					</div>
					<div class="row2">
						<div class="my_event_add">
							<label class="label">Дата проведения <span class="red">*</span></label>
							<table class="admintable">
								<tbody><tr>
									<td><input type="radio" name="type" id="type-1" value="1" checked=""> <label for="type-1">одна дата</label></td>
									<td><input type="radio" name="type" id="type-2" value="2"> <label for="type-2">еженедельное событие</label></td>
									<td><input type="radio" name="type" id="type-3" value="3"> <label for="type-3">ежемесячное событие</label></td>
								</tr>
								<tr>
									<td colspan="4">
										<div id="tabss-1" style="display: block; ">
											<input class="datepicker" disabled="disabled" readonly type="text" name="date" id="date" value="2012-02-26" class="inputbox" size="25" maxlength="19"><img class="calendar_img" src="<?php echo $anons_config['path_site']?>/images/calendar.png" alt="calendar" id="date_img"><?php echo Date::getHours();?> : <?php echo Date::getMinutes();?>
										</div>
										<div id="tabss-2" style="display: none; ">
											<p><span class="fiw_span">Начало<span class="red">*</span></span> <input type="text" class="datepicker" disabled="disabled" readonly name="date_from"  value="" class="inputbox" size="25" maxlength="19"><img class="calendar_img" src="<?php echo $anons_config['path_site']?>/images/calendar.png" alt="calendar" id="date_from_img"></p>
											<p><span class="fiw_span">Окончание<span class="red">*</span></span> <input class="datepicker" disabled="disabled" readonly type="text" name="date_to" value="" class="inputbox" size="25" maxlength="19"><img class="calendar_img" src="<?php echo $anons_config['path_site']?>/images/calendar.png" alt="calendar" id="date_to_img"></p>
											<p><span class="fiw_span">День недели<span class="red">*</span></span> <?php echo Date::getDays();?></p>
											<p><span class="fiw_span">Время проведения<span class="red">*</span></span> <?php echo Date::getHours();?> : <?php echo Date::getMinutes();?></p>
										</div>
										<div id="tabss-3" style="display: none; ">
											<p><span class="fiw_span">Начало<span class="red">*</span></span> <input type="text" class="datepicker" disabled="disabled" readonly name="date_from" id="date_from1" value="" class="inputbox" size="25" maxlength="19"><img class="calendar_img" src="<?php echo $anons_config['path_site']?>/images/calendar.png" alt="calendar" id="date_from1_img"></p>
											<p><span class="fiw_span">Окончание<span class="red">*</span></span> <input class="datepicker" disabled="disabled" readonly type="text" name="date_to" id="date_to1" value="" class="inputbox" size="25" maxlength="19"><img class="calendar_img" src="<?php echo $anons_config['path_site']?>/images/calendar.png" alt="calendar" id="date_to1_img"></p>
											<p><span class="fiw_span">Дата события<span class="red">*</span></span> <?php echo Date::getDates();?></p>
											<p><span class="fiw_span">Время проведения<span class="red">*</span></span> <?php echo Date::getHours();?> : <?php echo Date::getMinutes();?></p>
										</div>
									</td>
								</tr>
							</tbody></table>							
							<div class="clear"></div>
						</div>
						<span class="under"></span>
					</div>

					<div class="row3">
						<div id="uploadButton" class="button bold image">Изображение</div>
						<div class="loader hidden"></div>
					</div>

					<div id="block_for_image" class="img_small"></div>

					<div class="redactor_content_wrapp"><textarea id="redactor_content" name="redactor_content" style="width: 100%; height: 320px;"></textarea></div>
					
					<input type="hidden" name="a" value="<?php echo md5($my_data[0]."anons_dp_ua")?>" />
					<input type="hidden" name="b" value="<?php echo $my_data[0]?>" />
					<input type="hidden" name="image" value="" id="image_hidden" />
				</form>
			</div>

			<!-- MY EVENTS LIST -->
			<div class="tab my_events">
				<div class="list">
				<?php if (isset($my_events)):?>
					<?php foreach($my_events as $k => $ev):?>
					<?php 
						$href = Route::url('event', array('controller' => 'events', 'action' => 'show', 'cat_alias' => $ev->catAlias, 'item_alias' => $ev->alias));
						list($day, $month, $year, $time) = explode(' ', date('d n Y H:i', strtotime($ev->date)));
						$month = $anons_config['month'][$month];
					?>
						<div class="line_box" data-href="<?php echo $href?>">
							<span class="date"><?php echo "{$day} {$month}";?></span>
							<span class="time"><?php echo $time?></span>
							<span class="title"><a href="<?php echo $href?>" title="<?php echo $ev->title?>"><?php echo $ev->title?></a></span>
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
						</div>
					<?php endforeach;?>
				<?php endif;?>
				</div>
			</div>
			<!-- // -->

			<!-- MY PLACES LIST -->
			<div class="tab my_places hidden">
				<div class="list">
				<?php if (isset($my_places)):?>
					<?php foreach($my_places as $k => $pl):?>
					<?php 
						$href = Route::url('place', array('controller' => 'places', 'action' => 'show', 'item_alias' => $pl->alias));
					?>
						<div title="Посмотреть подробности о <?php echo $pl->title?>" class="line_box" data-id="<?php echo $pl->id_place?>">
							<span class="title"><a href="<?php echo $href?>" title="<?php echo $pl->title?>"><?php echo str_replace('\'', '"', $pl->dop_title);?></a></span>
							<span class="place"><?php echo $pl->address?></span>
							<div class="last icons">
								<?php 
									$icons = explode(',', $pl->icons);
									$icons_title = explode(',', $pl->icons_title);
				    				foreach ($icons as $key => $icon):
				    					$image = HTML::MegaImg('events/category', $icon, null, null, $icons_title[$key]);
				    					echo "<span class='img'>{$image}</span>";
				    				endforeach;
								?>
							</div>
							<!--div class="place_button"><span>адрес</span><span>события</span></div-->
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

<link rel="stylesheet" href="<?php echo $anons_config['path_site']?>/js/redactor/css/redactor.css" type="text/css" />
<script type="text/javascript">
	var use_redactor = true, use_ajax_load = true;
</script>