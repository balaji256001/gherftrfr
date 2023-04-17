<?php get_header(); ?>
    <div id="features" class="row">
        <div class="span6">
	  <div class="feature">
            <h2>Registration</h2>
            <p>Learn more about Metro 7v7 and register your team.</p>
            <p><a class="btn danger" href="/leagues">Learn more »</a></p>
	  </div>
        </div>
        <div class="span5">
	  <div class="feature">
            <h2>Schedules</h2>
            <p>View the Metro 7v7 schedules and standings. </p>
            <p><a class="btn danger" href="/schedules">View schedules »</a></p>
	  </div>
        </div>
        <div class="span5">
	  <div class="feature">
            <h2>Questions</h2>
            <p>Get answers to your questions in our FAQ.</p>
            <p><a class="btn danger" href="/faq">Read FAQ »</a></p>
	  </div>
        </div>
<!--
        <div class="span5">
          <h2>News</h2>
          <p>Read the latest Metro 7v7 announcements.</p>
          <p><a class="btn danger" href="/news">Read news »</a></p>
        </div>
-->
      </div>
    </div>

<!--   <?php roots_content_before(); ?>
    <div id="content" class="<?php echo $roots_options['container_class']; ?>">
      <div class="span6">
        <h2>Leagues</h2>
        <p>Learn about the Metro 7v7 Men's and Women's leagues.</p>
        <p><a class="btn danger" href="#">Learn more »</a></p>
      </div>
    <?php roots_main_before(); ?>
      <div class="span10">    
        <?php roots_loop_before(); ?>
        <?php get_template_part('loop', 'page'); ?>
        <?php roots_loop_after(); ?>
      </div>
    <?php roots_main_after(); ?>
    </div>
  <?php roots_content_after(); ?>
 -->

  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo $roots_options['container_class']; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo $roots_options['main_class']; ?>" role="main">
        <div class="container">
          <?php roots_loop_before(); ?>
          <?php get_template_part('loop', 'page'); ?>
          <?php roots_loop_after(); ?>
        </div>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
    <?php roots_sidebar_before(); ?>
      <aside id="sidebar" class="<?php echo $roots_options['sidebar_class']; ?>" role="complementary">
      <?php roots_sidebar_inside_before(); ?>
        <div class="container">
          <?php get_sidebar(); ?>
        </div>
      <?php roots_sidebar_inside_after(); ?>
      </aside><!-- /#sidebar -->
    <?php roots_sidebar_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>

<?php get_footer(); ?>