<?php get_header('archive'); ?>
<div class="container">
<main>

  <div class="content_single">

    <?php if(have_posts()): the_post(); ?>
    <article <?php post_class( 'article-content' ); ?>>
      <div class="article-info">

          <!--カテゴリ取得-->
          <?php
          $terms = get_the_terms($post->ID,'val');
          foreach( $terms as $term )
          ?>
          <span class="<?php echo $term->slug ?>"><?php echo $term->name; ?></span>

          <!--タイトル-->
        <h2 class="article-title-s"><?php the_title(); ?></h2>
      </div>

          <!--本文取得-->
      <?php the_content(); ?>


      <div class="p_page_pager_block">

        <?php
          $prevpost = mod_get_adjacent_post('prev', array($post_type, '', 'true')); //前の記事
          $nextpost = mod_get_adjacent_post('next', array($post_type, '', 'true')); //次の記事
          if( $prevpost or $nextpost ){ //前の記事、次の記事いずれか存在しているとき
          ?>
        <div class="p_page_pager">
          <?php
          if ( $prevpost ) { //前の記事が存在しているとき
          echo '<div class="p_pager_prev">' . '<a href="' . get_permalink($prevpost->ID) . '"> ' . '<p> '.get_the_title($prevpost->ID) . '</p>' .'</a></div>';
          } else { //前の記事が存在しないとき
          echo '<div class="top_next"><a href="' . home_url('/gikai_news') . '">記事一覧へ戻る</a></div>';
          }
          if ( $nextpost ) { //次の記事が存在しているとき
          echo '<div class="p_pager_next">' . '<a href="' . get_permalink($nextpost->ID) . '">' .'<p> '. get_the_title($nextpost->ID) . '</p>' . '</a></div>';
          } else { //次の記事が存在しないとき
          echo '<div class="top_prev"><a href="' . home_url('/gikai_news') . '">記事一覧へ戻る</a></div>';
          }
          ?>
        </div>
        <?php } ?>

      </div><!--/p_page_pager_block -->
    </article>
    <?php endif; ?>
    <?php get_sidebar(); ?>

  </div>



</main>

</div><!--end container-->



<?php get_footer(); ?>
