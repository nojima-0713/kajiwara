<?php
/*
Template Name: 新着情報ページテンプレート
*/
?>


<?php get_header('archive'); ?>
<div class="container">

  <main>

   <div class="content_archive">

     <div class="archive_box">

       <div class="title_box">
         <h2 class="archive_title_gikai"><img src="<?php echo get_template_directory_uri(); ?>/images/sintyaku_title.svg"></h2>
       </div>

	<!-- 新着情報 -->


    <?php
    $paged = get_query_var('paged') ?: 1;
    $args  = array(
        'post_type' =>array('post','gikai_news'),
        'posts_per_page' => 4,
        'paged' => $paged, //ページネーションに必須
      );
    $the_query = new WP_Query( $args );
     if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();
     ?>

     <?php if (get_post_type() === 'gikai_news'): ?> <!--カスタム投稿"議会ニュース"だったら -->

    <article <?php post_class( 'article-list' ); ?>>

      <div class="list_box">

        <div class="img-wrap">
          <div class="category_list_eria">
<span class="<?php echo esc_html(get_post_type_object(get_post_type())->name); ?>"> <!--投稿タイプのスラッグを表示 -->
  <!--投稿タイプのラベルとアーカイブへのリンク -->
<?php echo get_the_term_list( $post->ID, 'val', '<span>', '/', '</span>'); ?>
</span>
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
  <?php endif ;?>


  <?php if (get_post_type() === 'post'): ?> <!--投稿(お知らせ)だったら -->
    <article <?php post_class( 'article-list-news' ); ?>>

      <div class="day"><?php the_time('Y年n月j日'); ?></div>

      <div class="text">
        <!--タイトル-->
        <h2><?php the_title(); ?></h2>

      </div><!--end text-->

    </article>
  <?php endif ;?>



    <?php endwhile; endif;?>

   <!--ページネーション  -->
     <?php
     if ( function_exists( 'pagination' ) ) :
         pagination( $the_query->max_num_pages, $paged );  //$wp_query ではなく $the_query ないことに注意！
     endif;
     ?>

    <?php wp_reset_postdata(); ?> <!--サブループをリセット -->



     </div> <!--/archive_box-->

    <?php get_sidebar(); ?>

   </div>

  </main>

<?php get_footer(); ?>
