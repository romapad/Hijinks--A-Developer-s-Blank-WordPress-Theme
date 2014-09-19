<?php get_header(); ?>

	<article>
		<h1>Результаты поиска</h1>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h1>
			<?php the_excerpt();?>
		<?php endwhile; ?>
	
		<?php else : ?>
	
			<p>Ничего не найдено. Попробовать еще раз?</p>
			<?php get_search_form(); ?>
	
		<?php endif; ?>
	</article>

<?php get_footer(); ?>
