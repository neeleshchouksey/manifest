<div id="right-panel-post" class="span4 pull-right shadow-block margin-left-0 recent-post">
	<h3 class="cat-title heading-a border-theme-l">Recent Posts</h3>
	<ul class="r-post-list">
		<?php
		//echo '<br>';print_r($all_posts);
		foreach($all_posts as $posts){ ?>
		<li> <a href="<?php echo $posts['guid'];?>">
		  <p><?php echo $posts['post_title'];?></p>
		  <?php $d = explode(' ',$posts['post_date'])?>

		  <small><?php echo date('d-F-Y',strtotime($d[0]));?></small> </a>

		</li><?php }?>
	</ul>
</div>
