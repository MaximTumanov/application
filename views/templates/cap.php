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

	<link rel="apple-touch-icon" href="http://anons.dp.ua/touch-icon-iphone.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="http://anons.dp.ua/touch-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="http://anons.dp.ua/touch-icon-iphone4.png" />


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


<body>
	<div id="cap">
		<p><strong>Извините, ведутся регламентные работы</strong></p>
	</div>
</body>

</html>
