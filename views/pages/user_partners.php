<div class="left upcoming item">
	<div class="wrapp">
		<div id="tabs">
			<ul>
				<li data-href="/users/events"><span>Наблюдаемые события</span></li>
				<li data-href="/users/places"><span>Любимые места</span></li>
				<?php if($user->public == 1): ?>
				<li data-href="/users/addevent" class="active"><span>Разместить событие</span></li>
				<?php else: ?>
				<li data-href="/users/partners" class="active"><span>Стать партнёром</span></li>
				<?php endif; ?>
				<li data-href="/users/logout" class="last"><a href="/users/logout"><span>Выйти</span></a></li>
			</ul>
		</div>

		<div class="my_wrapper">
			<div class="tab my_event">
				<?php if(isset($_GET['success'])) { echo "<p class='success'>Заявку принято</p>";} ?>
				<?php if($user->public == 2) { echo "<p class='success'>Вам отказано в партнёрстве</p>";} ?>
				<?php if($user->new == 1) { echo "<p class='success'>Заявка на рассмотрении</p>";} ?>
				<?php if($user->public == 0 and $user->new != 1):?>
				<form action="/users/addpartner" method="post" id="addEvent" enctype="multipart/form-data">
					<div class="row1">
						<div class="my_event_add">
							<label>ФИО <span class="red">*</span></label>
							<span class="default">ФИО</span>
							<input type="text" name="fio" id="fio" class="bind_input" />
							<div class="clear"></div>
						</div>
						<span class="under"></span>
						<div class="my_event_add">
							<label>EMAIL <span class="red">*</span></label>
							<span class="default">EMAIL</span>
							<input type="text" name="email" id="email" class="bind_input" />
							<div class="clear"></div>
						</div>
						<span class="under"></span>
						<div class="my_event_add">
							<label>Телефон <span class="red">*</span></label>
							<span class="default">Телефон</span>
							<input type="text" name="phone" id="phone" class="bind_input" />
							<div class="clear"></div>
						</div>
						<span class="under"></span>
						
					

					<div class="redactor_content_wrapp"><label style = "position: relative; left: 500px; font-size: 14px; color: #9054B3; font-weight: bold;">Рассказать о себе</label> <br /><br /><textarea id="redactor_content" name="redactor_content" style="width: 100%; height: 320px;"></textarea></div>
					
</div>

					
					<a class="a_demo_two button" onclick="pre_submit(); return false;" alt = "Подать заявку" title = "Подать заявку" style = "cursor: pointer; margin-top: 30px; margin-left: 510px; float: left;">Подать заявку</a>
<?php endif; ?>
					<input type="hidden" name="a" value="<?php echo md5($my_data[0]."anons_dp_ua")?>" />
					<input type="hidden" name="b" value="<?php echo $my_data[0]?>" />
					<input type="hidden" name="image" value="" id="image_hidden" />
					<input type="hidden" name="place_id" value="1">
					<input type="hidden" name="date_hour" value="" />
					<input type="hidden" name="date_minut" value="" />
					<input type="hidden" name="category" value="" />
			</div>
		</div>
	</div>
</div>

<link rel="stylesheet" href="<?php echo $anons_config['path_site']?>/js/redactor/css/redactor.css" type="text/css" />
<script type="text/javascript">
	var use_redactor = true, use_ajax_load = true;
	var pre_submit = function(){
		document.getElementById('addEvent').submit();
	};
</script>