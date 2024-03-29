﻿<div class="left recommended">
  <div class="wrp">

    <div id="banner-fade">
      <ul class="bjqs">
         <li><a href="http://anons.dp.ua/events/show/festival/festival-etnoselo-100pud%D0%86vka" title="Найди своё событие - Anons.dp.ua" alt="Найди своё событие - Anons.dp.ua"><img src="http://anons.dp.ua/images/banner/banner_100pud.png"></a></li>
        <li><a href="http://anons.dp.ua/events/show/festival/festival-the-best-cityua2013/2013-07-13" title="Найди своё событие - Anons.dp.ua" alt="Найди своё событие - Anons.dp.ua"><img src="http://anons.dp.ua/images/banner/best_city.jpg"></a></li>
        <!--li><a href="http://anons.dp.ua/events/show/concert/vecher-sovremennoy-horeografii--master-klassyi-1363189087" title="Найди своё событие - Anons.dp.ua" alt="Найди своё событие - Anons.dp.ua"><img src="http://anons.dp.ua/images/banner/5.png"></a></li-->
      </ul>
    </div>

    <?php if($eventList):?>
      <ul>
        <li>
            <h1 class="title fiolet">Афиша Днепропетровска - Рекомендуем посетить</h1>
            <div class="box">
            <?php 
              foreach ($eventList as $event):
              list($day, $month, $year, $time, $day_num) = explode(' ', date("d n Y H:i w", strtotime($event->date)));

              $eventHref = Route::url('event', array('controller' => 'events', 'action' => 'show', 'cat_alias' => $event->catAlias, 'item_alias' => $event->alias, 'date' => substr($event->date,0,10)));

              $ids[] = $event->id_event;
              $show_day_str = (date('Y-m-d', strtotime($event->date)) != date("Y-m-d")) ? true : false ;
            ?>
              <div class="left main_event" itemtype="http://schema.org/Event" itemscope>
              <meta itemprop="startDate" content="<?php echo date("Y-m-dTH:i:s+03:00", strtotime($event->date))?>">
              <meta itemprop="url" content="http://anons.dp.ua<?php echo $eventHref?>">
              <meta itemprop="description" content="<?php echo HTML::cropstr($event->s_desc, 25)?>">
              <meta itemprop="image" content="<?php echo HTML::MegaImg('events/events', 'no_img_events.gif', 'post_load', '', '', $anons_config['EVENT_IMG_ALL'], $event->image, true);?>">
                
              <div class="comment-column clear">
                <div class="comment justify pointer" href="<?php echo $eventHref?>" title="<?php echo $event->title?>">
                  <div class="who clear">
                    <?php if($event->price == 'Вход свободный'):?>
                    <div class="free_price_title">вход свободный</div>
                    <?php endif;?>

                    <?php if($event->has_eticket == 1):?>
                    <div class="free_price_title">Купить билет</div>
                    <?php endif;?>

                    <div class="left">
                      <a href="<?php echo $eventHref?>" title="<?php echo $event->title?>"><?php echo HTML::MegaImg('events/events', $event->image, 'img_small', 'float: left', '', $anons_config['EVENT_IMG_FRONT']);?></a>
                    </div>
                    <div class="left w230px">
                      <p class="date">
                        <?php if($show_day_str):?>
                          <span><?php echo $day?></span> <?php echo $anons_config['month'][$month]?>
                          <span><?php echo ($time != '00:00' ? $time : '')?></span> <?php echo $anons_config['days_short'][$day_num]?>
                        <?php else:?>
                          <span>Сегодня в</span>
                          <span><?php echo $time?></span>
                        <?php endif;?> 
                      </p>
                      <p class="href"><a class="block" title="<?php echo $event->title?>" href="<?php echo $eventHref?>"><span itemprop="name"><?php echo $event->title?></span></a></p>
                      <?php if($event->placeAlias != "must_be_hide"):?>
                        <u><?php echo ($event->place_dop_title) ? "{$event->place_dop_title}" : $event->place_title;?></u>
                      <?php endif;?>
                      
                      <?php HTML::showPrice($event->price)?>
                      <?php echo HTML::cropstr($event->s_desc, 15);?>
                    </div>
                  </div>            
                </div>
              </div>
              </div>  
            <?php endforeach;?>
            <div class="clearer"></div>
            </div>


            <h2 id="actual" class="title fiolet hidden_hard">Актуальные события</h2>
            <div id="quick_search_box"></div>
            <div class="clearer"></div>
        </li>
      </ul>
    <?php endif;?>
  </div>
</div>

<?php if (isset($widgets)):?>
<div class="right"> 
    <noindex>       
    <?php 
      if (isset($widgets['calendar'])) {
        echo $widgets['calendar'];
      }
    ?>
    </noindex> 
    <?php 
      if (isset($widgets['search'])) {
        echo $widgets['search'];
      }
    ?>             
</div>
<?php endif;?>

<script>
  var use_main_slider = true;
</script>