<?php
$item->title = $item->title;

$item->title = str_replace('\'', '"', $item->title);

if ($item->google) {
    list($g_x, $g_y, $g_zoom) = explode(':', $item->google);
}


HTML::replaceImg(&$item->desc);
?>
<div class="left upcoming item" itemscope maincontentofpage itemtype="http://schema.org/Place">
    <meta itemprop="address" content="<?php echo $item->address?>">
    <div class="wrapp fix_right_padding">
        <h1><p class="event_title" itemprop="name"><?php echo $item->title?></p></h1>
        <div class="img_wrapp">
            <?php echo ($item->image)
            ? HTML::MegaImg('films/cinema', $item->image, 'films_img', 'float: left', $item->title, $anons_config['EVENT_IMG_DESC'])
            : HTML::MegaImg('films', 'no-image.gif', 'films_img', 'float: left');
            ?>
        </div>

<?php if ($relatedFilms):?>
<div class="more_info_wrapp">
    <h3 class="color-orang-imp">Фильмы</h3>
    <?php
        foreach ($relatedFilms as $films):
        $filmsHref = Route::url('films', array("controller" => "films", "action" => "show", "item_alias" => $films->original_name));
        list($yearf, $monthf, $dayf ) = explode(' ', date('Y n d', strtotime($films->date_first)));
        list($yearl, $monthl, $dayl ) = explode(' ', date('Y n d', strtotime($films->date_last)));
        $monthf = $anons_config['month'][$monthf];
        $monthl = $anons_config['month'][$monthl];
    ?>

    <a itemprop="event" href="<?php echo $filmsHref?>" title="<?php echo $films->title?>"><?php echo $films->title?></a>
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

            if ($times->id_films == $films->id_films):
                $seans[] = $times->time;
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

            <?php if ($item->address):?>
            <p class="titl">Адрес:</p>
            <p><?php echo $item->address;?> <?php if (isset($g_x) && isset($g_y) && isset($g_zoom)):?>&rarr; <a href="#" class="maps" id="show_google_maps">показать на карте</a><?php endif;?></p>
            <?php endif;?>

            <?php if ($item->tel):?>
            <p class="titl">Телефоны:</p>
            <p itemprop="telephone"><?php echo strip_tags($item->tel);?></p>
            <?php endif;?>



            <div class="event_text">
                <?php echo $item->desc?>
            </div>
        </div>



        <div class="clearer"></div>


        <?php if (isset($g_x) && isset($g_y) && isset($g_zoom)):?>
            <div id="google_maps" class="hide"></div>
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
    <?php if (false && $relatedFilms):?>
    <a name="films"><div class="related_event_title">Сеансы фильмов</div></p>
    <?php
    foreach ($relatedFilms as $films):
        $filmsHref = Route::url('films', array("controller" => "films", "action" => "show", "item_alias" => $films->original_name));
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
                <?php echo HTML::MegaImg('films/films', $films->image, null, null, $films->title, $anons_config['EVENT_IMG_RELATED']);?>
            </a>
            <span>Сеансы
            <div>
<?php
                $seans = array();
                $separated = "";
                foreach($filmsTime as $times):

                    if ($times->id_films == $films->id_films):
                        $seans[] = $times->time;
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

<?php if (isset($g_x) && isset($g_y) && isset($g_zoom)):?>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">
    var createMap = function () {
        var latlng = new google.maps.LatLng(<?php echo $g_y?>, <?php echo $g_x?>);

        var content = '<p><b><?php echo str_replace(array('"', '\''), '', $item->title);?></b></p>';
        content += "<p><b>Адрес</b><br><?php echo $item->address?></p>";
        content += "<p><b>Телефон</b><br><?php echo str_replace(',', '</p><p>', $item->tel);?></p>";

        var myOptions = {
            zoom: <?php echo $g_zoom?>,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("google_maps"), myOptions);

        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            title:"<?php echo str_replace(array('"', '\''), '', $item->title);?>",
            icon: '/images/marker.png'
        });

        var infowindow = new google.maps.InfoWindow({
            content: content,
            size: new google.maps.Size(50, 50),
            position: latlng
        });

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
        });
    }
</script>
<?php endif;?>