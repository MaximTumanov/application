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
				<?php if(isset($_GET['success'])) { echo "<p class='success'>Спасибо!</p>";} ?>
				<?php if($user->public == 3) { echo "<p class='success'>Поздравляем! Вы можете самостоятельно публиковать афишу своих мероприятий. Чтобы начать, перейдите во вкладку «Разместить событие». </p>";} ?>
				<?php if($user->public == 2) { echo "<p class='success'>К сожалению, на данный момент Вы не можете размещать афишу своих мероприятий. Детальная информация была отправлена на Ваш e-mail, указанный при регистрации. </p>";} ?>
				<?php if($user->new == 1) { echo "<p class='success'>Ваша заявка принята. На рассмотрение нам понадобится некоторое время. О результатах мы сообщим Вам по электронной почте. </p>";} ?>
				<?php if($user->public == 0 and $user->new != 1):?>
				<form action="/users/addpartner" method="post" id="addUser">
					<div class="row1">
						<div class="my_event_add">
							<label>ФИО <span class="red">*</span></label>
							<span class="default <?php echo ($user->fio) ? 'hidden' : '';?>">ФИО</span>
							<input type="text" name="fio" id="fio" class="bind_input" value="<?php echo $user->fio?>" />
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
						<div class="my_event_add">
							<label>Организатор <span class="red">*</span></label>
							<select name="id_place">
								<option value="0">Выберите организатора</option>
								<?php foreach($places as $key => $place):?>
									<option value="<?php echo $place->id_place?>"><?php echo $place->title?></option>
								<?php endforeach;?>
							</select>
							<div class="clear"></div>
						</div>
						<span class="under"></span>
					<div class="redactor_content_wrapp"><label class = "show_block" style = "position: relative; left: 506px; font-size: 14px; color: #E85700; border-bottom: 1px dashed #E85700; font-weight: bold; cursor:pointer;" onclick="show_block();" title = "Нажмите чтобы раскрыть или закрыть анкету">Рассказать о себе</label> <br /><br /><div id = "redaktor" style = "display: none;"><textarea id="redactor_content" name="redactor_content" style="width: 100%; height: 320px; "></textarea></div></div>
			</div>

					
					<a class="a_demo_two button" onclick="pre_submit(); return false;" alt = "Подать заявку" title = "Подать заявку" style = "cursor: pointer; margin-top: 30px; margin-left: 510px; float: left;">Подать заявку</a>
<?php endif; ?>
					<input type="hidden" name="a" value="<?php echo md5($my_data[0]."anons_dp_ua")?>" />
					<input type="hidden" name="b" value="<?php echo $my_data[0]?>" />
			</div>
		</div>
	</div>
</div>

<link rel="stylesheet" href="<?php echo $anons_config['path_site']?>/js/redactor/css/redactor.css" type="text/css" />
<script type="text/javascript">
	var use_redactor = true, use_ajax_load = true;
	var pre_submit = function(){
		document.getElementById('addUser').submit();
	};
	click = 1
	var show_block = function(){
		
		
			
			if(click == 1){
			$("#redaktor").show();
			click = 0;
		}else{
			$("#redaktor").hide();
			click = 1;
		};

		};
	
</script>