<aside id="sidebar">
<div class="sidebar-wrapper">


<div class="sidebar-wrapper">
<h4 class="sidebar-title">カレンダー</h4>
<?php get_calendar(); ?>
</div>


<h4 class="sidebar-title">カテゴリー</h4>
<ul>
  <li>
    <?php wp_list_categories( 'title_li=' ); ?>
  </li>

  <li>
    <?php wp_list_categories( array('title_li' =>'','taxonomy' =>'val') ); ?>
  </li>

</ul>
</div>

<div class="sidebar-wrapper">
<h4 class="sidebar-title">最近の投稿</h4>
<ul>
<?php query_posts( array(
     'post_type' => array( 'gikai_news'),
     'posts_per_page' => 5 ));
 ?>
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
<?php endwhile; endif; wp_reset_query(); ?>
</ul>
</div>



</aside>
