<?php get_header(); ?>

<main class="main-content bg-light">

  <div class="container py-5">
    <!-- 固定ページのタイトル -->
    <h1><?php the_title(); ?></h1>
    
    <!-- 固定ページの内容 -->
    <div class="content">
      <?php the_content(); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
