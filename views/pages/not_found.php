<?php
	$error_text = array(
		'bad_transaction' => "Извините, но мы не смогли найти Ваш заказ c номером <b>{$tkt_number}-{$payrefno}</b>.<br/>
			Пожалуйста, обратитесь по адресу <a href='mailto:tickets@anons.dp.ua'>tickets@anons.dp.ua</a> для уточнения информации.",
		'bad_user' => "Вы не <a href='http://anons.dp.ua/users'>авторизированы</a> или время сессии истекло.",
		'bad_order' => "Извините, но мы не смогли найти Ваш заказ."
	);
?>
<div class="left upcoming item">
	<div class="wrapp">
		<div class="not_found"><?php echo $error_text[$error_type]?></div>
	</div>
</div>