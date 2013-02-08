<?php
	$item->title = str_replace('\'', '"', $item->title);

	HTML::replaceImg(&$item->desc);	
?>
<div class="left upcoming item">
	<div class="wrapp fix">
  	<h1><p class="event_title"><?php echo $item->title?></p></h1>
  	<div class="event_info">

      <?php if ($item->images_folder):?>
        <div class="slider_fixed_margin">
          <div id="featured" class="fixed_size"> 
            <?php

              $folder = '../adminka.anons.dp.ua/images/blog_images/' . $item->images_folder;
              $files = scandir($folder);
              
              foreach($files as $file){
                $file_part = explode('.', $file);
                if(count($file_part) != 2) continue;
                if(!preg_match('/^(?:jpe?g|png|[gt]if)$/', $file_part[1])) continue;
                echo "<img src='http://{$anons_config['path_to_img']}/images/blog_images/{$item->images_folder}/{$file}?w=645&h=450&tc&ns' />";
              }

            ?>
          </div>
        </div>
      <?php endif;?>

      <div class="blog_text">
        <?php echo $item->desc?>              
      </div>

      <?php if ($item->vk_video):?>
        <iframe type="text/html" width="607" height="360" src="<?php echo $item->vk_video; ?>" frameborder="0"></iframe>
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
  	<div class="clearer"></div>          		
  </div>
</div>

<?php if ($item->images_folder):?>
<script>
 var use_slider = true;
</script>
<?php endif;?>