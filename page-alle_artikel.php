
<?php 
/* Template Name: Alle Artikel
 *
 * Onlinebeispiel: http://toscho.de/uebersicht/alle-artikel/
 * Diese Seite als ›_all_files.php‹ im Themeverzeichnis speichern und beim
 * Erstellen einer neuen Seite als Vorlage verwenden.
 */
get_header(); ?>
	<!-- Content -->
	<!-- Left (Blog entrys)-->
	<div class="wrapper2">
	<div class="left-container">

		<ul>
			<?php
				query_posts("posts_per_page=-1");
				while (have_posts()) : the_post() ?>
			<li>
				<small>#<?php the_ID(); ?>, <?php the_time('m/y') ?> </small> 
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link zu <?php echo htmlentities( get_the_title() ); ?>">
				<?php the_title(); ?></a> 
				<small>(<?php comments_number('0','1','%');?>)</small>
			</li>
			<?php 
				// Reset Query
				wp_reset_query();
				endwhile; 
			?>
		</ul>


	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
