<?php get_header('archive'); ?>
<div class="container">
<main>

  <div class="content_archive">

    <div class="archive_box">

  <?php if( is_year() ) : ?>
    <div class="title_box">
      <h2 class="archive_title"><?php echo get_the_date('Y年'); ?></h2>
    </div>
  <?php endif; ?>
  <?php if( is_month() ) : ?>
    <div class="title_box">
      <h2 class="archive_title"><?php echo get_the_date('Y年m月'); ?></h2>
    </div>
  <?php endif; ?>
  <?php if( is_day() ) : ?>
    <div class="title_box">
      <h2 class="archive_title"><?php echo get_the_date('Y年m月d日'); ?></h2>
    </div>
  <?php endif; ?>


  <?php if(have_posts()): while(have_posts()): the_post(); ?>

     <?php if (get_post_type() === 'gikai_news'): ?> <!--カスタム投稿"議会ニュース"だったら -->

      <article <?php post_class( 'article-list' ); ?>>

        <div class="list_box">

          <div class="img-wrap">
            <div class="category_list_eria">
              <span class="<?php echo esc_html(get_post_type_object(get_post_type())->name); ?>"> <!--投稿タイプのスラッグを表示 -->
                <!--投稿タイプのラベルとアーカイブへのリンク -->
                <?php
                $postobj = get_post_type_object( 'gikai_news' );
                $label = $postobj->label;
                echo '<a href="'.get_post_type_archive_link( 'gikai_news' ).'">'.$label.'</a>';
                ?>
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

    <?php endif ;?><!--議会ニュース終わり -->


    <?php if (get_post_type() === 'post'): ?> <!--投稿(お知らせ)だったら -->

      <div class="time_eria">
        <time datetime="<?php the_time('Y-m-d'); ?>"><p><?php the_time('Y.m.d'); ?></p></time>
      </div>

      <article <?php post_class( 'article-list-news' ); ?>>

        <div class="text">
          <!--タイトル-->
          <h2><?php the_title(); ?></h2>
        </div><!--end text-->

      </article>
    <?php endif ;?> <!--お知らせ終わり -->


    <?php endwhile; else:?>
    <p>記事がありません。</p>
    <?php endif; ?>



   <!--ページネーション  -->
     <?php
      if ( function_exists( 'pagination' ) ) :
          pagination( $wp_query->max_num_pages, get_query_var( 'paged' ) );
      endif;
     ?>

      </div>

      <?php get_sidebar(); ?>

    </div>
  <p class="go_back">
    <a href="<?php echo esc_url( home_url('/') ); ?>/sintyaku">＜ 新着情報一覧へ</a>
  </p>
  </main>

<?php get_footer(); ?>
