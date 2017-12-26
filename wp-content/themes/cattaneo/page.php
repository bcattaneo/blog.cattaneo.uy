<?php

	get_header();

?>

					<?php if ( have_posts() ) : ?>

						<?php while ( have_posts() ) : the_post(); ?>

						<span id="a">c@ttaneo</span>:<span id="b">~</span><span id="c">$</span> cd p&aacute;ginas &amp;&amp; cat <?php the_title(); ?>.txt<br/>

						<?php the_content(); ?><br/>

						<?php endwhile; ?>

						<?php else : ?>

					<?php endif; ?>

					<span id="a">c@ttaneo</span>:<span id="b">~</span><span id="c">$</span> cd <a href="index.php">..</a>

<?php get_footer(); ?>