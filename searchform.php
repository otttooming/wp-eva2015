<?php
/**
 * The template for displaying search forms in bebop
 *
 * @package bebop
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
   
    <input type="search" class="search-field" placeholder="Otsi …" value="" name="s" title="Search for:" />
	<input type="submit" class="search-submit" value="&#xf002;" /> <!-- Uses Font Awesome search icon -->
	
</form>