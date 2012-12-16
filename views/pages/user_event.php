<pre>
<?php
	$model = new Model_Event();
	$day = "";
	$date_from = "";
	$date_to = "";

	if ($event->type != 4) {
		$eDate = $model->getEventDate($event->id_event);
		list($hour, $minute) = explode(':', $eDate->time);
		$date = $eDate->date;
		
		if ($event->type == 2 || $event->type == 3 || $event->type == 5) {
			$eDate = $model->getEventDate($event->id_event, true);
			list($hour, $minute) = explode(':', $eDate->time);
			$day = $eDate->day;

			if ($eDate->dateFrom) {
				$date_from = substr($eDate->dateFrom, 0, 11);
			}
			
			if ($eDate->dateTo) {
				$date_to = substr($eDate->dateTo, 0, 11);
			}
		}
	}

?>
</pre>
<div class="left upcoming item">
	<div class="wrapp">
		<div id="tabs">
			<ul>
				<li data-href="/users/events"><span>Наблюдаемые события</span></li>
				<li data-href="/users/places"><span>Любимые места</span></li>
				<?php if($user->public == 1): ?>
					<li data-href="/users/eventsall"><span>Мои события</span></li>
					<li data-href="/users/addevent" class="active"><span>Разместить событие</span></li>
				<?php else: ?>
					<li data-href="/users/partners"><span>Стать партнёром</span></li>
				<?php endif; ?>
				<li data-href="/users/logout" class="last"><a href="/users/logout"><span>Выйти</span></a></li>
			</ul>
		</div>

		<div class="my_wrapper">
			<div class="tab my_event">
				<form action="/users/add" method="post" id="addEvent" enctype="multipart/form-data">
					<div class="row1">
						<div class="my_event_add">
							<label>Заголовок события <span class="red">*</span></label>
							<span class="default"></span>
							<input type="text" name="title" id="title" class="bind_input" value="<?php echo $event->title?>" />
							<div class="clear"></div>
						</div>

						<div class="my_event_add">
							<label>Организатор <span class="red">*</span></label>
							<span class="default hidden">Заголовок</span>
							<input type="text" class="bind_input" value="<?php echo $place->title?>" disabled="disabled" readonly />
							<div class="clear"></div>
						</div>
						<span class="under"></span>
					</div>

					<div class="row1-1">
						<div class="my_event_add">
						<div><label>Категория <span class="red">*</span></label></div>
							<select id="categories" multiple="true">
							<?php $cats = explode(",", $event->categories); foreach ($category as $key => $cat):  foreach ($cats as $key => $catitem): 
							if($cat->id_category == $catitem):
							?>
								<option value="<?php echo $cat->id_category?>" selected= "selected"><?php echo $cat->title?></option>
								<?php else: ?>
								<option value="<?php echo $cat->id_category?>" ><?php echo $cat->title?></option>
								<?php endif; ?>
								<?php endforeach;?>
							<?php endforeach;?>
							</select>
						</div>

						<div class="my_event_add">
							<label>Цена</label>
							<span class="default hidden">Укажите цену</span>
							<input type="text" class="bind_input" id="price" value="<?php echo $event->price?>" />
							<div class="clear"></div>

							<div class="price_changer_box">
								<?php if($event->price >= 0): ?>
									<div><span data-val="0" class="price_changer active">Указать цену</span></div>
								<?php else: ?>
									<div><span data-val="0" class="price_changer">Указать цену</span></div>
								<?php endif; ?>
								<?php if($event->price == "Вход свободный"): ?>
									<div><span data-val="Вход свободный" class="price_changer active">Вход свободный</span></div>
								<?php else: ?>
									<div><span data-val="Вход свободный" class="price_changer">Вход свободный</span></div>
								<?php endif; ?>
								<?php if($event->price == "Уточняйте дополнительно"): ?>
									<div><span data-val="Уточняйте дополнительно" class="price_changer active">Уточняйте дополнительно</span></div>
								<?php else: ?>
									<div><span data-val="Уточняйте дополнительно" class="price_changer">Уточняйте дополнительно</span></div>
								<?php endif; ?>
								
							</div>

						</div>

						<span class="under"></span>
					</div>

					<div class="row2">
						<div class="my_event_add">
							<label class="label">Дата проведения <span class="red">*</span></label>
							<table class="admintable">
								<tbody><tr>
									<?php 
										$dateitems = explode(' ', $event->date);
										$timeitems = explode(':', $dateitems[1]);

									?>
									<?php if($event->type == 1): ?>
									<td><input type="radio" name="type" id="type-1" value="1" checked="checked"> <label for="type-1">одна дата</label></td>
									<?php else: ?>
									<td><input type="radio" name="type" id="type-1" value="1" checked=""> <label for="type-1">одна дата</label></td>
									<?php endif; ?>
									<?php if($event->type == 2): ?>
									<td><input type="radio" name="type" id="type-2" value="2" checked="checked" > <label for="type-2">еженедельное событие</label></td>
									<?php else: ?>
									<td><input type="radio" name="type" id="type-2" value="2"> <label for="type-2">еженедельное событие</label></td>
									<?php endif; ?>
									<?php if($event->type == 3): ?>
									<td><input type="radio" name="type" id="type-3" value="3" checked="checked"> <label for="type-3">ежемесячное событие</label></td>
									<?php else: ?>
									<td><input type="radio" name="type" id="type-3" value="3"> <label for="type-3">ежемесячное событие</label></td>
									<?php endif; ?>
								</tr>
								<tr>
									
									<td colspan="4">
										<div id="tabss-1" style="display: <?php echo ($event->type == 1) ? 'block' : 'none'?>;">
											<?php if($dateitems && $timeitems): ?>
											<input class="datepicker" readonly type="text" name="date" id="date" value="<?php echo $dateitems[0]; ?>" class="inputbox" size="25" maxlength="19"><img class="calendar_img" src="<?php echo $anons_config['path_site']?>/images/calendar.png" alt="calendar" id="date_img"><?php echo Date::getHours($timeitems[0]);?> : <?php echo Date::getMinutes($timeitems[1]);?>
											<?php else: ?>
											<input class="datepicker" readonly type="text" name="date" id="date" value="<?php echo Date::getDates();?>" class="inputbox" size="25" maxlength="19"><img class="calendar_img" src="<?php echo $anons_config['path_site']?>/images/calendar.png" alt="calendar" id="date_img"> <?php echo Date::getHours();?> : <?php echo Date::getMinutes();?>
										<?php endif; ?>
										</div>
										<div id="tabss-2" style="display: <?php echo ($event->type == 2) ? 'block' : 'none'?>; ">
											<p><span class="fiw_span">Начало<span class="red">*</span></span> <input type="text" class="datepicker"  readonly name="date_from_val"  value="<?php echo $date_from?>" class="inputbox" size="25" maxlength="19"><img class="calendar_img" src="<?php echo $anons_config['path_site']?>/images/calendar.png" alt="calendar" id="date_from_img"></p>
											<p><span class="fiw_span">Окончание<span class="red">*</span></span> <input class="datepicker"  readonly type="text" name="date_to_val" value="<?php echo $date_to?>" class="inputbox" size="25" maxlength="19"><img class="calendar_img" src="<?php echo $anons_config['path_site']?>/images/calendar.png" alt="calendar" id="date_to_img"></p>
											<p><span class="fiw_span">День недели<span class="red">*</span></span> <?php echo Date::getDays($day);?></p>
											<p><span class="fiw_span">Время проведения<span class="red">*</span></span> <?php echo Date::getHours($timeitems[0]);?> : <?php echo Date::getMinutes($timeitems[1]);?></p>
										</div>
										<div id="tabss-3" style="display: <?php echo ($event->type == 3) ? 'block' : 'none'?>; ">
											<p><span class="fiw_span">Начало<span class="red">*</span></span> <input type="text" class="datepicker"  readonly name="date_from_val" id="date_from1" value="<?php echo $date_from?>" class="inputbox" size="25" maxlength="19"><img class="calendar_img" src="<?php echo $anons_config['path_site']?>/images/calendar.png" alt="calendar" id="date_from1_img"></p>
											<p><span class="fiw_span">Окончание<span class="red">*</span></span> <input class="datepicker"  readonly type="text" name="date_to_val" id="date_to1" value="<?php echo $date_to?>" class="inputbox" size="25" maxlength="19"><img class="calendar_img" src="<?php echo $anons_config['path_site']?>/images/calendar.png" alt="calendar" id="date_to1_img"></p>
											<p><span class="fiw_span">Дата события<span class="red">*</span></span> <?php echo Date::getDates();?></p>
											<p><span class="fiw_span">Время проведения<span class="red">*</span></span> <?php echo Date::getHours($timeitems[0]);?> : <?php echo Date::getMinutes($timeitems[1]);?></p>
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

					<div id="block_for_image" class="event_img"></div>

					<div class="redactor_content_wrapp"><textarea id="redactor_content" name="redactor_content" style="width: 100%; height: 320px;" ><?php echo $event->desc?></textarea></div>
					<br/><br/>

					<a class="a_demo_two button" onclick="pre_submit(); return false;" alt = "Сохранить" title = "Сохранить" style = "cursor: pointer; margin-top: 30px; margin-left: 510px; float: left;">Сохранить</a>

					<input type="hidden" name="a" value="<?php echo md5($my_data[0]."anons_dp_ua")?>" />
					<input type="hidden" name="b" value="<?php echo $my_data[0]?>" />
					<input type="hidden" name="image" value="" id="image_hidden" />
					<input type="hidden" name="place_id" value="<?php echo $user->id_place?>">
					<input type="hidden" name="date_hour" value="" />
					<input type="hidden" name="date_minut" value="" />
					<input type="hidden" name="category" value="" />
					<input type="hidden" name="without_moderation" value="<?php echo $user->vip?>">
					<input type="hidden" name="date_from" id="date_from">
					<input type="hidden" name="date_to" id="date_to">
					<input type="hidden" name="price_event" id="price_event">
					<input type="hidden" name="id_event" id="id_event" value="<?php echo $event->id_event?>">
					<input type="hidden" name="day" id="day">
			</div>
		</div>
	</div>
</div>

<link rel="stylesheet" href="<?php echo $anons_config['path_site']?>/js/redactor/css/redactor.css" type="text/css" />
<script type="text/javascript">
	var use_redactor = true
		, use_ajax_load = true
		, show_add_event_dialog = <?php echo (isset($_GET['success'])) ? 'true' : 'false'?>
		, show_add_event_dialog_without_moderation = <?php echo ($user->vip) ? 'true' : 'false';?>;

	var pre_submit = function(){
		$('input[name=date_hour]').val($('select[name=hour]:visible').val());
		$('input[name=date_minut]').val($('select[name=minut]:visible').val());
		$('#day').val($('select[name=day]:visible').val());
		$('#date_from').val($('input[name=date_from_val]:visible').val());
		$('#date_to').val($('input[name=date_to_val]:visible').val());
		$('#price_event').val($('#price').val());
		$('input[name=category]').val($('#categories').val().join(','));

		document.getElementById('addEvent').submit();
	};
	
</script>