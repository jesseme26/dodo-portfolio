<?php get_header(); ?>


<main class="content">	

<?php //display the output of the slider plugin
mmc_slider();
?>
<?php //display the output of the slider plugin (check to make sure it exists first)
if(function_exists('mmc-slider')):
	mmc_slider();
endif;

?>


	<?php //The Loop Begins Here
	if( have_posts() ):
		while( have_posts() ):
			the_post(); 
			?>
			<article class="post">
				<h2 class="entry-title"> 
					<a href="<?php the_permalink(); ?>"> 
						<?php the_title(); ?> 
					</a>
				</h2>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				
			</article>
			<!-- end .post -->

			<?php 
		endwhile;
	else:
		echo 'Sorry, there are no posts to show';
	endif; 
			//end of The Loop
	?>

</main>
<!-- end #content -->

<?php get_sidebar('home'); //include sidebar-home.php ?>		

<?php get_footer(); //include footer.php ?>