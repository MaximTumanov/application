<?php
$letters = explode(',', $letters);
$arrLet = array(
    'ru' => array(
        'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ж', 'З', 'И', 'К',
        'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф',
        'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Э', 'Ю', 'Я'
    ),
    'en' => array(
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
        'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
    ),
    'num' => array(
        '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'
    )
)
?>
<div class="left upcoming">
    <div class="wrapp">
        <!-- noindex><div id="toggle"><span class="non_act" title="Переключиться на список">список</span> -o- <span class="act" title="Переключиться на карту">карта</span></div></noindex !-->
        <h1 class="color-gray ttl"><?php echo $title?></h1>
        <?php if(false):?>
        <ul class="letters">
            <noindex>
                <?php
                foreach($arrLet['ru'] as $ru):
                    echo (in_array($ru, $letters)) ? "<li class='hse l-{$ru}'><a href='#{$ru}'>{$ru}</a></li>" : "<li>{$ru}</li>";
                endforeach;
                ?>
            </noindex>
        </ul>
        <div class="clearer"></div>
        <ul class="letters">
            <noindex>
                <?php
                foreach($arrLet['en'] as $en):
                    echo (in_array($en, $letters)) ? "<li class='hse l-{$en}'><a href='#{$en}'>{$en}</a></li>" : "<li>{$en}</li>";
                endforeach;
                ?>
            </noindex>
        </ul>
        <div class="clearer"></div>
        <ul class="letters">
            <noindex>
                <?php
                foreach($arrLet['num'] as $num):
                    echo (in_array($num, $letters)) ? "<li class='hse l-{$num}'><a href='#{$num}'>{$num}</a></li>" : "<li>{$num}</li>";
                endforeach;
                ?>
                <li class='hse activ '><a href='#ВСЕ'>ВСЕ</a></li>
            </noindex>
        </ul>
        <div class="clearer"></div>
        <?php endif;?>
        <div id="places_list" class="top-20px">
            <?php
            foreach ($cinemaList as $key => $cinema):
                $href = Route::url('cinema', array('controller' => 'cinema', 'action' => 'show', 'item_alias' => $cinema->alias));
                ?>
                <div class="twocolum p_href<?php echo ($key%2) ? '' : ' asm' ;?>" itemscope itemtype="http://schema.org/Place" href="<?php echo $href?>">
                    <meta itemprop="address" content="<?php echo $cinema->address?>">
                    <div class="place_line" data-letter="<?php echo UTF8::strtoupper(UTF8::substr($cinema->title, 0, 1));?>">
                        <div class="p_img">
                            <?php echo ($cinema->image)
                            ? HTML::MegaImg('films/cinema', 'no_img_events.gif', 'post_load', '', $cinema->title, $anons_config['CINEMA_IMG_ALL'], $cinema->image)
                            : HTML::MegaImg('films', 'no_img_events.gif', '', '');
                            ?>
                        </div>
                        <div class="p_info">
                            <h2><a itemprop="name" href="<?php echo $href?>"><?php echo  $cinema->title;?></a></h2>


                            <?php if ($cinema->address):
                            echo "<p>{$cinema->address}</p>";
                        endif;?>
                            <?php if ($cinema->tel):
                            $cinema->tel = str_replace(',', ', ', $cinema->tel);
                            echo "<p>{$cinema->tel}</p>";
                        endif;?>
                        </div>
                        <div class="p_cat"></div>
                        <div class="clearer"></div>
                    </div>
                </div>
                <?php endforeach;?>
        </div>

        <?php if (count($cinemaList) > $anons_config['items_per_page']):?>
        <div id="pag_number"></div>
        <?php endif;?>
    </div>
</div>
<script type="text/javascript">
    var use_pagination = true,
            items_per_page = <?php echo $anons_config['items_per_page']?>,
            fix_scroll = true;
</script>