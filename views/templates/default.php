<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
<head>
	<meta http-equiv='Content-type' content='text/html; charset=UTF-8' />
	<meta http-equiv='Content-Language' content='ru' />
	<title><?php echo $title;?></title>
	<meta name='keywords' content='<?php echo $keywords;?>' />
	<meta name='description' content='<?php echo $description;?>' />
	<meta name='copyright' content='' />
	<meta name='image' content='<?php echo $image;?>' />
	<meta name='date' content='<?php echo $date;?>' />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta name="viewport" id="viewport" content="target-densitydpi=device-dpi; initial-scale=0.5, minimum-scale=0.3, maximum-scale=1.0, user-scalable=yes" />
	<meta name="apple-mobile-web-app-capable" content="yes"> 
	<meta name="HandheldFriendly" content="yes" />

	<link rel="shortcut icon" type="image/x-icon" href="http://anons.dp.ua/images/favicon.ico" type="image/x-icon" />
	<meta name='yandex-verification' content='5c88cd7687bb8c6e' />
	<?php foreach($styles_header as $file => $type) { echo HTML::style($file, array('media' => $type)); }?>

	<!--[if IE]>
	<link href="/css/ie.css?<?php echo filemtime('css/ie.css')?>" rel="stylesheet" media="screen" />
	<![endif]-->

	<script type="text/javascript" src="http://vk.com/js/api/share.js?11" charset="windows-1251"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34064688-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php if($use_vkontakte_comment):?><script type="text/javascript" src="//vk.com/js/api/openapi.js?60"></script><?php endif?>
</head>

<?php if($use_cap === true):?>
<body>
	<div id="cap">
		<p>Извините, ведутся регламентные работы, а точнее наш программист что-то сломал.</p>
		<p>Он в курсе, поэтому вскоре все будет хорошо.</p>
	</div>
</body>
<?php else:?>

<body class="<?php echo $active_menu?> fix_toolbar" itemscope itemtype="http://schema.org/WebPage">
	<div id="ie"></div>
	<div id="anonsdpua" class="project">
		<?php if(isset($use_search_widget_in_second_pages) && $use_search_widget_in_second_pages && isset($search_widget_second_page)) { echo $search_widget_second_page; }; ?>
    <!-- header -->
  	<div class="header">
   		<!-- menu -->
				<?php echo $menu;?>
			<!-- //menu -->   	
    </div>
    <!-- //header-->

		<div id="wrapper" class="event">		
			<div class="main">
	      	<div class="dates">
						<?php echo $content;?>
					<div class="clearer"></div> 
				</div>
			</div>
		</div>
		<!-- footer -->
			<?php echo $footer;?>
		<!-- //footer -->
	</div>

	<noindex>
	<?php foreach($styles_footer as $file => $type) { echo HTML::style($file, array('media' => $type)); }?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>
	<script src="http://swip.codylindley.com/jquery.popupWindow.js"></script>
	<?php foreach($scripts as $file) { echo HTML::script($file, null, TRUE); }?>
	</noindex>

	<div id="top"><nobr>Вверх &uarr;</nobr></div>

<!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter17922640 = new Ya.Metrika({id:17922640, enableAll: true, trackHash:true, webvisor:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/17922640" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
	
</body>
<?php endif;?>
</html>
