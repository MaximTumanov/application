<div class="left upcoming">
	<div class="wrapp blog">
		<h1 class="color-orang ttl"><?php echo $title?></h1>
		
		<div id="places_list">
			<?php
				foreach ($blogList as $key => $blog):
					list($day, $month, $year) = explode(' ', date('d n Y', strtotime($blog->date)));
					$href = Route::url('blog', array('controller' => 'blog', 'action' => 'show', 'item_alias' => $blog->alias));
					$month = $anons_config['month'][$month];
					HTML::replaceImg(&$blog->desc);
/*tidy_setopt('output-xml' , true ); 
tidy_setopt('input-encoding' , 3 ); 
tidy_setopt('output-encoding' , 3 ); 
tidy_setopt('language' , 'ru' );*/

					$desc = tidy_repair_string(HTML::cropstr($blog->desc, 200), array(), 'utf8');
					$has_href = ($blog->images_folder || substr($desc, -3) == '...') ? true : false ;
				?>

				<div itemscope itemtype="http://schema.org/Event">
					<div class="place_line">
						<div class="blog_short_title asm_all <?php echo ($has_href) ? 'p_href' : '' ?>" href="<?php echo $href;?>" alt="<?php echo $blog->title?>">
							<p class="date">
								<span><?php echo $day?></span> <?php echo $month?> <span class="large_text" itemprop="name"><?php echo $blog->title?></span>
								<?php if($blog->images_folder):?><sup>фотоотчет</sup><?php endif;?>
							</p>
						</div>
						<div class="blog_short_text">
							<?php echo $desc?>
							<?php if ($has_href): ?>
								<a class="color-orang-imp" href="<?php echo $href?>">читать далее</a>
							<?php endif;?>
						</div>
					</div>
				</div>

				<?/*
				<div class="p_href" href="<?php echo $href;?>" alt="<?php echo $blog->title?>">
					<div class="place_line">
						<div class="p_img"><?php echo HTML::MegaImg('blog', 'no_img_events.gif', 'post_load', '', $blog->title, $anons_config['EVENT_IMG_ALL'], $blog->image);?></div>
						<div class="p_info">
              <p class="date"><span><?php echo $day?></span> <?php echo $month?></p>
							<h2><?php echo $blog->title?></h2>

							<div class="ghj">
								<?php echo HTML::cropstr($blog->s_desc, 25)?>
              </div>
						</div>

						<div class="clearer"></div>
					</div>
				</div>
				*/?>
			<?php endforeach;?>
		</div>
		<?php if (count($blogList) > 30):?>
			<div id="pag_number"></div>
		<?php endif;?>
	</div>
</div>
<script type="text/javascript">
	var use_pagination = true,
		items_per_page = 30,
		use_ajax = false;
</script>