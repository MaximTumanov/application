
<div id="footer">
          <div class="fwrapp">
        	<div class="copyright small left" xmlns:v="http://rdf.data-vocabulary.org/#">
            	<p class="bold">© <?php echo date('Y');?> <span typeof="v:Breadcrumb"><a href="http://anons.dp.ua/" rel="v:url" property="v:title">Anons.dp.ua</span></a>
            	</p>
            	<p>
            		<span typeof="v:Breadcrumb"><a href="#anons" rel="v:url" property="v:title"><?php echo $anons_config['the_best']?></a></span>
            	</p>
            </div>

				<div class="footer_raiting" xmlns:v="http://rdf.data-vocabulary.org/#" typeof="v:Review-aggregate">
           <span property="v:itemreviewed">Афиша Днепропетровска / Anons.dp.ua</span>
           <span rel="v:rating">
              <span typeof="v:Rating">
                 <span property="v:average">4.3</span>
                 <span property="v:best">5</span>
              </span>
              <span property="v:votes"><?php rand(5, 100);?></span>
             <span property="v:count">345</span>
           </span>
        </div>
        	<div class="more-links">
        	
				<div class="align_center">
				    <div class="align_center_to_left">
				        <div class="align_center_to_right">
			            	<p class="small">
                      <?php foreach($anons_config['menu_footer'] as $key => $menu){
                        $active = ( $key == $active_menu ) ? 'class="active"' : '';
			                  echo "<a {$active} href='{$menu['href']}' title='{$menu['title']}'>{$menu['title']}</a>";
                      }
                      ?>

			              </p>

				        </div>
				    </div>
				</div>
				
            </div>
        </div>
      </div>