   <!--//////////////////////////////////////Menu-->
   <a href="#" class="nav-toggle">Toggle Navigation</a>
    <nav class="cmn-tile-nav">
		<ul class="clearfix">
      <?php
      $i=1;
       foreach($menus as $menu): ?>
			<li class="colour-<?php echo $i; $i++; ?>"><a href="<?php echo $menu['link'] ?>"><?php echo $menu['name'] ?></a></li>
      <?php endforeach; ?>
		</ul>
    </nav>