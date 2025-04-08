<?php get_header('archive'); ?>
<div class="container">

<main>

  <div class="content_archive">

    <div class="archive_box">

       <div class="title_box">
         <h2 class="archive_title_gikai"><img src="<?php echo get_template_directory_uri(); ?>/images/gikai-news.svg"></h2>
       </div>


  <?php if(have_posts()): while(have_posts()): the_post(); ?>

      <article <?php post_class( 'article-list' ); ?>>

        <div class="list_box">

            <div class="img-wrap">
              <div class="category_list_eria">
                <span class="<?php echo esc_html(get_post_type_object(get_post_type())->name); ?>"> <!--投稿タイプのスラッグを表示 -->
                  <!--投稿タイプのラベルとアーカイブへのリンク -->
                <?php echo get_the_term_list( $post->ID, 'val', '<span>', '/', '</span>'); ?>
                </span>
              </div>
              <div class="list_img_box">
                <?php the_post_thumbnail('medium'); ?>
              </div>
            </div>

            <div class="text">
              <a href="<?php the_permalink(); ?>" class="img-wrap-link">
                <h2><?php the_title(); ?></h2>
              </a>
              <div class="more_btn_box">
                <a href="<?php the_permalink(); ?>" class="more_btn">
                <span>続きを読む＞</span>
                </a>
              </div>
            </div>

        </div>

      </article>
<?php endwhile; endif; ?> <!--メインループをリセット -->


    <!--ページネーション  -->
     <?php
if ( function_exists( 'pagination' ) ) :
    pagination( $wp_query->max_num_pages, get_query_var( 'paged' ) );
endif;
     ?>

    </div><!--/archive_box -->

    <?php get_sidebar(); ?>

  </div>

</main>

<?php get_footer(); ?>
