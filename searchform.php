<form role="search" method="get" class="relative" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" aria-label="Search" name="s"
		placeholder="<?php echo esc_attr_x( 'Type your keyword', 'placeholder', 'kerapy' ); ?>"
		value="<?php the_search_query(); ?>"
		class="rounded-0  form-control py-3">

	<input type="hidden" name="post_type[]" value="post">

	<button type="submit" class="">
        <i class="fa-solid fa-magnifying-glass"></i>
	</button>
</form>