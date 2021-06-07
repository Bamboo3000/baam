<?php

/**
 * Template Name: Flexible content
 */

get_header(); ?>

<?php if (get_field('above_the_fold') && have_rows('above_the_fold')) : ?>
	<?php while (have_rows('above_the_fold')) : the_row(); ?>
		<?php if (have_rows('sections_above_the_fold')) : ?>
			<section class="above-the-fold">
				<?php while (have_rows('sections_above_the_fold')) : the_row(); ?>
					<?php if (get_row_layout() == 'big_cta_section' && get_sub_field('link')) : ?>
						<?php get_template_part('flexparts/big-cta'); ?>
					<?php elseif (get_row_layout() == 'copy_section' && get_sub_field('text')) : ?>
						<?php get_template_part('flexparts/copy'); ?>
					<?php elseif (get_row_layout() == 'person' && get_sub_field('name')) : ?>
						<?php get_template_part('flexparts/person'); ?>
					<?php elseif (get_row_layout() == 'header_animation' && get_sub_field('desktop_animation')) : ?>
						<?php get_template_part('flexparts/header-animation'); ?>
					<?php elseif (get_row_layout() == 'slider' && get_sub_field('slides')) : ?>
						<?php get_template_part('flexparts/slider'); ?>
					<?php elseif (get_row_layout() == 'card_with_columns' && get_sub_field('columns')) : ?>
						<?php get_template_part('flexparts/card-columns'); ?>
					<?php elseif (get_row_layout() == 'small_cta_section' && get_sub_field('link')) : ?>
						<?php get_template_part('flexparts/small-cta'); ?>
					<?php elseif (get_row_layout() == 'two_columns_cta' && get_sub_field('link')) : ?>
						<?php get_template_part('flexparts/columns-cta'); ?>
					<?php endif; ?>
				<?php endwhile; ?>
			</section>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('sections')) : ?>
	<?php while (have_rows('sections')) : the_row(); ?>
		<?php if (get_row_layout() == 'big_cta_section' && get_sub_field('link')) : ?>
			<?php get_template_part('flexparts/big-cta'); ?>
		<?php elseif (get_row_layout() == 'copy_section' && get_sub_field('text')) : ?>
			<?php get_template_part('flexparts/copy'); ?>
		<?php elseif (get_row_layout() == 'person' && get_sub_field('name')) : ?>
			<?php get_template_part('flexparts/person'); ?>
		<?php elseif (get_row_layout() == 'header_animation' && get_sub_field('desktop_animation')) : ?>
			<?php get_template_part('flexparts/header-animation'); ?>
		<?php elseif (get_row_layout() == 'slider' && get_sub_field('slides')) : ?>
			<?php get_template_part('flexparts/slider'); ?>
		<?php elseif (get_row_layout() == 'card_with_columns' && get_sub_field('columns')) : ?>
			<?php get_template_part('flexparts/card-columns'); ?>
		<?php elseif (get_row_layout() == 'small_cta_section' && get_sub_field('link')) : ?>
			<?php get_template_part('flexparts/small-cta'); ?>
		<?php elseif (get_row_layout() == 'two_columns_cta' && get_sub_field('link')) : ?>
			<?php get_template_part('flexparts/columns-cta'); ?>
		<?php elseif (get_row_layout() == 'contact_form' && get_sub_field('contact_form')) : ?>
			<?php get_template_part('flexparts/contact-form'); ?>
		<?php elseif (get_row_layout() == 'careers' && get_sub_field('contact_form')): ?>
			<?php get_template_part('flexparts/careers'); ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();
