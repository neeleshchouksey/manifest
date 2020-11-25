<div id="right-panel-cat" class="span3 pull-right shadow-block">
	<h3 class="cat-title heading-a border-theme-l"> Catagories</h3>
	<ul class="cat-list justify">
	<?php foreach($all_category_data as $category)
	{
	?>
		<li> 
			<a href="<?php echo site_url('portfolio/category/'.$category['category_id']);?>"><i class="fa fa-chevron-right"></i><?php echo $category['category'];?></a>
		</li>
	<?php
	}
	?>
	</ul>
</div>