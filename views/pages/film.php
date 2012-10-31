<?php

    $cinemaHref = Route::url('cinema', array('controller' => 'cinema', 'action' => 'show', 'item_alias' => $item->cinemaAlias));
    $id = $item->id_films;
    $relatedFilms = null;
    HTML::replaceImg(&$item->desc);
?>
<div class="left upcoming item" itemscope maincontentofpage itemtype="http://schema.org/Movie">
	<div class="wrapp fix_right_padding">
        <div class="event_cat">
            <?php if($item->_3d == 1):?>
<span>

<img class="" title="Кино в 3D" src="/images/3d.png" style="">

</span>
    <?php endif;?>

            <?php if($item->premiere == 1):?>
            <span>

<img class="" title="Премьера" src="/images/premiere.png" style="">

</span>
            <?php endif;?>
        </div>


            		<h1><p class="event_title" itemprop="name"><?php echo $item->title;?></p></h1>
                <div class="img_wrapp">
            		<?php echo ($item->image) 
            			? HTML::MegaImg('films/films', $item->image, 'event_img', 'float: left', $item->title, $anons_config['EVENT_IMG_DESC'])
            			: HTML::MegaImg('films', 'no-image.gif', 'event_img', 'float: left');
            		?>
                </div>

<?php if ($relatedCinema):?>
<div class="more_info_wrapp">
    <h3 class="color-orang-imp">Кинотеатры</h3>
    <?php
        foreach ($relatedCinema as $films):
        $filmsHref = Route::url('cinema', array("controller" => "cinema", "action" => "show", "item_alias" => $films->alias));
        list($yearf, $monthf, $dayf ) = explode(' ', date('Y n d', strtotime($films->date_first)));
        list($yearl, $monthl, $dayl ) = explode(' ', date('Y n d', strtotime($films->date_last)));
        $monthf = $anons_config['month'][$monthf];
        $monthl = $anons_config['month'][$monthl];
    ?>

    <a href="<?php echo $filmsHref?>" title="<?php echo $films->title?>"><?php echo $films->title?></a>
    <p class="small">
        <?php 
            if($yearf == $yearl and $monthf==$monthl and $dayf==$dayl): 
                echo $dayf . ' ' . $monthf;
            else:
                echo 'с ' . $dayf . ' ' . $monthf . ' по ' . $dayl . ' ' .$monthl; 
            endif;
        ?>
    </p>
    <p class="mg_b5px small">
        <?php
        $seans = array();
        $separated = "";
        foreach($filmsTime as $times):

            if ($times['id_films'] == $films->id_films):
                $seans[] = $times['time'];
            endif;

        endforeach;
        sort($seans);
        $separated = implode(", ", $seans);
        echo $separated;
        ?>
    </p>

    <?php endforeach;?>
</div>
<?php endif;?>

            		<div class="event_info">
                        <?php if ($item->video):?>
                        <p><a href="#" class="maps" id="videos_show">Показать трейлер</a></p>
                        <?php endif;?>
            			


                <div class="event_text">
                    <p><span style="font-weight: bold;">ЖАНР:</span> <span itemprop="genre"><?php echo $item->genre.'  ';?></span></p>
                    <p><span style="font-weight: bold;">ДЛИТЕЛЬНОСТЬ:</span> <?php echo $item->duration.'  ';?></p>
                    <p><span style="font-weight: bold;">РЕЖИССЁР:</span> <span itemprop="director"><?php echo $item->director.'  ';?></span></p>
                    <p><span style="font-weight: bold;">СТРАНА:</span> <?php echo $item->country.'  ';?></p>
                    <p><span style="font-weight: bold;">АКТЁРЫ:</span> <span itemprop="actors"><?php echo $item->actors?></span></p>
                    <p style="font-weight: bold;">ОПИСАНИЕ:</p><span itemprop="description"><?php echo $item->desc?></span><br />
                </div>
<span id="social_nets"></span>
            		</div>
                              


            	<div class="clearer"></div>
              <?php if ($item->video):?>
                <iframe id= "videos" class = "hide" width="560" height="315" src="http://www.youtube.com/embed/<?php echo $item->video;?>" frameborder="0" allowfullscreen></iframe>
              <?php endif;?>
            		
                    <?php if(isset($use_vkontakte_comment)):?>
                        <script type="text/javascript">
                          VK.init({apiId: 3192678, onlyWidgets: true});
                        </script>

                        <!-- Put this div tag to the place, where the Comments block will be -->
                        <div class="vkontakte_comment_wrapper"><div id="vk_comments"></div></div>
                        <script type="text/javascript">
                        VK.Widgets.Comments("vk_comments", {limit: 10, width: "600", attach: false});
                        </script>
                    <?php endif;?> 


            	</div>

    <?php if (false && $relatedCinema):?>
    <a name="cinema"><div class="related_event_title" >Кинотеатры</div></a>
    <?php
    foreach ($relatedCinema as $films):
        $filmsHref = Route::url('cinema', array("controller" => "cinema", "action" => "show", "item_alias" => $films->alias));
        list($yearf, $monthf, $dayf ) = explode(' ', date('Y n d', strtotime($films->date_first)));
        list($yearl, $monthl, $dayl ) = explode(' ', date('Y n d', strtotime($films->date_last)));
        $monthf = $anons_config['month'][$monthf];
        $monthl = $anons_config['month'][$monthl];
        ?>
        <div class="related_event related_films">
            <div class="r_title"><p><a href="<?php  echo $filmsHref?>" title="<?php echo $films->title?>"><?php echo $films->title?></a><br/></div>
            <?php if($yearf == $yearl and $monthf==$monthl and $dayf==$dayl): ?>
            <span>Показ <p class="date"><span><?php echo $dayf?></span> <?php echo $monthf?></p></span>
        <?php else:?>
            <span>Период показа<p class="date"><span>с <?php echo $dayf?></span> <?php echo $monthf?>  по  <?php echo $dayl?></span> <?php echo $monthl?></p></span>
            <?php endif;?>
            <a href="<?php  echo $filmsHref?>" title="<?php echo $films->title?>">
                <?php echo HTML::MegaImg('films/cinema', $films->image, null, null, $films->title, $anons_config['EVENT_IMG_RELATED']);?>
            </a>
            <span>Сеансы
            <div><?php
                $seans = array();
                $separated = "";
                foreach($filmsTime as $times):

                    if ($times['id_films'] == $films->id_films):
                        $seans[] = $times['time'];
                    endif;
                    
                endforeach;
                sort($seans);
                    $separated = implode("; ", $seans);
                    echo $separated;
                    ?>
            </div></span>
        </div>
        <?php endforeach;?>
    <div class="clearer"></div>
    <?php endif;?>

</div>