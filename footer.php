<?php if(!is_front_page()) : ?>
  <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <?php if(is_active_sidebar('sidebar')): ?>
      <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
  </div><!-- /.blog-sidebar -->
<?php endif; ?>
  </div><!-- /.row -->

  </div><!-- /.container -->



<style>
.footer_custom{background-color:#343a40; padding:3em 3em 6em 3em;text-align: center!important;}
  @media only screen and (max-width: 767px) and (min-width: 280px) {
#navbarNavDropdown3 {
    display: block!important;
}
}
</style>

<div class="footer_custom">
<footer class="navbar navbar-expand-lg navbar-dark bg-dark">


 


        <?php
        wp_nav_menu( array(
            'theme_location'    => 'footer',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarNavDropdown3',
            'menu_class'        => 'nav navbar-nav ml-auto mr-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker()
    ) );
        ?>
</footer>

  


    <div class="row">
    <div class="col">
      <p style="color: #fff">&COPY 2018 <a style="color: orange" href="//chrischiera.com/sample.htm">Push-Pin Interactive</a></p>
    </div>
  </div>
    
</div>
<?php wp_footer(); ?>





<script src="<?php bloginfo('template_url'); ?>/js/jQueryv3.2.1.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>

</body>
</html>
