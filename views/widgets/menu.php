<?php
	$hrefs = $anons_config->get('menu');
?>
	<div class="menu">
		<div class="logo"><a href="<?php echo $hrefs['main']['href']?>"><img src="/images/logo.png" alt="<?php echo $hrefs['main']['title']?>" title="<?php echo $hrefs['main']['title']?>"/></a></div>
		<nav itemscope itemtype="http://schema.org/SiteNavigationElement">
			<ul>
				<?php foreach ($hrefs as $key => $hr) { ?>
					<?php if($key == 'main' || (!$anons_config['show_social_buttons'] && $key == 'my') || (!$anons_config['show_social_buttons'] && $key == 'add')) continue; ?>
					<li class="<?php echo ($key == $active_menu) ? 'a' : ''; ?>">
					  <a itemprop="url" href="<?php echo $hr['href']?>" title="<?php echo $hr['seo']?>"><span itemprop="name"><?php echo $hr['title']?></span></a>
					</li>
				<?php } ?>		            
			</ul>
		</nav>
	</div>