<noindex>
<script type="text/javascript">
	var actions = [
		["<?php echo Route::url('default', array('controller' => 'events', 'action' => 'search'))?>"],
		["<?php echo Route::url('default', array('controller' => 'places', 'action' => 'search'))?>"]
	];
</script>

</noindex>
<div id="search">
	<h3 class="title fiolet">Быстрый поиск</h3>
	 	<form action="" method="post" enctype="application/x-www-form-urlencoded">

	 			<div class="quick_search">
	 				<span data-search="today" class="small orange_dashed">Сегодня</span>
	 				<span data-search="tomorrow" class="small orange_dashed">Завтра</span>

	 				<?php foreach ($catListActive as $k => $cat):?>
	 					<span data-search="<?php echo $cat->id_category?>" class="small orange_dashed"><?php echo $cat->title?></span>
	 				<?php endforeach;?>
	 			</div>

	  		<input type="text" name="text" id="text" value="" placeholder="Что ищем?" />
	  		<p>Поиск по:</p>

	  		<input type="radio" class="radio_type" name="type" value="0" id="type_0" checked="checked"/> <label for="type_0">событиям</label>
	  		<span style="padding: 0 20px"></span>
	  		<input type="radio" class="radio_type" name="type" value="1" id="type_1" /> <label for="type_1">местам</label>

	   		<p><span class="show_cat_group orange_dashed">Выберите категорию:</p>
	   			<div id="cat_group" class="hidden">
		   			<div class="left cat_checkbox first">
		      	<?php foreach ($catList as $k => $cat):?>
		      		<?php if ($k%2 != 1):?>
		       		<div>
		       			<input type="checkbox" name="category[]" value="<?php echo $cat->id_category?>" /> 
		       			<?php echo $cat->title?>
		       		</div>
		       		<?php endif;?>
		       	<?php endforeach;?>
		   			</div>

		   			<div class="left cat_checkbox">
		      	<?php foreach ($catList as $k => $cat):?>
		      		<?php if ($k%2 == 1):?>
		       		<div>
		       			<input type="checkbox" name="category[]" value="<?php echo $cat->id_category?>" /> 
		       			<?php echo $cat->title?>
		       		</div>
		       		<?php endif;?>
		       	<?php endforeach;?>
		   			</div>

		      <div class="clearer"></div>
		    </div>

	   		<label for="date">Выберите дату:</label>
     		<select id="date" name="date_type">
					<option value="0">Любая</option>
					<option value="1">Сегодня</option>
					<option value="2">Завтра</option>
					<option value="3">Ближайшие выходные</option>
					<option value="4">Следующие выходные</option>
					<option value="5">Выбранный период</option>
    		</select>

				<div id="set_dates">
    			<input type="text" class="datepicker" name="date_from" id="date_from" value="<?php echo date('Y-m-d')?>" readonly="true" class="inputbox" size="10" maxlength="10" /><img class="calendar_img" src="<?php echo $anons_config['path_site']?>/images/calendar.png" alt="calendar" id="date_from_img" />
    			<input type="text" class="datepicker" name="date_to" id="date_to" value="<?php echo date('Y-m-d')?>" readonly="true" class="inputbox" size="10" maxlength="10" /><img class="calendar_img" src="<?php echo $anons_config['path_site']?>/images/calendar.png" alt="calendar" id="date_to_img" />
	      </div>
	      
	      <div class="clearer"></div>

	      <div id="time_date_slider_wrapper">
	      	<p>Выберите время:</p>
					<div id="time_from_text" class="time_display_search">10</div>
		      <div class="slider_search_wrapper">
		      	<div id="slider-range"></div>
		      </div>
					<div id="time_to_text" class="time_display_search">12</div>	
				</div>
				<div style = "margin: 10px;">
	   		<a class="a_demo_two button" alt = "Найти" title = "Найти" style = "cursor: pointer;">Найти</a>
	   		</div>
	   		<input type="hidden" name="time_from" id="time_from" value="00">
	   		<input type="hidden" name="time_to" id="time_to" value="24">
	   	</form>
        <i class="shadow"></i>
</div>
<div >                                      <div class="social_networking_site" style = "float:left;">
                    <script type="text/javascript">
                        document.write(VK.Share.button(false, {type:"custom", text:"<div class = 'vkicon'></div>"}));
                    </script>
                </div>
                <?php $_SERVER['REQUEST_URI']; ?>
                <div class="social_networking_site">
                    <a id="share" href="http://www.facebook.com/sharer.php?u=http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
                        <div class='fbicon'></div>
                    </a>
                </div>

                    <a href="http://volfar.com/share/twitter.php" target="_blank">
                        <div class="tvicon"></div>
                    </a>
                    <!-- Поместите этот тег туда, где должна отображаться кнопка +1. -->
                    <g:plusone size="medium" annotation="none"></g:plusone>

                    <!-- Поместите этот вызов функции отображения в соответствующее место. -->
                    <script type="text/javascript">
                        (function () {
                            var po = document.createElement('script');
                            po.type = 'text/javascript';
                            po.async = true;
                            po.src = 'https://apis.google.com/js/plusone.js';
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(po, s);
                        })();
                    </script></div>
<script type="text/javascript">
	var use_range_slider = true,
	time_from_to = ["00", "24"];
</script>