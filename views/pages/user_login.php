<div class="left upcoming item">
	<div class="wrapp users_login_form">
		<div class="centerer">
		<div id="login">
			<div class="old_user left">
				<form action="/users/login" method="post" id="login">
					<div class="box_input">
						<span class="default">Email</span>
						<input type="text" name="login" autocomplete="off" id="old_login" class="bind_input" />
						<div class="clear"></div>
					</div>

					<div class="clear"></div>

					<div class="box_input">
						<span class="default">Пароль</span>
						<input type="password" name="pass" autocomplete="off" id="old_pass" class="bind_input" />
						<div class="clear"></div>
					</div>
						
					<div class="button bold login">Войти</div>
					<input type="hidden" name="method" value="login">
				</form>
			</div>

			<div class="center left">или</div>
			
			<div class="new_user left">
				<form action="/users" method="post" id="register">
					<div class="box_input">
						<span class="default">Email</span>
						<input type="text" name="login" autocomplete="off" id="new_login" class="bind_input" />
						<div class="clear"></div>
					</div>

					<div class="clear"></div>

					<div class="box_input">
						<span class="default">Пароль</span>
						<input type="password" name="pass" autocomplete="off" id="new_pass" class="bind_input" />
						<div class="clear"></div>
					</div>
						
					<div class="button bold register">Создать</div>
					<input type="hidden" name="method" value="register">
				</form>
			</div>
		</div>

		<div class="clearer"></div>
		</div>

		<?php if (isset($error)): ?>
			<div class="error_user"><?php echo $error ?></div>
		<?php endif;?>

		<div class="ulogin_title">Войти с помощью: </div>
		<div id="uLogin"></div>

	</div>
</div>
<script src="http://ulogin.ru/js/widget.js?display=panel&fields=first_name,last_name,photo&providers=vkontakte,google,facebook,twitter,openid&hidden=&redirect_uri=<?php echo $anons_config['path_site']?>/users/login"></script>
