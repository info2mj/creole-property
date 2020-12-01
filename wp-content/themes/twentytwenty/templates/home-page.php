<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<main id="site-content" role="main">

	
<main id="site-content" role="main">
    <article class="post-2 page type-page status-publish hentry" id="post-2">
        <header class="entry-header has-text-align-center header-footer-group">
            <div class="entry-header-inner section-inner medium">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </div>
            <!-- .entry-header-inner -->
        </header>
        <!-- .entry-header -->
        <div class="post-inner thin">
            <div class="entry-content">
				<div class="book-search-content">
					<form method="post" action="" name="search_form" id="search_form">
					
					<div class="custom-margin"></div>
					<?php
						$countries = get_terms( array(
							'taxonomy' => 'countries',
							'hide_empty' => false,
						) );
						$cities = get_terms( array(
							'taxonomy' => 'cities',
							'hide_empty' => false,
						) );
					?>
					<div class="row">
						<div class="col-md-6">
							<div class="search_by_name">
								<span class="search_publisher">Country: </span>
								<select name="search_country" id="search_country">
									<option value="">Select Country</option>
									<?php foreach($countries as $country){ ?>
										<option value="<?php echo $country->term_id; ?>"><?php echo $country->name; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="search_by_name">
								<span class="search_publisher">City: </span>
								<select name="search_city" id="search_city" disabled>
									<option value="">Select City</option>
									<?php foreach($cities as $city){ ?>
										<option value="<?php echo $city->slug; ?>"><?php echo $city->name; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					
					<div class="custom-margin"></div>
					<div class="row">
						<div class="col-md-12">
							<div class="search_by_name">
								<?php /*<input type="submit" name="sbt" class="sbt_search" value="Search"> */ ?>
							</div>
						</div>
					</div>
					</form>
				</div>
				
				<div class="custom-margin"></div>
				<div class="custom-margin"></div>
				
				<div class="book-main-content">
					<table class="book-table" width="100%">
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>City</th>
							<th>Country</th>
						</tr>
					<?php
					$paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
					$post_per_page = 5;
					$args = array(
						 'post_type' => 'properties',
						 'posts_per_page' => $post_per_page,
						 'paged' => $paged,
					);
					$loop = new WP_Query( $args );
					$i = (($paged - 1) * $post_per_page ) + 1;
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php 
							unset($city); unset($country);
							$term_cities = get_the_terms( $loop->ID , 'cities' );
							if($term_cities){
								foreach($term_cities as $term_city){
									$city[] = $term_city->name;
								}
							}
							
							$term_countries = get_the_terms( $loop->ID , 'countries' );
							if($term_countries){
								foreach($term_countries as $term_country){
									$country[] = $term_country->name;
								}
							}
						?>
						<tr>
							<td><?php echo $i; ?></a></td>
							<td><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></td>
							<td><?php echo implode(', ', $city); ?></td>
							<td><?php echo implode(', ', $country); ?></td>
						</tr>
						 
					<?php $i++; endwhile; ?>
					</table>
					<div class="custom-margin"></div>
					<div class="pagination">
						 <?php
						 $big = 999999999;
						 echo paginate_links( array(
							  'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
							  'format' => '?page=%#%',
							  'current' => max( 1, get_query_var('page') ),
							  'total' => $loop->max_num_pages,
							  'prev_text' => 'Previous',
							  'next_text' => 'Next'
						 ) );
					?>
					</div>
					<?php wp_reset_postdata(); ?>		
				</div>	
            </div>
            <!-- .entry-content -->
        </div>
        <!-- .post-inner -->

        <div class="section-inner">
            <div class="post-meta-wrapper post-meta-edit-link-wrapper">
                
                <!-- .post-meta -->
            </div>
            <!-- .post-meta-wrapper -->
        </div>
        <!-- .section-inner -->
    </article>
    <!-- .post -->
</main>
	

</main><!-- #site-content -->

<?php get_footer(); ?>