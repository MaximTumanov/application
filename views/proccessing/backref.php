<div class="left upcoming item">
	<div class="wrapp">
		<div class="static backref">
			<?php if($real_request):?>
				<h2 class="proccessing_loader_text" style="line-height: 35px;">
					Ожидание подтверждения оплаты.<br/>
					Пожалуйста, не закрывайте и не покидайте данную страницу.<br/>
					Время ожидания может составить до 5 мин.
				</h2>
				<div class="proccessing_loader"></div>
			<?php else:?>
				<h2>Ошибка получения данных</h2>
			<?php endif;?>
		</div>
	</div>
</div>

<script>
	var check_ipn = <?php echo ($real_request) ? "true" : "false";?>
		,	payrefno = <?php echo ($payrefno) ? $payrefno : "false" ?>
</script>