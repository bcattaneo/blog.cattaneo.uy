<?php
	get_header();
?>
<span id="a">c@ttaneo</span>:<span id="b">~</span><span id="c">$</span> ls entradas<br/><br/>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<a href="<?php the_permalink(); ?>"><?php echo get_the_date( 'd_m_Y' ); ?>_<?php the_title(); ?>.txt</a><br/>
	<?php endwhile; ?>
	<?php next_posts_link( '<<<' ); ?><?php previous_posts_link( '>>>' ); ?><br/>
	<?php else : ?>
<?php endif; ?>

<br/><span id="a">c@ttaneo</span>:<span id="b">~</span><span id="c">$</span> ls cosas<br/><br/>
<a href="http://hackspace.org.uy/" target="_blank">Hackspace UY</a><br/>
<a href="https://github.com/bcattaneo" target="_blank">GitHub</a><br/>
<a href="http://cattaneo.uy/public/cosas/hardware1.png" target="_blank">ThinkPads</a><br/>

<?php get_footer(); ?>
