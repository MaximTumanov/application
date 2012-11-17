<div class="left upcoming">
	<div class="wrapp">
		<h1 class="color-gray ttl"><?php echo $title?></h1>
		
		<div id="places_list">
			<?php

				foreach ($filmsList as $key => $film):
				//list($day, $month, $year, $time) = explode(' ', date('d n Y H:i', strtotime($film->date)));
			//	$href = (isset($date))
				//	? Route::url('event', array('controller' => 'films', 'action' => 'show', 'item_alias' => $film->alias, 'date' => $date))
					//:
                    $href =  Route::url('films', array('controller' => 'films', 'action' => 'show',  'item_alias' => $film->original_name));
					
			//	$month = $anons_config['month'][$month];



                $dateArray = explode('-', $film->date_first);

 
  $typ =  mktime(0, 0, 1, $dateArray[1], $dateArray[2], $dateArray[0]);
$now = time();



			?>
				<div class="twocolum p_href" itemscope itemtype="http://schema.org/Movie" href="<?php echo $href;?>" alt="<?php echo $film->title?>">
					<meta itemprop="description" content="<?php echo HTML::cropstr($film->s_desc, 25)?>">
					<meta itemprop="image" content="<?php echo HTML::MegaImg('films/films', 'no_img_events.gif', 'post_load', '', '', $anons_config['EVENT_IMG_ALL'], $film->image, true);?>">
					<div class="place_line">
						<div class="p_img"><?php echo HTML::MegaImg('films/films', 'no_img_events.gif', 'post_load', '', '', $anons_config['EVENT_IMG_ALL'], $film->image);?></div>
						<div class="p_info">
							<h2><a itemprop="name" href="<?php echo $href?>"><?php echo $film->title; ?> </a>
								<?php if($typ > $now): ?>
								<sup class="sup-2" style = "font-size: 15px; font-weight: bold !important;">Скоро</sup>
							<?php endif; ?>
								<?php // echo HTML::getWTF($film->wtf);?></h2>

							<div class="ghj"><?php echo HTML::cropstr($film->s_desc, 25)?><br />
                            <?php $films_arr = array(); foreach($cinema as $key => $item):
					                $tim = '';
					                
					                
                                    $filmsHref = Route::url('cinema', array("controller" => "cinema", "action" => "show", "item_alias" => $item->alias));
                                    if($item->original_name == $film->original_name){
                                    	
                                    	$tim = array();
                                    	foreach($filmsTime as $times):

					                    if ($times['id_films'] == $item->id_films):
					                        $tim[] = $times['time'];
					                    endif;
					                endforeach;
					                sort($tim);
									$separated = implode("; ", $tim);
                                      $films_arr[] = "<a class='has_tooltip' data-tooltip=' Время сеансов:<br />" . $separated ."' style='color: #E85700;' href='{$filmsHref}'>{$item->title}</a>";
                                    }
                                    

                            endforeach; ?>
                    <?php if(!empty($films_arr)){
                      echo implode(';&nbsp;', $films_arr);
                    }
                    ?>
                            </div>
						</div>

						<div class="clearer"></div>
					</div>
				</div>
			<?php endforeach;?>
		</div>
		<?php if (count($filmsList) > $anons_config['items_per_page']):?>
			<div id="pag_number"></div>
		<?php endif;?>
	</div>
</div>
<script type="text/javascript">
	var use_pagination = true,
		items_per_page = <?php echo $anons_config['items_per_page']?>,
		use_ajax = false;
</script>