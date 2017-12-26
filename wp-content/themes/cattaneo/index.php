<?php
	get_header();
?>
<span id="a">c@ttaneo</span>:<span id="b">~</span><span id="c">$</span> ls entradas/<br/><br/>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<a href="<?php the_permalink(); ?>"><?php echo get_the_date( 'd_m_Y' ); ?>_<?php the_title(); ?>.txt</a><br/>
	<?php endwhile; ?>
	<?php next_posts_link( '<<<' ); ?><?php previous_posts_link( '>>>' ); ?><br/>
	<?php else : ?>
<?php endif; ?>

<br/><span id="a">c@ttaneo</span>:<span id="b">~</span><span id="c">$</span> ls github/<br/><br/>
<a href="https://github.com/bcattaneo/cattaneo.uy" target="_blank">cattaneo.uy</a><br/>
<a href="https://github.com/bcattaneo/UnTube" target="_blank">UnTube</a><br/>
<a href="https://github.com/bcattaneo/Facebook.pl" target="_blank">Facebook.pl</a><br/>
<a href="https://github.com/bcattaneo/scripts.irssi.org" target="_blank">scripts.irssi.org</a><br/>
<a href="https://github.com/bcattaneo/dotfiles" target="_blank">dotfiles</a><br/>
<a href="https://github.com/bcattaneo/IRPbot.pl" target="_blank">IRPbot.pl</a><br/>

<?php get_footer(); ?>