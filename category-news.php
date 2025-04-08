<?php get_header('archive'); ?>

<div class="container">

<main>
  <div class="content_archive">


    <div class="archive_box">

      <div class="title_box_c">
        <h2 class="archive_title_c"><img src="<?php echo get_template_directory_uri(); ?>/images/info_title.svg"></h2>
      </div>

      <?php if(have_posts()): while(have_posts()): the_post(); ?>

       <!--ループ開始-->

        <article <?php post_class( 'article-list-news' ); ?>>

          <div class="day"><?php the_time('Y年n月j日'); ?></div>

          <div class="text">
            <!--タイトル-->
            <h2><?php the_title(); ?></h2>
          </div><!--end text-->

        </article>

      <?php endwhile; endif; ?> <!--メインループをリセット -->


     <!--ページネーション  -->
       <?php
        if ( function_exists( 'pagination' ) ) :
            pagination( $wp_query->max_num_pages, get_query_var( 'paged' ) );
        endif;
       ?>

    </div> <!--/archive_box -->

    <?php get_sidebar(); ?>

  </div>
  <p class="go_back">
    <a href="<?php echo esc_url( home_url('/') ); ?>/sintyaku">＜ 新着情報一覧へ</a>
  </p>
  </main>
<?php get_footer(); ?>
