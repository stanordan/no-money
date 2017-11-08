<!DOCTYPE html>
<html>
    <head>
	<?php if ( ! is_preview() ) {
	    include "analytics.txt";
	} ?>
	<?php wp_head(); ?>
	<title>
	    <?php
	    global $page, $paged;
	    wp_title( '|', true, 'right' );
	    bloginfo( 'name' );
	    ?>
	</title>
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/no-money/style.css">
    </head>
    <div style="clear:both;"></div> 
    <body <?php body_class(); ?>>
	<header>
	    <table>
		<td>
		    <div class="jerry">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img style="float:left;margin: 0;" src="https://www.gravatar.com/avatar/64afae7769893a07d98beff5cca560c6?s=147" style="border:1px solid black;max-width:100%;" alt="Welcome to Computer!"></a>
    </div>
</td>
<td>
<div style="float:left">
    <h1 style="margin-bottom: 0;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    <aside style="margin-top: 0;"> <?php bloginfo( 'description' ); ?></aside>
</div></td></table></header>
