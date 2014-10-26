<form role="search" method="get" class="search-form" action="<?php bloginfo('url');?>">
	<label>
		<input type="search" class="search-field" placeholder="Search &hellip;" value="<?php echo (isset($_GET['s']))?$_GET['s']:'';?>" name="s" title="Search for:">
	</label>
</form>