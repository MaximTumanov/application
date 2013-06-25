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

<!-- Google Code for anons.dp.ua/proccessing/backref Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 985077696;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "A68dCPi38gQQwK_c1QM";
var google_conversion_value = 1;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/985077696/?value=1&amp;label=A68dCPi38gQQwK_c1QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
